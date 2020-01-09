<?php
include("./connect.php");
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
    <title>Cart Page - Ustora Demo</title>
    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  
 







    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                     
                           
                            <li><a href="cart"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="iCheckout"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            
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
                        <li><a href="shop">Cửa hàng</a></li>
                       
                        <li class ="active"><a href="cart">Giỏ hàng</a></li>
                      
                     
                      
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
                    <h2>Cửa hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        
        <div class="zigzag-bottom"></div>
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-4">
                    <div class="single-sidebar">
                            <h2 class="sidebar-title">Tìm kiếm</h2>
                            <form action="shop.php" method="GET" autocomplete="off">
                                <input id="ipSearch" name="name" type="text" placeholder="Tìm kiếm sản phẩm...">
                                <input type="submit" id = "Ssubmit" value="Tìm kiếm">
                                
                            </form>
                            <div id ="h2search"></div>
                        </div>
                        
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Sản phẩm</h2>
                            <?php
                                $sqlSelect = "SELECT * FROM sanpham LIMIT 0,4";
                                $result = mysqli_query($conn, $sqlSelect);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="thubmnail-recent"  data-item = '<?php echo json_encode($row)?>' >
                                <img  src=<?php echo $row['image']?> class="recent-thumb" alt="">
                                <h2><a href="SingleProduct/Show/<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                                <div class="product-sidebar-price">
                                    <ins><?php echo number_format($row['price']) ?> VND</ins> <del><?php echo number_format($row['price2']) ?> VND</del>
                                </div>
                            </div>
                                <?php }
                                }
                                ?>
                        </div>
                        
                </div>
                <?php require_once "./MVC/Views/Pages/".$data["page"].".php"?>   
                </div>
                
                
            </div>
        </div>
        
    </div>

                    
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
                    <h2 class="footer-wid-title" style="font-weight: bold;">Điều hướng người dùng </h2>
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
                            <li><a href="">Áo khoác</a></li>
                            <li><a href="">Áo thun</a></li>
                            <li><a href="">Giày</a></li>
                           
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Người mới</h2>
                        <p>Đăng ký để nhận thông báo mới nhất !!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập gmail">
                                <input type="submit" value="Đăng ký">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 Thương mại điện tử . Đăng ký bản quyền. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
    </div> <!-- End footer bottom area -->
   
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
