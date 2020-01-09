<?php 
    class Ajax extends Controller
    {
        public $ProductModel;
        public $AccountModel;
        function __construct(){
            $this->ProductModel = $this->model("ProductModel");
            $this->AccountModel =$this->model("AccountModel");
        }

        function searchName(){
            $a = $_POST["name"];
            echo $this->ProductModel->getDataName($a);
        }
        function searchNameAccount(){
            $a = $_POST["name"];
            echo "kjfhdj";
        }
          
    }
 

?>