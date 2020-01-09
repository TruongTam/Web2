<?php
include("./connect.php");
$productrang = 12;
if (isset($_GET["trang"])) {
    $trang = $_GET["trang"];
} else {
    $trang = 1;
}
if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
    $name = "";
}

?>
<!DOCTYPE html>
<!--
    ustora by freshdesignweb.com
    Twitter: https://twitter.com/freshdesignweb
    URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <base href="/Web2/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <base href="./">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="jquery.js"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <base href="/Web2/">

</head>



<body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Đăng nhập</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="./dangky/dangNhap" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản:</td>
                        <td><input type="text" name="taikhoan"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="matkhau"></td>
                    </tr>
                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng nhập" name="nutdangnhap1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <?php 
    if(isset($_SESSION['taikhoan']))
    {
        echo 'Chào bạn: '. $_SESSION['taikhoan'] ;
    }
    
?>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTittle1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle1">Đăng ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="./dangky/dangKy" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản*:</td>
                        <td><input type="text" name="taikhoan1"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    
                    <tr>
                        <td>Mật khẩu*:</td>
                        <td><input type="password" name="matkhau1"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Tên:</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>SĐT:</td>
                        <td><input type="text" name="sdt"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Ngày sinh:</td>
                        <td><input type="date" name="ngaysinh"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><input type="text" name="diachi"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email"></td>
                    </tr>

                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng Ký" name="nutdangky1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>


  

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle2">Cập nhật</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="./dangky/updatePassword" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản:</td>
                        <td><input type="text" name="taikhoan2"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="matkhau2"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu mới:</td>
                        <td><input type="password" name="matkhaunew"></td>
                    </tr>
                    
                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Cập nhật" name="nutsua1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>


  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa hồ sợ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="./dangky/updateInfo" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản:</td>
                        <td><input type="text" name="taikhoan3"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="matkhau3"></td>
                    </tr>
                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tên mới:</td>
                        <td><input type="text" name="tenmoi"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>SĐT mới:</td>
                        <td><input type="text" name="sdtmoi"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Ngày sinh mới:</td>
                        <td><input type="date" name="ngaysinhmoi"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Địa chỉ mới:</td>
                        <td><input type="text" name="diachimoi"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Cập nhật" name="nutsua2"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>



    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                        
                         
                        <form action="./dangky/dangxuat" method="POST">
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalLong1"><i class="fa fa-user"></i> Đăng ký</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalLong2"><i class="fa fa-heart"></i> Cập nhật</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalLong3"><i class="fa fa-heart"></i> Chỉnh sửa hồ sơ</a></li>
                        
                        <input type="submit" value="Đăng xuất" name="nutdangxuat">
                        </form> 
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Tiền tệ :</span><span class="value">VNĐ </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VNĐ</a></li>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn ngữ :</span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="Home"><img src="img/logo.jpg" width="150px"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart">Giỏ hàng <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Chuyển hướng</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Home">Trang chủ</a></li>
                        <li class="active"><a href="shop">Cửa hàng</a></li>
                       
                        <li><a href="cart">Giỏ hàng</a></li>
                       
                    
                     
                        <li><a href="contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2 style="font-weight: bold;">Cửa hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "pages/".$data["page"].".php"?>   




    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Xưởng Thượng Tín với việc nằm ở TPHCM là điều hết sức thuận lợi cho khách hàng. Bạn có thể đến trực tiếp tại xưởng để bàn bạc và kiểm tra chất liệu vải, mẫu.Với kinh nghiệm lâu năm trong nghề. Chúng tôi sẽ mang đến cho bạn những chiếc áo khoác quảng cáo có giá tốt nhất.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Điều hướng người dùng </h2>
                        <ul>
                            <li><a href="">Tài khoản người dùng</a></li>
                            <li><a href="">Lịch sử đặt hàng</a></li>
                            <li><a href="">Danh sách </a></li>
                            <li><a href="">Liên hệ nhà sản xuất</a></li>
                            <li><a href="">Trang chủ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Phân loại</h2>
                        <ul>
                            <li><a href="shop.php?name=Áo khoác">Áo khoác</a></li>
                            <li><a href="shop.php?name=Áo thun">Áo thun</a></li>
                            <li><a href="shop.php?name=Giày">Giày</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Đăng ký để nhận thông báo mới nhất !!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Nhập gmail">
                            <input type="submit" value="Đăng ký">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2015 Thương mại điện tử . Đăng ký bản quyền <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>
