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
            <h1 class="display-4 fw-bold">About</h1>
            <p class="lead">"เว็ปแนะนำร้านอาหารที่คู่ควร"</p>
        </div>
    </header>
    <!-- section do 1 -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RLXsZaD3oJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 py-5 p-lg-0">
                <h2>RATIONALE :</h2>
                <p style="padding-left:40px">According to the study, eating junk food leads to early death and a lot of diseases. So, People should eat less junk food. But for them to find healthy restaurants is quite hard especially during a pandemic. So, This is why we want to create a website to help people find or recommend healthy restaurants for them.</p>
                <br>
                <h2>BENEFITS :</h2>
                <p style="padding-left:40px">The target group will be able to find restaurants that responded to their needs.</p>
            </div>
        </div>
    </section>

    <!-- section do 2 -->
    <section class="position-relative py-5 jarallax" data-jarallax='{ "speed": 0.6 }'
        style="background-image: url('https://images.unsplash.com/photo-1579027989536-b7b1f875659b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white display-4 fw-bold">TimeLine</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Time line section -->
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p class="text-infotest">Start</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Date : 16/10/2021</h5>
                            <p class="text-muted">Today</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-infotest">Work</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Date : 16/10/2021</h5>
                            <p class="text-muted">Today</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="text-infotest">Check</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Date : 16/10/2021</h5>
                            <p class="text-muted">Today</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-infotest">End</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Date : 16/10/2021</h5>
                            <p class="text-muted">Today</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </li>
                </ul>
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
    <script src="assets/js/main.js"></script>
</body>

</html>