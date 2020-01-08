<?php
include("./connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<script src="3.js"></script>
                <?php
                $id = $data["id"];
                $single = mysqli_query($conn, "SELECT * FROM sanpham WHERE id=$id");
                $coc = mysqli_fetch_assoc($single);
                ?>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Phân loại</a>
                            
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src=<?php echo $coc['image'] ?> alt="">
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $coc['name'] ?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($coc['price']) ?> VND</ins> <del><?php echo number_format($coc['price2']) ?> VND</del>
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity" >
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button id = "btnadd" data-item='<?php echo json_encode($coc) ?>' class="add_to_cart_button" type="submit">Cho vào giỏ</button>
                                    </form>

                                   

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nhận xét</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Chi tiết</h2>
                                                <?php echo $coc['description'] ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Nhận xét</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên</label> <input id = "ipreviewname" name="name" type="text"></p>
                                                    <p><label for="email">Gmail</label> <input id = "ipreviewemail" name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Đánh giá của bạn</p>

                                                        <div class="rating-wrap-post">
                                                            <i data-item="0" class="fa fa-star"></i>
                                                            <i data-item="1" class="fa fa-star"></i>
                                                            <i data-item="2" class="fa fa-star"></i>
                                                            <i data-item="3" class="fa fa-star"></i>
                                                            <i data-item="4" class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Nhận xét của bạn</label> <textarea id = "txtreview" name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input id = "submitreview" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
?>

                        
