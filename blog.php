<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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

    <!-- Header -->
    <header class="jarallax" data-jarallax='{ "speed": 0.6 }'
        style="background-image: url('https://images.unsplash.com/photo-1428515613728-6b4607e44363?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');">
        <div class="page-image">
            <h1 class="display-4 fw-bold">Blog</h1>
            <p class="lead">"ก็อร่อยอะไอสัส"</p>
        </div>
    </header>
    <!-- Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center ">
                <div class="btn-group-custom">
                    <button class="btn btn-info">ทั้งหมด</button>
                    <button class="btn btn-info">1 ดาว</button>
                    <button class="btn btn-info">2 ดาว</button>
                    <button class="btn btn-info">3 ดาว</button>
                    <button class="btn btn-info">4 ดาว</button>
                    <button class="btn btn-info">5 ดาว</button>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-12 col-sm-12 mb-4">
                <div class="card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="#" class="">
                                <img src="https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80"
                                    class="img-fluid img-cover" alt="..." />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">ร้านที่ 1</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quod maiores molestiae hic soluta voluptates deserunt quo
                                    rerum? Ad quod deserunt non eius, blanditiis, at, sed a odit
                                    cupiditate repudiandae quisquam?
                                </p>
                                <div class="p-0 mb-2">
                                    <a href="#" class="btn btn-info">more info
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                                <div class="star-rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <div class="star-current" style="width: 100%;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <span class="text-muted">5 (100)</span>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="col-12 col-sm-12 mb-4">
                <div class="card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="#" class="">
                                <img src="https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80"
                                    class="img-fluid img-cover" alt="honey" />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">ร้านที่ 2</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quod maiores molestiae hic soluta voluptates deserunt quo
                                    rerum? Ad quod deserunt non eius, blanditiis, at, sed a odit
                                    cupiditate repudiandae quisquam?
                                </p>
                                <div class="p-0 mb-2">
                                    <a href="#" class="btn btn-info">more info
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                                <div class="star-rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <div class="star-current" style="width: 40%;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <span class="text-muted">2 (50)</span>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
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
    <script src="assets/js/main.js"></script>
</body>

</html>