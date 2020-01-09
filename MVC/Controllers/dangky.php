<?php
class dangky extends  Controller
{

    function Show()
    {
        $coc = $this->model("AccountModel"); // sử dụng hàm
        
        $this->view("CartTemplate",
    [
        "page"=>"cart"
    ]);
        if(isset($_POST['nutdangky1'])) // lấy dữ liệu từ view
        {
            $taikhoan =$_POST['taikhoan1'];
            $matkhau =$_POST['matkhau1'];
            $ten =$_POST['ten'];
            $sdt = $_POST['sdt'];
            $ngaysinh=$_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            
            if($taikhoan!=null)
            {
                $coc->dangky($taikhoan,md5($matkhau,false), $ten, $sdt, $ngaysinh,$diachi);
                // insert đoạn đã má hóa vào database
                $_POST['taikhoan1']=null;
                echo " đăng ký thành công";
            }    
        }
        if(isset($_POST['nutdangnhap1']))
        {
            $taikhoan =$_POST['taikhoan'];
            $matkhau =$_POST['matkhau'];
            if($taikhoan!=null) // tránh load lại trang
            {
                //mã hóa input xong r bỏ vô hàm đăng nhập cho nó xét vs database
                $coc->dangnhap( $taikhoan,md5($matkhau,false));
                
                $_POST['taikhoan']=null;
            }
        }
        if(isset($_POST['nutsua1']))
        {
            $taikhoan =$_POST['taikhoan2'];
            $matkhau =$_POST['matkhau2'];
            $matkhaunew=$_POST['matkhaunew'];
            if($taikhoan!=null)
            {
                $coc->capnhatmatkhau($taikhoan,md5($matkhau,false),md5($matkhaunew,false));
                $_POST['taikhoan2']=null;
                echo "Đã cập nhật thành công";
            }
        }
        
    }
}
    
?>