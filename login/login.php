<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/css/loginCss/simple-line-icons.css">
    <link rel="stylesheet" href="./assets/css/loginCss/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/css/loginCss/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/loginCss/style.css" /> <!-- End layout styles -->
    <link rel="shortcut icon" href="./css/imgs/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="../../images/logo.svg">
                            </div>
                            <h4>歡迎!讓我們開始吧</h4>
                            <h6 class="font-weight-light">登入後繼續吧</h6>

                            <form class="pt-3" action="chk_login.php" method="post">

                            <?php
                            if (isset($_GET['error'])) { //如果錯誤的話顯示帳密錯誤訊息
                            ?>
                                <h2 style="color: red;">
                                    <?= $_GET['error']; ?>
                                </h2>
                            <?php
                            }
                            ?>




                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="acc">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pw">
                                </div>


                                <div class="mt-3">
                                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="登入">
                                </div>

                                <!-- <div class="my-2 d-flex justify-content-between align-items-center"> -->
                                <div class="my-2 d-flex align-items-center">

                                    <a href="forgot.php" class="auth-link text-black">忘記密碼?</a>
                                    <a href="register.php" class="auth-link text-black">尚未成為會員</a>
                                </div>


                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->


    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->

     <!-- login  js  -->
     <script type="text/javascript">
    $(".txtb input").on("focus",function(){
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
      if($(this).val() == "")
      $(this).removeClass("focus");
    });
  </script>
     <!-- login  js  -->
     <div>
    <?php include "../layout/footer.php";?>    
    </div>
</body>

</html>