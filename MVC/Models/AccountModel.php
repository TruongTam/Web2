<?php 

    class AccountModel extends DB
    {
        public function getAllData($quyen, $pages = false){
            
            if(!$pages){
                $qr = "SELECT * FROM account ";
            }else{
                $pages = ($pages-1)*10 ;
                $qr = "SELECT * FROM account WHERE QUYEN = $quyen LIMIT $pages,10";
            }

            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }
      
    
        public function dangky($taikhoan,$matkhau,$ten,$sdt,$ngaysinh,$diachi,$quyen=false)
        {
            if($quyen){
                $sql = "INSERT INTO account (taikhoan,password,MAKH,QUYEN,ten,sdt,ngaysinh,diachi,QUYEN) VALUES ('$taikhoan','$matkhau','$taikhoan',0,'$ten','$sdt','$ngaysinh','$diachi',$quyen)";
            }else{
                $sql = "INSERT INTO account (taikhoan,password,MAKH,QUYEN,ten,sdt,ngaysinh,diachi) VALUES ('$taikhoan','$matkhau','$taikhoan',0,'$ten','$sdt','$ngaysinh','$diachi')";
            }
           
            $result = mysqli_query($this->con,$sql );
            if($result){
                return true;
            }else{
                return false;
            }
            
        }
        public function dangnhap($taikhoan,$matkhau)
        {
            $sql = "SELECT*FROM account WHERE taikhoan='$taikhoan'AND password='$matkhau'";
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
        

        public function getDataName($na){
        
            $qr = "SELECT * FROM account WHERE taikhoan like '%$na%' ";
            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
    
        }
        public function getDataId($id){
        
            $qr = "SELECT * FROM `account` WHERE id = '$id' ";
            $result=  mysqli_query($this->con , $qr);
            $data= mysqli_fetch_array($result);
            return json_encode($data);
    
            
        }
        function deleteAccount($id){
            $qr = "DELETE FROM `account` WHERE  id = '$id' ";
            $result=  mysqli_query($this->con , $qr);
            if($result){
                return true;
            }
            else {
                return false;
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
        public function capnhathoso($taikhoan,$matkhau,$tenmoi,$sdtmoi,$ngaysinhmoi,$diachimoi)
        {
            $sql="UPDATE account SET ten='$tenmoi',sdt='$sdtmoi',ngaysinh='$ngaysinhmoi',diachi='$diachimoi' WHERE taikhoan='$taikhoan'AND password='$matkhau'"; 
            mysqli_query($this->con,$sql );
        }

        







    }
    




?>