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
        public function getDataName($na){
        
            $qr = "SELECT * FROM sanpham WHERE name like '%$na%' ";
            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
    
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

    }
    




?>