<?php

    class AccountAdmin extends Controller 
    {
        
        public $AccountModel;
    
        function __construct(){
            $this->AccountModel = $this->model("AccountModel");
            
        }
        function Show($pages = false ,$soluong = false){
            if($_SESSION["Quyen" ]== '0')
            {
                $this->view("HomeTemplate",[
                    "page"=>"home"
                ]);
                return;
            }
            
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
        function addAccount(){
            $result ="";
            $quyen=0;
            if(isset($_POST['submit'])){
                $name =$_POST['name'];
                $user =$_POST["user"];
                $password =$_POST["password"];
                $sdt =$_POST["sdt"];
                $email =$_POST["email"];
                $ngaysinh =$_POST["ngaysinh"];
                $diachi =$_POST["diachi"];
                $quyen =$_POST["quyen"];
                echo $quyen;

                if( $this->AccountModel->dangky($user,md5($password,false), $name, $sdt, $ngaysinh,$diachi,$email ,$quyen)){
                    $result =" Đăng ký thành công";
                }else{
                    $result = " Đăng ký thất bại";
                }
            }
            $this->view("Admin", [
                "page"=>"addAccount",
                "result"=>$result,
            ]);
            
        
        }
        function updateAccount(){
            $result ="";
            $quyen=0;
            if(isset($_POST['submit'])){
                $name =$_POST['name'];
               
                $sdt =$_POST["sdt"];
                $email =$_POST["email"];
                $ngaysinh =$_POST["ngaysinh"];
                $diachi =$_POST["diachi"];
                $quyen =$_POST["quyen"];
                echo $quyen;

                if( $this->AccountModel->updateAccount($name, $sdt, $ngaysinh,$diachi,$email ,$quyen)){
                    $result =" Đăng ký thành công";
                }else{
                    $result = " Đăng ký thất bại";
                }
            }
            $this->view("Admin", [
                "page"=>"addAccount",
                "result"=>$result,
            ]);
            
        
        }


        

















        
    }
    



















?>