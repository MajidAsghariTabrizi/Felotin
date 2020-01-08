<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


    <!-- Page Content -->
    <div class="main-content-wrapper d-flex clearfix">
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>


        <!-- Mobile Nav (max width 767px)-->
            <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <div class="row form-group">

                <?php get_products(); ?>

                </div>
            </div>

        </div>




<!--                      --><?php //include(TEMPLATE_FRONT . DS . "slider.php") ?>
                        



    </div>


    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>همین الان ایمیل دوستت رو وارد کن<span>و 25% تخفیف بگیر</span></h2>
                        <p> همین الان میتونی یه سر به وبلاگ ما بزنی و برای ما تولید محتوا کنی و در ازاش کد تخفیف بگیری، در ضمن دوستانی که دعوت میکنی اگر خرید انجام بدن تخفیف هم میگری</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="">
                            <input type="submit" value="بفرستید">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>