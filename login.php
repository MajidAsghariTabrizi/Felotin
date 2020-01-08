<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
<div class="page-content">
    <div class="panel-heading">
        <h2 class="text-center bg-warning"><?php display_message(); ?></h2>


    <div class="form-v7-content" id="loginbox">
        <div class="form-left">
            <img src="img/Shoes_Login.png" alt="form">
            <p class="text-1">ورود به حساب کاربری</p>
            <p class="text-2">تایید شرایط و قوانین سایت</p>
        </div>
        <form class="form-detail" action="#" method="post" id="myform">
            <?php login_user(); ?>

            <div class="form-row">
                <label for="username">نام کاربری</label>
                <input type="text" name="username" id="username" class="input-text">
            </div>
            <div class="form-row">
                <label for="password">رمز عبور</label>
                <input type="password" name="password" id="password" class="input-text" required>
            </div>

            <div class="form-row-last">
                <input type="submit" name="submit" class="register" value="وارد شوید">
                <p>یا<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                        از این طریق ثبت نام کنید
                    </a></p>
            </div>
        </form>
    </div>



    <div class="form-v7-content"  id="signupbox" style="display:none;">
        <div class="form-left">
            <img src="img/Shoes_Login.png" alt="form">
            <p class="text-1">فرم ثبت نام</p>
            <p class="text-2">تایید شرایط و قوانین سایت</p>
        </div>

            <form class="form-detail" action="" method="post" enctype="multipart/form-data" id="myform">
                <?php signup_user(); ?>

                <div class="form-row">
                    <label for="username">نام کاربری</label>
                    <input type="text" name="username" id="username" class="form-control"">
                </div>
                <div class="form-row">
                    <label for="email">ایمیل</label>
                    <input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row">
                    <label for="password">رمز عبور</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-row">
                    <label for="comfirm_password">تایید رمز عبور</label>
                    <input type="password" name="comfirm_password" id="comfirm_password" class="form-control" required>
                </div>


                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="ثبت اطلاعات">
                    <p>یا<a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">
                            از این طریق وارد شوید
                        </a></p>
                </div>
            </form>

    </div>


</div>
</div>
    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            debug: true,
            success:  function(label){
                label.attr('id', 'valid');
            },
        });
        $( "#myform" ).validate({
            rules: {
                your_email: {
                    required: true,
                    email: true
                },
                password: "required",
                comfirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                username: {
                    required: "Please enter an username"
                },
                your_email: {
                    required: "Please provide an email"
                },
                password: {
                    required: "Please provide a password"
                },
                comfirm_password: {
                    required: "Please provide a password",
                    equalTo: "Wrong Password"
                }
            }
        });
    </script>

   <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

