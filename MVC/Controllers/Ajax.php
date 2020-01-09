<?php 
    class Ajax extends Controller
    {
        public $ProductModel;
    
        function __construct(){
            $this->ProductModel = $this->model("ProductModel");
        }

        function searchName(){
            $a = $_POST["name"];
            echo $this->ProductModel->getDataName($a);
        }
          

    }
 






?>