<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-alpha2">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="/assets/icon/utensils-solid.svg" alt="" width="30" height="30"
          class="d-inline-block align-text-top" />
        Recommend Restaurant
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarkey"
        aria-controls="navbarkey" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarkey">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
            <a class="nav-link" aria-current="page" href="index.php">Home<span class = "sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active': '' ?>">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>