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
                               <table class="table"  style="align-items: center">

                                   <thead>
                                   <tr>
                                       <th style="text-align: right">شماره</th>
                                       <th style="text-align: right">نام</th>
                                       <th style="text-align: right">قیمت</th>
                                       <th style="text-align: right">تعداد</th>
                                       <th style="text-align: right">توضیح کوتاه</th>
                                       <th style="text-align: right">جنسیت</th>
                                       <th style="text-align: right">رنگ</th>
                                       <th style="text-align: right">سایز</th>
                                       <th style="text-align: right">توضیح</th>
                                       <th></th>

                                   </tr>
                                   </thead>
                            <tbody>
                            <?php

                            $query = query("SELECT * FROM products");

                            confirm($query);

                            while($row = fetch_array($query)) {
                                $id = $row['product_id'];
                                $product_title = $row['product_title'];
                                $product_price = $row['product_price'];
                                $product_quantity = $row['product_quantity'];
                                $short_desc = $row['short_desc'];
                                $product_description = $row['product_description'];
                                $gender = $row['gender'];
                                $color = $row['color'];
                                $size = $row['size'];
                                $product_image = $row['product_image'];
                                $product_image = display_image($row['product_image']);

                                $product = <<<DELIMETER
            
            <tr>
            <td>{$id}</td>
            <td class="cart_product_img">
            <h5>{$row['product_title']}<br></h5>
            <img width='100' src='resources/{$product_image}'>
            </td>
            
            <td class="price">&#36;{$row['product_price']}</td>
            <td>{$product_quantity}</td>
            <td>{$short_desc}</td>
            <td>{$gender}</td>
            <td>{$color}</td>
            <td>{$size}</td>
            <td>{$product_description}</td>
           <td><a class='btn btn-success' href="edit_one.php?id={$id}"><span class="glyphicon glyphicon-trash">ویرایش</span></a>
            <a class='btn btn-danger' href="resources/cart.php?delete_admin={$id}"><span class='glyphicon glyphicon-remove'>حذف</span></a></td>

              
            </tr>
            
          

DELIMETER;

                                echo $product;
                            }
             ?>


                          </tbody>

                </table>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>