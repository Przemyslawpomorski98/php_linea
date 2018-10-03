<?php 
  $path_info = pathinfo($_SERVER['PHP_SELF']);
  $home_url = "http://".$_SERVER['HTTP_HOST'].$path_info['dirname'];

 ?>
<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
    integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/isotope.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title>Title</title>
  </head>
  <body  onload="delay()">
    <div id="preloader">
    <span></span>
    <span></span>
  </div>
    <div id="body">
  <header id="header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-3">
          <div class="logo align-items-center">
            <img src="img/logo-light.png" class="img-fluid d-block">
          </div>
        </div>
        <div class="col-md-9">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">


                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $home_url; ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Elements</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vue_test.php">Vue test</a>
                </li>
                <li class="nav-item right">
                  <a class="nav-link" href="post_form.php">Dodaj wpis</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>