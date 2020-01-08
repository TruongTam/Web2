<?php

class Home extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show(){
       
        $this->view("HomeTemplate", [
            "page"=>"home",
            "data"=> json_decode($this->ProductModel->getAllData()),
            
            
        ]);
    }
}
?>