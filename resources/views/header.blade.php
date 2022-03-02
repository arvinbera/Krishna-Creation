<?php 

use App\Core\Helper;

$token=Helper::$Token;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Krishna Creation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="../assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-1 bg-black" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          
          <div class="col-6">
            <p class="mb-0 text-left">
              <span class="mr-3"><a href="tel:1234567890"> <i class="fas fa-phone-volume mr-2"></i>123-4567-890</a></span>
              <span><a href="mailto:shop@krishnacreation.com"><i class="fas fa-envelope mr-2"></i>shop@krishnacreation.com</a></span>
            </p>
          </div>
          <div class="col-6">
            <div class="login float-right">
              <?php ?>
              @if(!Session::get($token))
              <a href="{{ url('/signin') }}" class="nav-link">Login <span></a>|</span><a href="{{ url('/signup') }}" class="nav-link"> Register</a>
              @else
              <a href="{{ url('customer/signout') }}" class="nav-link">Logout</a>
               @endIf
            </div>
            <ul class="social-media float-right">
              <li><a href="#" class=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" class=""><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" class=""><i class="fab fa-instagram"></i></a></li>
              <li><a href="#" class=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-2 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"><img src="../assets/images/logo.jpg" class="img-fluid"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/allproducts') }}" class="nav-link">Products</a></li>
                <li><a href="{{ url('/aboutus') }}" class="nav-link">About Us</a></li>
                <li><a href="special-offer.html" class="nav-link">Special Offer</a></li>
                <li><a href="testimonials.html" class="nav-link">Testimonials</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>