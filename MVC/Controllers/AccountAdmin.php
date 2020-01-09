<?php

    class AccountAdmin extends Controller 
    {
        
        public $AccountModel;
    
        function __construct(){
            $this->AccountModel = $this->model("AccountModel");
        }
        function Show($pages = false ,$soluong = false){
            if(!$pages){
                $pages = 1;
            }
           
            
            $this->view("Admin", [
                "page"=>"AccountAdmin",
                "data"=> json_decode($this->AccountModel->getAllData($pages,1)),
                "pages"=>$pages,
            ]);
        }
        function ShowUser($pages = false ,$soluong = false){
            if(!$pages){
                $pages = 1;
            }
           
            
            $this->view("Admin", [
                "page"=>"AccountAdmin",
                "data"=> json_decode($this->AccountModel->getAllData($pages,0)),
                "pages"=>$pages,
            ]);
        }
        function deleteAccount(){
            if($this->AccountModel->deleteAccount($_POST["id"])){
                $result = "Xóa thành công";
            }else{
                $result = "Xóa thất bại";
            }
        }


        

















        
    }
    



















?>