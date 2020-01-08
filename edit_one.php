<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<!--<script >
    $(function () {
        $('.submitformD').submit(function (event) {
            $.ajax({
                url: "55.php",
                type: "post",
                dataType: "html",
                data: $('.submitformD').serialize(),
                success: function (content) {
                    $(".displaydiv").html(content);
                }
            });
            event.preventDefault();
        });
    });
</script>-->
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.php">صفحه اصلی</a></li>
                            <li class="has-dropdown active">
                                <a href="add_admin.php">افزودن محصولات</a>
                            </li>
                            <li class="has-dropdown active">
                                <a href="edit_admin.php">ویرایش محصولات</a>
                            </li>
                            <li><a href="#.php">مدیریت کامنت ها</a></li>
                            <li><a href="#.php">مدیریت کاربران</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
                            <?php
                            if(isset($_GET['id'])) {


                                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
                                confirm($query);

                                while($row = fetch_array($query)) {

                                    $product_title          = escape_string($row['product_title']);
                                    $product_price          = escape_string($row['product_price']);
                                    $product_description    = escape_string($row['product_description']);
                                    $short_desc             = escape_string($row['short_desc']);
                                    $product_quantity       = escape_string($row['product_quantity']);
                                    $product_image          = escape_string($row['product_image']);
                                    $gender             = escape_string($row['gender']);
                                    $color             = escape_string($row['color']);
                                    $size             = escape_string($row['size']);




                                    $product_image = display_image($row['product_image']);



                                }


                                update_product();



                            }


                            ?>
    <div id="colorlib-container">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <form method="post" action="">
        <div class="row form-group">
            <label for="product-title">تصویر محصول</label>
            <input type="file" name="file"> <br>

            <img width='200' src="resources/<?php echo $product_image; ?>" alt="">

        </div>
        <div class="row form-group">
            <div class="col-md-4">
                 <label for="fname">اسم محصول</label>
                <input type="text" id="fname" name="product_title" class="form-control"  value="<?php echo $product_title; ?>" >
            </div>
            <div class="col-md-4">
                <label for="price">قیمت محصول</label>
                <input type="text" id="price" name="price" class="form-control" value="<?php echo $product_price; ?>" >
            </div>
            <div class="col-md-4">
                <label for="quantity">تعداد محصول</label>
                <input type="text" id="quantity" name="quantity" class="form-control"  value="<?php echo $product_quantity; ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">
                <label for="gender">جنسیت محصول</label>
                <input type="text" id="gender" name="gender" class="form-control"  value="<?php echo $gender; ?>" >
            </div>
            <div class="col-md-4">
                <label for="color">رنگ محصول</label>
                <input type="text" id="color" name="color" class="form-control" value="<?php echo $color; ?>" >
            </div>
            <div class="col-md-4">
                <label for="size">سایز محصول</label>
                <input type="text" id="size" name="size" class="form-control"  value="<?php echo $size; ?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="short_desc">توضیح کوتاه</label>
                <input type="text" id="short_desc" name="short_desc" class="form-control"  value="<?php echo $short_desc; ?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="short_desc">توضیح مفصل</label>
                <textarea name="product_description"  id="product_description" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
            </div>
        </div>
        <center>
            <button type="submit" name="edit_admin" value="Post Comment" class="btn btn-primary">ثبت درخواست</button>
        </center>
    </form>
    </div>
    </div>
    </div>
    </div>


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>