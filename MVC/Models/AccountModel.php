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
    
        public function dangky($taikhoan,$matkhau,$ten,$sdt,$ngaysinh,$diachi,$email)
        {
            $sql = "INSERT INTO account (taikhoan,password,MAKH,QUYEN,ten,sdt,ngaysinh,diachi,email) VALUES ('$taikhoan','$matkhau','$taikhoan+2020',0,'$ten','$sdt','$ngaysinh','$diachi','$email')";
            $result =mysqli_query($this->con,$sql );
            if($result)
            {
                return true;
            }
            else return false;
        }
        public function dangnhap($taikhoan,$matkhau)
        {
            $sql = "SELECT*FROM account WHERE taikhoan='$taikhoan'AND password='$matkhau' AND QUYEN=0" ;
            $result =mysqli_query($this->con,$sql );
            if(mysqli_num_rows($result)>0)
            {
                return true;
            }
            else return false;
              
        }
        public function dangnhap1($taikhoan,$matkhau)
        {
            $sql = "SELECT*FROM account WHERE taikhoan='$taikhoan'AND password='$matkhau' AND QUYEN=1" ;
            $result =mysqli_query($this->con,$sql );
            if(mysqli_num_rows($result)>0)
            {
                return true;
            }
            else return false;
              
        }
        public function capnhatmatkhau($taikhoan,$matkhau,$matkhaunew)
        {
            $sql1="SELECT*FROM account WHERE taikhoan='$taikhoan'AND password='$matkhau'";
            $result1 =mysqli_query($this->con,$sql1 );
            if(mysqli_num_rows($result1)>0)
            {
                $sql = "UPDATE account SET password='$matkhaunew' WHERE taikhoan='$taikhoan'AND password='$matkhau'";
                $result =mysqli_query($this->con,$sql );
                if($result)
            {
                return true;
            }
            else return false;
                
            }
            else return false;
           
            
        }
        public function capnhathoso($taikhoan,$matkhau,$tenmoi,$sdtmoi,$ngaysinhmoi,$diachimoi)
        {
            $sql="UPDATE account SET ten='$tenmoi',sdt='$sdtmoi',ngaysinh='$ngaysinhmoi',diachi='$diachimoi' WHERE taikhoan='$taikhoan'AND password='$matkhau'"; 
            $result =mysqli_query($this->con,$sql );
            if($result)
            {
                return true;
            }
            else return false;
            
        }
        

    }
    




?>