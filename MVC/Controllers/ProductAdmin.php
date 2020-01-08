<?php

class ProductAdmin extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show($pages = false){
        if(!$pages){
            $pages = 1;
        }
        $this->view("Admin", [
            "page"=>"productAdmin",
            "data"=> json_decode($this->ProductModel->getAllData($pages)),
            "pages"=>$pages,
            
        ]);
    }
    
    function addProduct(){

        $mode = "";
        if($this->checkImage()){
            $target_dir = "./img/";
            $image = $_FILES["image"];
            $arr = explode(".",$image["name"]);
            $arr[0]=rand(1000,9999);

            $name = $_POST['name'];
            $price = (int)$_POST["price"];
            $price2= (int)$_POST["price2"];
            $description = $_POST["description"];
            $tmp = "img/$arr[0].$arr[1]";
            if(move_uploaded_file($image["tmp_name"], "$tmp" )){
                if($this->ProductModel->insertProductModel($tmp,$name,$price,$price2,$description) ){
                    if(move_uploaded_file($image["tmp_name"], "$tmp" )){
                        $mode = "Thêm thành công";
                    }
                }
            }else{
                $mode = "Thêm thất bại";
            }
          
        }

   
        $this->view("Admin", [
            "page"=>"addProductAdmin",
            "mode"=>$mode,
          
        ]);
    }


    function checkImage(){
        
        if(isset($_POST["submit"])) {
            if($_FILES["image"]){
                if($_FILES["image"]["size"] != 0){
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if($check !== false) {
                            return true;
                    } else {
                        return false;
                        
                    }
                }else {
                    return false;
                }
             
            }
         
        }
    }
    function insertProduct(){
      
    }
    



    
        
}
?>