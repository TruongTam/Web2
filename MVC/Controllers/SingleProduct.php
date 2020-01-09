<?php

class SingleProduct extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show($id){
        
        $this->view("CartTemplate", [
            "page"=>"singleproduct",
            "data"=> json_decode($this->ProductModel->getAllData()),
            "id"=>$id
            
        ]);
    }
}
?>