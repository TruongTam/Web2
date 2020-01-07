<?php
// http://localhost/live/Home/Show/1/2
class ProductAdmin extends Controller{
    function Show(){
        $tmp = $this->model("ProductModel");
        $this->view("Admin", [
            "page"=>"productAdmin",
            "data"=> json_decode($tmp->getAllData()) ,
        ]);
    }


    
        
}
?>