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
<script src="2.js"></script>
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row coc">

                <?php
                $index = ($trang - 1) * $productrang;
                $sqlSelect = "SELECT * FROM sanpham WHERE name LIKE '%$name%' LIMIT $index ,$productrang";
                $result = mysqli_query($conn, $sqlSelect);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {


                        //echo $row['description'];

                        ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img class="size" src=<?php echo $row['image'] ?> alt="">
                                </div>
                                <h2><a href="SingleProduct/Show/<?php echo $row['id']?>"><?php echo $row['name'] ?></a></h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo number_format($row['price'])?> VND</ins> <del>$<?php echo number_format($row['price2'])?> VND</del>
                                </div>

                                <div class="product-option-shop">
                                    <a data-item='<?php echo json_encode($row)?>' class="add_to_cart_button" data-quantity="1" data-product_sku="" rel="nofollow" href="shop" >Add to cart</a>
                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="./Shop/Show/<?php echo $data["pages"]-1?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php
                                $coc = mysqli_query($conn, "SELECT * FROM sanpham");
                                $tongproduct = mysqli_num_rows($coc);
                                $sotrang = ceil($tongproduct / $productrang);
                                for ($i = 1; $i <= $sotrang; ++$i) {

                                ?>
                                    <li><a href="./Shop/Show/<?php echo $i?>"><?php echo $i ?></a></li>
                                <?php } ?>
                                <li>
                                    <a href="./Shop/Show/<?php echo $data["pages"]+1?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>