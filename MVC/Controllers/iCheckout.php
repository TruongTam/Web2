<?php

class iCheckout extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show(){
       
        $this->view("ShopTemplate", [
            "page"=>"checkout",
            "data"=> json_decode($this->ProductModel->getAllData()),
            
            
        ]);
    }
}
?>