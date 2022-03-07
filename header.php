<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Guru - The Perfect destination for Mobiles</title>

<!-- Bootstrap CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Owl carousel CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- Font awesome icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<!-- custom css file-->
<link rel="stylesheet" href="style.css">
</head>

<?php 

  //require functions.php
  require("functions.php");

?>

<body>

    <!-- Header start-->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light"> <!-- bootstrap classes used-->
            <p class="font-rale font-size-12 text-black-50 m-0"></p>
            <div class="font-rale font-size-14">
                <a href="cart.php" class="px-3 border-right border-left text-dark">Wishllist(<?php echo count($product->getData('wishlist')); ?>)</a>
                <a href="logout.php" class="px-3 border-right text-dark">Logout</a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
            <a class="navbar-brand font-weight-bold" href="#">Phone Guru</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik font-size-20">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./product.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blogs.php">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="register.php">Register</a>
                  </li>
              </ul>
              <form action="#" class="font-size-14 font-rale">
                  <a href="cart.php" class="py-2 rounded-pill color-secondary-bg">
                      <span class="font-size-16 px-2 text-dark"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                  </a>
              </form>
            </div>
          </nav>
    </header>

    <!-- !Header start-->

    <!-- Main start-->
    <main id="main-site">