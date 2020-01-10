<?php 

    class BillModel extends DB
    {



        public function getDataBill(){
            $qr= "SELECT *
            FROM Bill
            INNER JOIN account ON Bill.maKH=account.id";
             $rows=  mysqli_query($this->con , $qr);
             $mang = array();
             while($row = mysqli_fetch_array($rows)){
                 $mang[] = $row;
             }
             return json_encode($mang);
        }



        public function getAllData($pages){
            if(!$pages){
                $qr = "SELECT * FROM bill ";
            }else{
                $pages = ($pages-1)*10 ;
                $qr = "SELECT * FROM bill LIMIT $pages,10";
            }

            $rows=  mysqli_query($this->con , $qr);
            $mang = array();
            while($row = mysqli_fetch_array($rows)){
                $mang[] = $row;
            }
            return json_encode($mang);
        }
      
        public function InsertBill($MaKH,$Tong,$Date)
        {
            $sql = "INSERT INTO `bill`(`id`, `MAKH`, `NGAYLAPBILL`, `Tong`) VALUES (null,'$MaKH','$Date','$Tong')";
            $result = mysqli_query($this->con,$sql);
            if($result){
                return true;

            }else{
                return false;
            }
        }

        public function InsertBillInFo($idBill,$IdProDuct,$Quantity)
        {
            $sql = "INSERT INTO `billinfo`(`id`, `idbill`, `id_product`, `SOLUONG`) VALUES (null,'$idBill','$IdProDuct','$Quantity')";
            $result = mysqli_query($this->con,$sql);
            if($result){
                return true;

            }else{
                return false;
            }
        }

        public function getMaxId()
        {
           $sql ="SELECT Max(id) FROM `bill`";
           $result = mysqli_fetch_array( mysqli_query($this->con, $sql));
          
           return $result;
        }
    }
?>