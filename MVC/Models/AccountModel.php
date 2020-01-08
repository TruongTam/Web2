<?php 

    class AccountModel extends DB
    {
        public function getAllData(){
            $qr = "SELECT * FROM account ";

            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }
        public function getData($id= false){
            if(!$id){
               
            }
        }
    
        public function dangky($taikhoan,$matkhau,$ten,$sdt,$ngaysinh,$diachi)
        {
            $sql = "INSERT INTO account (id,taikhoan,password,MAKH,QUYEN,ten,sdt,ngaysinh,diachi) VALUES (null,'$taikhoan','$matkhau','$taikhoan+2020','0','$ten','$sdt','$ngaysinh','$diachi')";
            mysqli_query($this->con,$sql );
            
        }
        public function dangnhap($taikhoan,$matkhau)
        {
            $sql = "SELECT*FROM account WHERE taikhoan='$taikhoan'AND password='$matkhau'";
            
            if(mysqli_num_rows(mysqli_query($this->con,$sql ))>0)
            {
                echo "Chào mừng bạn + $taikhoan";
            }
            else
            {
                echo"ngu";
            }       
        }
        public function capnhatmatkhau($taikhoan,$matkhau,$matkhaunew)
        {
            $sql = "UPDATE account SET password='$matkhaunew' WHERE taikhoan='$taikhoan'AND password='$matkhau'";
            mysqli_query($this->con,$sql );
        }

    }
    




?>