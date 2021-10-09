<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommend Restaurant</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-alpha2">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/icon/utensils-solid.svg" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Recommend Restaurant
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarkey" aria-controls="navbarkey" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarkey">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- carousel -->
<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class = "carousel-img" style="background-image: url('https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80');">
    <div class ="carousel-caption">
        <h1 class ="display-4 fw-bold">Restaurant</h1>
        <p class = "lead">แนะนำ</p>
    </div>
    <div class = "blackscreen"></div>

    </div>
    </div>
    <div class="carousel-item">
    <div class = "carousel-img" style="background-image: url('https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80');">
    
    </div>
    </div>
    <div class="carousel-item">
    <div class = "carousel-img" style="background-image: url('https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80');">
    
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>

<!-- Blog -->
<section class="container">
    <h1 class = "border-short-bottom text-center">รายการเเนะนำ</h1>
    <div class="row">
<section class = "col-12 col-sm-12">
    <div class="card mb-3" style="max-width: 950px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">ร้านที่ 1</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod maiores molestiae hic soluta voluptates deserunt quo rerum? Ad quod deserunt non eius, blanditiis, at, sed a odit cupiditate repudiandae quisquam?</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </section>
<section class = "col-12 col-sm-12">
    <div class="card mb-3" style="max-width: 950px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">ร้านที่ 2</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod maiores molestiae hic soluta voluptates deserunt quo rerum? Ad quod deserunt non eius, blanditiis, at, sed a odit cupiditate repudiandae quisquam?</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </section>

    </div>
</section>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>    
</body>
</html>