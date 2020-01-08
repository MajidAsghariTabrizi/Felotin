<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->

       <!-- Side Navigation -->



<?php

$query = query(" SELECT *  FROM products  WHERE product_title ='" . $_GET['id'] . "' group by product_title");
confirm($query);

while($row = fetch_array($query)):






?>
    <div class="row" style="padding: 20px;">
        <div class="col-12 col-lg-6">
            <div class="single_product_thumb">
                <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(img/product-img/pro-big-1.jpg);">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/product-img/pro-big-2.jpg);">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/product-img/pro-big-3.jpg);">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/product-img/pro-big-4.jpg);">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img class="img-responsive" src="resources/<?php  echo display_image($row['product_image']); ?>" alt="">
                        </div>
                        <div class="carousel-item">
                                <img class="img-responsive" src="resources/<?php  echo display_image($row['product_image']); ?>" alt="">
                        </div>
                        <div class="carousel-item">
                                <img class="img-responsive" src="resources/<?php  echo display_image($row['product_image']); ?>" alt="">
                        </div>
                        <div class="carousel-item">
                                <img class="img-responsive" src="resources/<?php  echo display_image($row['product_image']); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="single_product_desc">
                <!-- Product Meta Data -->
                <div class="product-meta-data">
                    <div class="line">

                        <h4 class=""><?php echo  $row['product_price']." هزار تومان" ; ?></h4>
                        <a href="product-details.html">
                            <h4><a href="#"><?php echo $row['product_title']; ?></a> </h4>
                        </a>
                        <form method="post" action="resources/cart.php">


                        <div class="form-check form-check-inline">
                            <label class="form-check-label"  for="inlineCheckbox1">سایز</label>

                        <?php

                        $query = query(" SELECT 
    products.size FROM products INNER JOIN
     ( SELECT product_title FROM products  WHERE product_title ='" . $_GET['id'] . "' group by product_title) t
    ON  products.product_title = t.product_title; ");
                        confirm($query);

                        while($row = fetch_array($query)){
                            echo $row['size'] . '<br>';
                            $product = <<<DELIMETER
                            <input class="form-check-input" name="size[]" type="checkbox" id="inlineCheckbox1" value="{$row['size']}">
<span>  </span>
DELIMETER;

                        echo $product;

                            }
                        ?>
                        </div>

                    </div>
    <?php

    $query = query(" SELECT *  FROM products  WHERE product_title ='" . $_GET['id'] . "' group by product_title");
    confirm($query);

    while($row = fetch_array($query)):






        ?>
                    <!-- Ratings & Review -->
                    <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="review">
                            <a href="#"></a>
                        </div>
                    </div>
                    <!-- Avaiable -->
                    <p class="avaibility"><i class="fa fa-circle"></i> <span>در انبار موجود می باشد</span></p>
                </div>

                <div class="short_overview my-5">
                    <p><?php echo $row['product_description']; ?></p>
                </div>

                <!-- Add to Cart Form -->
                    <div class="cart-btn d-flex mb-50">
                    <!--    <p>Qty</p>
                        <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                        </div>
                    </div>-->
                    <div class="amado-btn-group mt-30 mb-100">
                        <center>
                            <button type="submit" name="item" value="Post Comment" class="btn btn-primary">ثبت خرید</button>
                        </center>
            </div>

            </div>

        </div>

    </div>
    </div>
    </div>
    <!-- Product Details Area End -->
    </div>

        <hr>

          
        <hr>


<!--Row for Tab Panel-->


<?php endwhile; ?>
<?php endwhile; ?>


    <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>