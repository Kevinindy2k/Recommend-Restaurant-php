<?php 
require_once('php/connect.php');

$secretKey = '6Le_PBMdAAAAAEJMhGEQQkVLsyLEcvXAaZUDuKBr';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/icon/favicons/safari-pinned-tab.svg" color="#e9b340">
    <link rel="shortcut icon" href="assets/icon/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="assets/icon/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />
</head>

<body>
    <!-- navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Old Header -->
    <!-- <header class="page-title jarallax" data-jarallax='{ "speed": 0.6 }'
        style="background-image: url('https://images.unsplash.com/photo-1428515613728-6b4607e44363?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Contact</h1>
                    <p class="lead">"ก็อร่อยอะไอสัส"</p>
                </div>
            </div>
        </div>
    </header> -->

    <!-- New Header -->
    <header class="jarallax" data-jarallax='{ "speed": 0.6 }'
        style="background-image: url('https://images.unsplash.com/photo-1428515613728-6b4607e44363?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');">
        <div class="page-image">
            <h1 class="display-4 fw-bold">Contact</h1>
            <p class="lead">"ก็อร่อยอะไอสัส"</p>
        </div>
    </header>


    <!-- Contact-->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="border-short-bottom text-center">รายละเอียด</h1>
            </div>
            <div class="col-4 sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-address-card fa-4x py-2 text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">ก็บอกให้ดู</p>
                    </div>
                </div>
            </div>
            <div class="col-4 sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-address-card fa-4x py-2 text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">ก็บอกให้ดู</p>
                    </div>
                </div>
            </div>
            <div class="col-4 sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-address-card fa-4x py-2 text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">ก็บอกให้ดู</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comment</h5>
                        <form method="post" action = "php/contact.php">
                            <div class="row py-1">
                                <div class="form-group col-md-4 py-1">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="First name"
                                        aria-label="First name">
                                </div>
                                <div class="form-group col-md-4 py-1">
                                    <label for="lastname">นามสกุล</label>
                                    <input type="text" id="lastname" name ="lastname" class="form-control" required placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                                <div class="form-group col-md-4 py-1">
                                    <label for="restaurant">ร้านอาหารที่ชื่นชอบ</label>
                                    <input type="text" id="restaurant" name = "restaurant" class="form-control" required placeholder="Restaurant name"
                                        aria-label="Restaurant name">
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label for="message">ข้อความ</label>
                                <textarea id="message" name = "message" rows="5" class="form-control" required placeholder="Note"></textarea>
                            </div>
                            <div id="recaptcha-wrapper" class="text-center my-2">
                            <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6Le_PBMdAAAAAAv6sIOtSOQ3oGDW06xMAceYN7op"></div>
                            </div>
                            <button type="submit" id = "btn-submit" name = "btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อมูล</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include_once('includes/footer.php')?>

    <!-- On to top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(function(){
    // global variables
    captchaResized = false;
    captchaWidth = 304;
    captchaHeight = 78;
    captchaWrapper = $('#recaptcha-wrapper');
    captchaElements = $('#rc-imageselect, .g-recaptcha');

    $(window).on('resize', function() {
        resizeCaptcha();
    });

    resizeCaptcha();
});

function resizeCaptcha() {
    if (captchaWrapper.width() >= captchaWidth) {
        if (captchaResized) {
            captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
            captchaWrapper.height(captchaHeight);
            captchaResized = false;
        }
    } else {
        var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
        captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
        captchaWrapper.height(captchaHeight * scale);
        if (captchaResized == false) captchaResized = true;
    }
}

    //recap 
    function recaptchaCallback(){
        $('#btn-submit').removeAttr('disabled')             //ถ้าเป็น id ให้ใส่ # นำหน้าเสมอ
    }
    </script>
</body>

</html>