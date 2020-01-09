<?php

class dangky extends  Controller
{
    function Show()
    {
        $coc = $this->model("AccountModel"); // sử dụng hàm
        

        $coc1=$this->view("cart"); // require_once
        if(isset($_POST['nutdangky'])) // lấy dữ liệu từ view
        {
            $taikhoan =$_POST['taikhoan1'];
            $matkhau =$_POST['matkhau1'];
            $ten =$_POST['ten'];
            $sdt = $_POST['sdt'];
            $ngaysinh=$_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $coc->dangky($taikhoan,$matkhau, $ten, $sdt, $ngaysinh,$diachi);
        }
        
    }
}

?>