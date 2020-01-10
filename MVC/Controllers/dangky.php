<?php

class dangky extends Controller{

    function Show(){
       
        $this->view("CartTemplate", [
            "page"=>"cart",
  
        ]);
    }
    function resi(){

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
                    $this->view("HomeTemplate",[
                        "page"=>"home"
                    ]);
                    
                    $_POST['taikhoan1']=null;
                }else{
                    echo " đăng ký thất bại";
                    $this->view("HomeTemplate",[
                        "page"=>"home"
                    ]);
                }
              
            }    
        }
    }
    function dangNhap(){
        $coc = $this->model("AccountModel"); 
        if(isset($_POST['nutdangnhap1']))
        {
            $idBill=$coc->getId($_POST['taikhoan']);
            $idQuyen=$coc->getQuyen($_POST['taikhoan']);
            $taikhoan =$_POST['taikhoan'];
            $matkhau =$_POST['matkhau'];
            if($taikhoan!=null) // tránh load lại trang
            {
                //mã hóa input xong r bỏ vô hàm đăng nhập cho nó xét vs database
                
                if($coc->dangnhap( $taikhoan,md5($matkhau,false)))
                {
                    if(isset($_POST['taikhoan']))
                    {
                        $_SESSION["taikhoan"]=$_POST['taikhoan'];
                        $_SESSION["id"]=$idBill[0];
                        $_SESSION["Quyen"]=$idQuyen[0];
                        
                    }
                    var_dump($_SESSION["Quyen"]);
                    $_POST['taikhoan']=null;
                    $this->view("HomeTemplate",[
                        "page"=>"home"
                    ]);
                    //dang nhap roi
                   
                }
                else
                {
                    if($coc->dangnhap1( $taikhoan,md5($matkhau,false)))
                    {
                        if(isset($_POST['taikhoan']))
                        {
                            $_SESSION["taikhoan"]=$_POST['taikhoan'];
                            $_SESSION["id"]=$idBill[0];
                            $_SESSION["Quyen"]=$idQuyen[0];
                            
                        }
                        $this->view("HomeTemplate" ,[
                            "page"=>"home"
                        ]);
                    }
                    else
                    {
                        echo "Nhập sai";
                    }
                    
                }
                
                
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
                    $this->view("HomeTemplate",[
                        "page"=>"home"
                    ]);
                }
                else echo "Thất bại";
                $this->view("HomeTemplate",[
                    "page"=>"home"
                ]);
                
                
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
            $email= $_POST['emailmoi'];
            if($taikhoan!=null)
            {
                if($coc->capnhathoso($taikhoan,md5($matkhau,false),$ten, $sdt,$ngaysinh, $diachi, $email))
                {
                    echo "Đã cập nhật thành công";
                    $_POST['taikhoan3']=null;
                }
                else echo "thất bại";
                $this->view("HomeTemplate",[
                    "page"=>"home"
                ]);
               
                
            }
        }
    }
    function dangxuat()
    {
            unset($_SESSION["taikhoan"]);
            unset($_SESSION["id"]);
            $this->view("HomeTemplate",[
                "page"=>"home"
            ]);

    }
       
    
}
?>
