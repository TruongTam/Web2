<?php

    class BillAdmin extends Controller 
    {
        
        public $BillModel;
    
        function __construct(){
            $this->BillModel = $this->model("BillModel");
        }

        
        function Show(){
            // if(!$pages){
            //     $pages = 1;
            // }
            echo "<pre>";
                print_r(json_decode($this->BillModel->getDataBill()));
                $a =json_decode($this->BillModel->getDataBill());
                foreach ( $a as $row) {
                    echo $row ->{"id"};
                    # code...
                }
            
            // $this->view("Admin", [
            //     "page"=>"AccountAdmin",
            //     "data"=> json_decode($this->BillModel->getAllData($pages)),
            //     "pages"=>$pages,
            // ]);
        }       
        
        

        

















        
    }
    



















?>