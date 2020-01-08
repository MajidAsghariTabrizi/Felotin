<?php require_once("resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

      <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
<div class="main-content-wrapper d-flex clearfix">

    <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>

    <div class="cart-table-area">
        <div class="container-fluid">
            <div class="row">


                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">

                    <h2>سبد کالا</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
          <tr>
           <th>محصول</th>
              <th>قیمت</th>
           <th>تعداد</th>
           <th>قیمت کل</th>
          </tr>
        </thead>
        <tbody>
          <?php cart(); ?>
        </tbody>
    </table>
  <?php echo show_paypal(); ?>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>اطلات کلی</h5>
                        <ul class="summary-table">
                            <li><span>تعداد اقلام سبد</span> <span><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></li>
                            <li><span>دریافتی ها</span> <span><?php cart2();?></span></li>
                           <li><span>چمع کل فکتور</span> <span><?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?> هزار تومان</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="cart.html" class="btn amado-btn w-100">چک کنید</a>
                        </div>
                    </div>
                </div>
                </form>


            </div>
        </div>
    </div>
</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
