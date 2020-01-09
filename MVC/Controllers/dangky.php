<?php

class dangKy extends Controller{

    function Show(){
       
        $this->view("CartTemplate", [
            "page"=>"cart",
  
        ]);
    }
    function dangKy(){

        $coc = $this->model("AccountModel"); // sử dụng hàm
        if(isset($_POST['nutdangky1'])) // lấy dữ liệu từ view
        {
            $taikhoan =$_POST['taikhoan1'];
            $matkhau =$_POST['matkhau1'];
            $ten =$_POST['ten'];
            $sdt = $_POST['sdt'];
            $ngaysinh=$_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            
            if($taikhoan!=null)
            {
                // insert đoạn đã má hóa vào database
                
                if( $coc->dangky($taikhoan,md5($matkhau,false), $ten, $sdt, $ngaysinh,$diachi,$email)){
                    echo " đăng ký thành công";
                    $_POST['taikhoan1']=null;
                }else{
                    echo " đăng ký thất bại";
                }
              
            }    
        }
    }
    function dangNhap(){
        $coc = $this->model("AccountModel"); 
        if(isset($_POST['nutdangnhap1']))
        {
            $taikhoan =$_POST['taikhoan'];
            $matkhau =$_POST['matkhau'];
            if($taikhoan!=null) // tránh load lại trang
            {
                //mã hóa input xong r bỏ vô hàm đăng nhập cho nó xét vs database
                
                if($coc->dangnhap( $taikhoan,md5($matkhau,false)))
                {
                    echo "Đăng nhập thành công";
                    $_POST['taikhoan']=null;
                }
                else echo "Tài khoản hoặc mật khẩu không đúng";
                
            }
        }
    }
       
    function updatePassword(){
        $coc = $this->model("AccountModel"); 
        if(isset($_POST['nutsua1']))
        {
            $taikhoan =$_POST['taikhoan2'];
            $matkhau =$_POST['matkhau2'];
            $matkhaunew=$_POST['matkhaunew'];
            if($taikhoan!=null)
            {
                if($coc->capnhatmatkhau($taikhoan,md5($matkhau,false),md5($matkhaunew,false)))
                {
                    echo "Đã cập nhật thành công";
                    $_POST['taikhoan2']=null;
                }
                else echo "Thất bại";
                
                
            }
        }
    }
    function updateInfo(){
        $coc = $this->model("AccountModel"); 
        if(isset($_POST['nutsua2']))
        {
            $taikhoan =$_POST['taikhoan3'];
            $matkhau =$_POST['matkhau3'];
            $ten =$_POST['tenmoi'];
            $sdt = $_POST['sdtmoi'];
            $ngaysinh=$_POST['ngaysinhmoi'];
            $diachi = $_POST['diachimoi'];
            if($taikhoan!=null)
            {
                if($coc->capnhathoso($taikhoan,md5($matkhau,false),$ten, $sdt,$ngaysinh, $diachi))
                {
                    echo "Đã cập nhật thành công";
                    $_POST['taikhoan3']=null;
                }
                else echo "thất bại";
               
                
            }
        }
    }
       
    
}
?>