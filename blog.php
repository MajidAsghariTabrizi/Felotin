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
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <!--<div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.html">Stuff</a></div>
                    </div>-->
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
<!--                /**************************** type 1 & 2 P1 ************************/
-->
                <div class="row row-pb-md">
                        <?php

    $query = query(" SELECT * FROM blog where Post_type= 1 and property= 1 ORDER BY post_id desc LIMIT 1");
    confirm($query);

    while($row = fetch_array($query)) {
            $post_image = display_image($row['post_image']);

            $product = <<<DELIMETER
					<div class="col-md-4">
					
					     <div class="blog-img">
                            <a href="blog_show_more_quotes.php"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
                            </div>
                        <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="blockquote blockquote-custom bg-white shadow rounded">
                            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                            <p>{$row['short_descriptions']}</p>
                            <footer class="blockquote-footer pt-4 mt-4 border-top">{$row['user_name']}
                                     <div class="show-more">
                    </div>
                            </footer>
                            </blockquote>
                        <!-- END -->
                    </div>

DELIMETER;

            echo $product;
    }
    ?>
                    
                        <?php
                        $query = query(" SELECT * FROM blog where Post_type= 2 and property= 1 LIMIT 2");

                        confirm($query);

                        while($row = fetch_array($query)) {

                            $post_image = display_image($row['post_image']);

                            $product = <<<DELIMETER
		<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="single.php"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">{$row['post_tag']}</a></span>
									<span class="date">{$row['post_tag']}</span>
									<span class="pos">By <a href="#">{$row['user_name']}</a></span>
								</p>
								<h2><a href="blog.html">{$row['post_title']}</a></h2>
								<p>{$row['short_descriptions']}</p>
							</div>
						</div>
					</div>
DELIMETER;

                            echo $product;
                        }


                        ?>

				</div>
                <!--                /**************************** type 2 & P2 ************************/-->
                   <div class="row row-pb-md">
                           <?php
                           $query = query(" SELECT * FROM blog where Post_type= 2 and property= 2 LIMIT 3");
                           confirm($query);

                           while($row = fetch_array($query)) {

                               $post_image = display_image($row['post_image']);

                               $product = <<<DELIMETER
		<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="single.php?id={$row['post_id']}"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">{$row['post_tag']}</a></span>
									<span class="date">{$row['post_tag']}</span>
									<span class="pos">By <a href="#">{$row['user_name']}</a></span>
								</p>
								<h2><a href="blog.html">{$row['post_title']}</a></h2>
								<p>{$row['short_descriptions']}</p>
							</div>
						</div>
					</div>
DELIMETER;

                               echo $product;
                           }
                           ?>



                       </div>


                <!--                /**************************** type 3 P1 &  type 1 P2 ************************/-->

                <div class="row row-pb-md">

                <?php
                $query = query(" SELECT * FROM blog where Post_type= 3 and property= 1 LIMIT 1");
    confirm($query);
    while($row = fetch_array($query)) {

        $post_image = display_image($row['post_image']);

        $product = <<<DELIMETER
	<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
								<div class="video colorlib-video" style="background-image: url(resources/uploads/{$post_image});">
									<a href="{$row['descriptions']}" class="popup-vimeo"><i class="icon-play"></i></a>
									<div class="overlay"></div>
								</div>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Watch</a></span>
									<span class="date">{$row['creat_time']}</span>
									<span class="pos">By <a href="#">{$row['user_name']}</a></span>
								</p>
								<h2><a href="blog.html">{$row['post_title']}</a></h2>
								<p>{$row['short_descriptions']}</p>
							</div>
							
						</div>
					</div>
DELIMETER;

        echo $product;
}
?>
                    <?php

                    $query = query(" SELECT * FROM blog where Post_type= 1 and property= 2 LIMIT 1");
                    confirm($query);

                    while($row = fetch_array($query)) {
                        $post_image = display_image($row['post_image']);

                        $product = <<<DELIMETER
					<div class="col-md-4">
					
					     <div class="blog-img">
                            <a href="single.php?id={$row['post_id']}"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
                            </div>
                        <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                            <p class="mb-0 mt-2 font-italic">{$row['short_descriptions']}<a href="#" class="text-info">@consequat</a>."</p>
                            <footer class="blockquote-footer pt-4 mt-4 border-top">{$row['user_name']}
                            <cite title="Source Title">{$row['post_title']}</cite>
                            </footer>
                            </blockquote><!-- END -->
                              <div class="show-more">
                        <a href="#">Show more</a>
                    </div>
                    </div>

DELIMETER;

                        echo $product;
                    }
                    ?>
                </div>
                <!--                /**************************** type 1 P3 &  type 2 P3 ************************/-->

				<div class="row row-pb-md">
                    <?php

                    $query = query(" SELECT * FROM blog where Post_type= 1 and property= 3  LIMIT 1");
                    confirm($query);

                    while($row = fetch_array($query)) {
                        $post_image = display_image($row['post_image']);

                        $product = <<<DELIMETER
					<div class="col-md-4">
					
					     <div class="blog-img">
                            <a href="single.php?id={$row['post_id']}"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
                            </div>
                        <!-- CUSTOM BLOCKQUOTE -->
                            <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                            <p class="mb-0 mt-2 font-italic">{$row['short_descriptions']}<a href="#" class="text-info">@consequat</a>."</p>
                            <footer class="blockquote-footer pt-4 mt-4 border-top">{$row['user_name']}
                            <cite title="Source Title">{$row['post_title']}</cite>
                            </footer>
                            </blockquote><!-- END -->
                    </div>

DELIMETER;

                        echo $product;
                    }
                    ?>

                    <?php
                    $query = query(" SELECT * FROM blog where Post_type= 2 and property= 3  LIMIT 1");
                    confirm($query);

                    while($row = fetch_array($query)) {

                        $post_image = display_image($row['post_image']);

                        $product = <<<DELIMETER
			<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
							
								<a href="single.php?id={$row['post_id']}"><img src="resources/{$post_image}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">{$row['post_tag']}</a></span>
									<span class="date">{$row['post_tag']}</span>
									<span class="pos">By <a href="#">{$row['user_name']}</a></span>
								</p>
								<h2><a href="blog.html">{$row['post_title']}</a></h2>
								<p>{$row['short_descriptions']}</p>
							</div>
							                       <a href="#">Show more</a>

						</div>
					</div>
DELIMETER;

                        echo $product;
                    }
                    ?>



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
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);">
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
	<script src="Blog/js/bootstrap.min.js"></script>
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

