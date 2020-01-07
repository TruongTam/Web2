<?php 

    class ProductModel extends DB
    {
        public function getAllData(){
            $qr = "SELECT * FROM sanpham ";

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

    }
    




?>