<?php 

    class ProductModel extends DB
    {
        public function getAllData($pages = false ,$soluong  =false){
            if(!$pages){
                $qr = "SELECT * FROM sanpham ";
            }else{
                $pages = ($pages-1)*10 ;
                if(!$soluong){
                    $soluong=10;
                }
                $qr = "SELECT * FROM sanpham LIMIT $pages,$soluong";
            }
      

            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }
        public function getAllShopData($sotrang)
        {
            $index = ($sotrang - 1) * 12;
            $qr = "SELECT * FROM sanpham LIMIT $index,12";
            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }
        public function getDataName($na){
        
            $qr = "SELECT * FROM sanpham WHERE name like '%$na%' ";
            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
    
        }

        public function getDataId($id){
        
            $qr = "SELECT * FROM `sanpham` WHERE id = '$id' ";
            $result=  mysqli_query($this->con , $qr);
            $data= mysqli_fetch_array($result);
            return json_encode($data);
    
        }

        function insertProductModel($image,$name,$price,$price2,$description){
          
            $qr = "INSERT INTO `sanpham`( `image`, `name`, `price`, `price2`, `description`) VALUES ('$image','$name',$price,$price2,'$description')";
            $result = mysqli_query($this->con , $qr);
            if($result){
                return true;
            }else{
                return false;
            }
        }

        function updateProductModel($id,$name,$price,$price2,$description,$image=false){
            if($image){
                $qr = "UPDATE `sanpham` SET `image`='$image',`name`='$name',`price`=$price,`price2`=$price2,`description`='$description' WHERE id='$id'";
            }else{
                $qr = "UPDATE `sanpham` SET `name`='$name',`price`=$price,`price2`=$price2,`description`='$description' WHERE id='$id'";
            }
            
            $result = mysqli_query($this->con , $qr);
            if($result){
                return true;
            }else{
                return false;
            }
        }
        function deleteProductModel($id){
            $qr = "DELETE FROM `sanpham` WHERE  id = '$id' ";
            $result=  mysqli_query($this->con , $qr);
            if($result){
                return true;
            }
            else {
                return false;
            }
        }

    }
    




?>