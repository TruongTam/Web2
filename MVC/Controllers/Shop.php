<?php

class Shop extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show($pages = false){
        if(!$pages){
            $pages = 1;
        }
        $this->view("ShopTemplate", [
            "page"=>"shop",
            "data"=> json_decode($this->ProductModel->getAllData($pages)),
            "pages"=>$pages,
            
        ]);
      
    }
}
?>