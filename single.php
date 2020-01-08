<?php require_once("resources/config.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stuff Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="Blog/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="Blog/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="Blog/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="Blog/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="Blog/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="Blog/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Blog/css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="Blog/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="Blog/css/style.css">

    <!-- Modernizr JS -->
    <script src="Blog/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="Blog/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="index.php">فروشگاه</a></li>
                            <li class="has-dropdown active">
                                <a href="blog.php">بلاگ</a>
                                <ul class="dropdown">
                                    <li><a href="blog_show_more_quotes.php">نقل قول ها</a></li>
                                    <li><a href="blog_article.php">مقالات</a></li>
                                </ul>
                            </li>
                            <li><a href="blog_show_more_quotes.php">نقل قول ها</a></li>
                            <li><a href="blog_article.php">مقالات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 content">
<?php
                    if(isset($_GET['id'])) {


                    $query = query(' select * from blog WHERE post_id= '. escape_string($_GET['id']).' ');
                    confirm($query);

                    while($row = fetch_array($query)) {


                        $creat_time= $row ['creat_time'];
                        $descriptions = $row ['descriptions'];
                        $user_name = $row ['user_name'];
                        $post_title = $row ['post_title'];

                        $post_image = $row['post_image'];

                        $product = <<<DELIMETER

  <div class="row row-pb-lg">
                        <div class="col-md-12">
                            <div class="blog-entry">
                                <div class="blog-img blog-detail">
                                    <img src="images/{$post_image}" class="img-responsive" alt="html5 bootstrap template">
                                </div>
                                <div class="desc">
                                    <p class="meta">
                                        <span class="cat"><a href="#">Events</a></span>
                                        <span class="date">{$creat_time}</span>
                                        <span class="pos">توسط<a href="#"></a>{$user_name}</span>
                                    </p>
                                    <h2><a href="blog.html">{$post_title}</a></h2>
                                    <p>{$descriptions}</p>
                                </div>
                            </div>
                        </div>
                    </div>

DELIMETER;

                        echo $product;

    }



    }

?>


                    <?php
                    if(isset($_GET['id'])) {


                        $query = query(' select * from comment WHERE post_id= '. escape_string($_GET['id']).' ');
                        confirm($query);

                        while($row = fetch_array($query)) {


                            $fname= $row ['fname'];
                            $lname = $row ['lname'];
                            $comment_dec = $row ['comment_dec'];
                            $Date = $row ['Date'];

                            $product = <<<DELIMETER
                    
<div class="row row-pb-lg">
    <div class="col-md-12">
    <h2 class="heading-2">23 Comments</h2>
        <div class="review">
            <div class="user-img" style="background-image: url(resources/uploads/person3.jpg)"></div>
                <div class="desc">
                <h4>
                <span class="text-left">{$fname}{$lname}</span>
                <span class="text-right">24 March 2018</span>
                </h4>
                <p>{$comment_dec}</p>
                <p class="star">
                <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                </p>
                </div>
        </div>
    </div>
</div>
DELIMETER;

                            echo $product;

                        }



                    }

                    ?>




                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-2">Say something</h2>
                            <form method="post" action="">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lname">Last Name</label> -->
                                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message"  id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php   $id = $_GET['id'];  echo  $id; ?>" />

                                <center>
                                    <button type="submit" name="submit" value="Post Comment" class="btn btn-primary">ثبت درخواست</button>
                                </center>
                                <!--<div class="form-group">
                                    <a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);"> <input type="submit" value="Post Comment" class="btn btn-primary"></a>
                                </div>-->
                                <?php
                                    if (isset($_POST["submit"])){
                                            $message = "";
                                            $email = "";
                                            $lname = "";
                                            $fname = "";
                                        if ($_POST['fname'] !== '') {
                                            $fname = $_POST['fname'];
                                        }
                                        if ($_POST['email'] !== '') {
                                            $email = $_POST['email'];
                                        }
                                        if ($_POST['lname'] !== '') {
                                            $lname = $_POST['lname'];
                                        }
                                        if ($_POST['message'] !== '') {
                                            $message = $_POST['message'];
                                        }
                                        if ($_POST['id'] !== '') {
                                            $id = $_POST['id'];
                                        }

                                        $send_order = query("INSERT INTO comment (post_id, comment_dec, fname, lname, email ) VALUES('{$id}', '{$message}', '{$fname}','{$lname}','{$email}')");
                                        confirm($query);
                                        header('Refresh: 0');


                                }
                                ?>
                            </form>

                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="side">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
                                <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                            </div>
                        </div>

                        <div class="side">
                            <h2 class="sidebar-heading">آخرین مطالب</h2>

                            <?php
                            $query = query(" SELECT * FROM blog ORDER BY post_id desc LIMIT 3");
                            confirm($query);

                            while($row = fetch_array($query)) {
                                $product = <<<DELIMETER
                            <div class="f-blog">
                                <a href="blog.php" class="blog-img" style="background-image: url(resources/uploads/{$post_image});">
                                </a>
                                <div class="desc">
                                    <h3><a href="blog.html">{$row['post_title']}</a></h3>
                                    <p class="admin"><span>{$row['post_date']}</span></p>
                                </div>
                            </div>
				
DELIMETER;

                                echo $product;
                            }
                            ?>

                        </div>
                        <div class="side">
                            <h2 class="sidebar-heading">Instagram</h2>
                            <div class="instagram-entry">
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-1.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-2.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-3.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-4.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-5.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-6.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-7.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-8.jpg);">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-instagram">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
                <h2>Instagram</h2>
            </div>
        </div>
        <div class="row">
            <div class="instagram-entry">
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-1.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-2.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-3.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-4.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-5.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-6.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-7.jpg);">
                </a>
                <a href="#" class="instagram text-center" style="background-image: url(resources/uploads/gallery-8.jpg);">
                </a>
            </div>
        </div>
    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="Blog/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="Blog/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="Blog/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="Blog/js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="Blog/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="Blog/js/jquery.magnific-popup.min.js"></script>
<script src="Blog/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="Blog/js/main.js"></script>

</body>
</html>

