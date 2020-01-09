<?php

class iCheckout extends Controller{
    public $ProductModel;
    
    function __construct(){
        $this->ProductModel = $this->model("ProductModel");
    }
    function Show(){
       
        $this->view("ShopTemplate", [
            "page"=>"checkout",
            "data"=> json_decode($this->ProductModel->getAllData()),
            
            
        ]);
     
    }
    
}
?>

<?php
class GetBill extends  Controller
{

    function Show()
    {
        $coc=$this->model("BillModel");
       
         // require_once
           
         
      
        if(isset($_POST['GetPay'])) // lấy dữ liệu từ view
        {
            $MaKH ="4401104149";
           
            $Tong = (int)$_POST["getTotal"];
            $date = date('m/d/Y h:i:s a', time());
           
            
            if($coc->InsertBill($MaKH,$Tong,$date)) {
                $result = "THanhf coong ";
            }

            //getBillInFo
           
            $a = json_decode(($_POST["getJSON"]));
           
            $idBill=$coc->getMaxId();
            
           
            if(is_array($a))
            {
                foreach($a as $value)
                {
                    
                    if($coc->InsertBillInFo($idBill[0],$value -> {'id'},$value -> {"quantity"} ))
                    {
                        
                        $result = "THanhf coong ";
                    }
                    else
                    {
                        
                    }
                }
            }
            else
            {
                echo "NhaiocCho";
            }
           
        }
        
       $this->view("ShopTemplate",[
           "page"=>"checkout"
       ]);
    }
}
?>