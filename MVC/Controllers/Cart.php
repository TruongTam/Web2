<?php

class Cart extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show(){
       
        $this->view("CartTemplate", [
            "page"=>"cart",
            "data"=> json_decode($this->ProductModel->getAllData()),
            
        ]);

}
}
?>