<?php
require_once('php/connect.php');

$sql = "SELECT * FROM articles WHERE id ='".$_GET['id']."' ";
$result = $conn->query($sql) or die($conn->error);

if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
} else {
    header('Location: blog.php');
}
?>

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
            <h1 class="display-4 fw-bold">Detail</h1>
            <p class="lead">"ก็อร่อยอะไอสัส"</p>
        </div>
    </header>
    <!-- Blog Detail-->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
            <?php echo $row['detail']?>
            </div>
            <div class="col-12">
                <hr>
                <p class="text-end text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y"); ?></p>
            </div>
            <div class="owl-carousel owl-theme">
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
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