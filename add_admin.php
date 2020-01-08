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
    <div class="main-content-wrapper d-flex clearfix">

    <div class="products-catagories-area clearfix" style="position: center">
    <div class="amado-pro-catagory clearfix">
            <div class="col-md-9">
                <form method="post" action="">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" name="product_title" class="form-control" placeholder="نام محصول">
                        </div>
                        <div class="col-md-4">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" name="product_price" class="form-control" placeholder="قیمت محصول">
                        </div>
                        <div class="col-md-4">
                        <input type="number" placeholder="تعداد محصول" name="quantity" min="1" max="100" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" name="short_desc" class="form-control" placeholder="توضیح کوتاه">
                        </div>
    <div class="col-md-6">

        <input type="file" name="file">

    </div>
                    </div>
                    <div class="col-md-12">
                        <span>رنگ محصول</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="color[]" type="checkbox" id="inlineCheckbox1" value="white">
                            <label class="form-check-label" for="inlineCheckbox1">سفید</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="color[]" type="checkbox" id="inlineCheckbox2" value="brown">
                            <label class="form-check-label" for="inlineCheckbox2">قهوهای</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="color[]" type="checkbox" id="inlineCheckbox2" value="black">
                            <label class="form-check-label"  for="inlineCheckbox2">مشکی</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span>جنسیت</span>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" name="gender[]" type="checkbox" id="inlineCheckbox1" value="men">
                        <label class="form-check-label" for="inlineCheckbox1">مردانه</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="gender[]" type="checkbox" id="inlineCheckbox2" value="female">
                        <label class="form-check-label"  for="inlineCheckbox2">زنانه</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <span>سایز محصول و تعداد</span>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox1" value="35">
                            <label class="form-check-label"  for="inlineCheckbox1">35</label>

                        </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox2" value="36">
                                <label class="form-check-label" for="inlineCheckbox2">36</label>

                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox3" value="37" >
                                <label class="form-check-label"  for="inlineCheckbox3">37</label>

                            </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox4" value="38" >
                            <label class="form-check-label" for="inlineCheckbox4">38</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox5" value="39" >
                            <label class="form-check-label" for="inlineCheckbox5">39</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox6" value="40" >
                            <label class="form-check-label" for="inlineCheckbox6">40</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox7" value="41" >
                            <label class="form-check-label" for="inlineCheckbox7">41</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox8" value="42" >
                            <label class="form-check-label" for="inlineCheckbox8">42</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox9" value="43" >
                            <label class="form-check-label" for="inlineCheckbox9">43</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox10" value="44" >
                            <label class="form-check-label" for="inlineCheckbox10">44</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="find[]" type="checkbox" id="inlineCheckbox11" value="45" >
                            <label class="form-check-label" for="inlineCheckbox11">45</label>
<!--                            <input type="text" style="width: 50px" name="quantity" class="form-control">
-->                        </div>
                            </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message"  id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php   $id = $_GET['id'];  echo  $id; ?>" />

                    <center>
                        <button type="submit" name="publish" value="Post Comment" class="btn btn-primary">ثبت درخواست</button>
                    </center>
                    <!--<div class="form-group">
                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);"> <input type="submit" value="Post Comment" class="btn btn-primary"></a>
                    </div>-->
                    <?php add_product(); ?>

                </form>

            </div>
                </div>
            </div>
            </div>
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>