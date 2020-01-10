
<script src="./js/shop.js"></script>
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row coc">

                <?php
            
                
                $result = $data["data"];
                foreach($result as $row)
                {
                ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img class="size" src=<?php echo $row ->{'image'} ?> alt="">
                                </div>
                                <h2><a href="SingleProduct/Show/<?php echo $row->{'id'}?>"><?php echo $row->{'name'} ?></a></h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo number_format($row->{'price'})?> VND</ins> <del>$<?php echo number_format($row->{'price2'})?> VND</del>
                                </div>

                                <div class="product-option-shop">
                                    <a data-item='<?php echo json_encode($row)?>' class="add_to_cart_button" data-quantity="1" data-product_sku="" rel="nofollow" href="shop" >Add to cart</a>
                                </div>
                            </div>
                        </div>
                
                
                <?php 
                }
                ?>
            <div class="row" >
                <div class="col-md-12" style="display: flex;
                                        width: 1200px;
                                        justify-content: center;
                                        align-items: center;
                                    ">
                    <div class="product-pagination text-center">
                        <nav >
                            <ul class="pagination" >
                                <li>
                                    <a href="./Shop/Show/<?php echo $data["pages"]-1?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                             
                                    <li><a href="./Shop/Show/" ><?php echo $data['pages']?>  </a></li>
                             
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
         