﻿<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Book Shop</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/price_rangs.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
<div class="header-area">
<div class="main-header ">
<div class="header-top ">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="d-flex justify-content-between align-items-center flex-sm">
<div class="header-info-left d-flex align-items-center">

<div class="logo">
<a href="home"><img src="assets/img/logo/logo.png" alt=""></a>
</div>

<form action="#" class="form-box">
<input type="text" name="Search" placeholder="Search book by author or publisher">
<div class="search-icon">
<i class="ti-search"></i>
</div>
</form>
</div>
<div class="header-info-right d-flex align-items-center">
<ul>
<li><a href="#">FAQ</a></li>
<li><a href="#">Upcoming Books</a></li>
{{-- <li class="shopping-card">
<a href="cart.html"><img src="assets/img/icon/cart.svg" alt=""></a>
</li> --}}
<li><a href="login" class="btn header-btn">Admin</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom  header-sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-12">

<div class="logo2">
<a href="home"><img src="assets/img/logo/logo.png" alt=""></a>
</div>

<div class="main-menu text-center d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a href="home">Home</a></li>
<li><a href="category">Categories</a></li>
<li><a href="about">About</a></li>
{{-- <li><a href="#">Pages</a>
<ul class="submenu">
<li><a href="login.html">login</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
<li><a href="book-details.html">book Details</a></li>
<li><a href="blog_details.html">Blog Details</a></li>
<li><a href="elements.html">Element</a></li>
</ul>
</li> --}}
{{-- <li><a href="blog.html">Blog</a></li> --}}
<li><a href="contact">Contact</a></li>
</ul>
</nav>
</div>
</div>

<div class="col-xl-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<main>

<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="slider-area">
<div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
<div class="hero-caption hero-caption2">
<h2>Book Category</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="listing-area pt-50 pb-50">
<div class="container">
<div class="row">

<div class="col-xl-4 col-lg-4 col-md-6">

<div class="category-listing mb-50">

<div class="single-listing">

<div class="select-Categories pb-30">
<div class="small-tittle mb-20">
<h4>Filter by Genres</h4>
</div>
<label class="container">History
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Horror - Thriller
<input type="checkbox" checked="checked active">
<span class="checkmark"></span>
</label>
<label class="container">Love Stories
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Science Fiction
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Biography
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
<div class="small-tittle">
<h4>Filter by Price</h4>
</div>
<div class="widgets_inner">
<div class="range_item">
<input type="text" class="js-range-slider" value="">
<div class="d-flex align-items-center">
<div class="price_value d-flex justify-content-center">
<input type="text" class="js-input-from" id="amount" readonly="">
<span>to</span>
<input type="text" class="js-input-to" id="amount" readonly="">
</div>
</div>
</div>
</div>
</aside>


<div class="select-job-items2 mb-30">
<div class="col-xl-12">
<select name="select2">
<option value="">Filter by Rating</option>
<option value="">5 Star Rating</option>
<option value="">4 Star Rating</option>
<option value="">3 Star Rating</option>
<option value="">2 Star Rating</option>
<option value="">1 Star Rating</option>
</select>
</div>
</div>


<div class="select-Categories pt-100 pb-60">
<div class="small-tittle mb-20">
<h4>Filter by Publisher</h4>
</div>
<label class="container">Green Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Anondo Publications
<input type="checkbox" checked="checked active">
<span class="checkmark"></span>
</label>
<label class="container">Rinku Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Sheba Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Red Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<div class="select-Categories">
<div class="small-tittle mb-20">
<h4>Filter by Author Name</h4>
</div>
<label class="container">Buster Hyman
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Phil Harmonic
<input type="checkbox" checked="checked active">
<span class="checkmark"></span>
</label>
<label class="container">Cam L. Toe
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Otto Matic
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Juan Annatoo
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>

</div>
</div>

</div>

<div class="col-xl-8 col-lg-8 col-md-6">
<div class="row justify-content-end">
<div class="col-xl-4">
<div class="product_page_tittle">
<div class="short_by">
<select name="#" id="product_short_list">
<option>Browse by popularity</option>
<option>Name</option>
<option>NEW</option>
<option>Old</option>
<option>Price</option>
</select>
</div>
</div>
</div>
</div>
<div class="best-selling p-0">
<div class="row">
  <?php
    foreach (DB::table('book_details')->get() as $book) 
    {//dd($key);
  ?>
      
  
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="{{url('details/'.$book->id)}}"><img src="uploads/{{$book->image}}" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="{{url('details/'.$book->id)}}"><?=$book->title;?></a></h3>
<p><?=$book->author_name;?></p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span><?=$book->price;?></span>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
  }
?>




<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="#">Very Nice</a></h3>
<p>Mercy Dermansky</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="subscribe-area">
<div class="container">
<div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-8 col-md-9">
<h3>Join Newsletter</h3>
<p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
<form action="#">
<input type="text" placeholder="Enter your email">
<button class="subscribe-btn">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</section>

</main>
<footer>
<div class="footer-wrappper section-bg">
<div class="footer-area footer-padding">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">

<div class="footer-logo mb-25">
<a href="home"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
</div>
</div>

<div class="footer-social">
<a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Book Category</h4>
<ul>
<li><a href="#">History</a></li>
<li><a href="#">Horror - Thriller</a></li>
<li><a href="#">Love Stories</a></li>
<li><a href="#">Science Fiction</a></li>
<li><a href="#">Business</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>&nbsp;</h4>
<ul>
<li><a href="#">Biography</a></li>
<li><a href="#">Astrology</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Software Development</a></li>
<li><a href="#">Ecommerce</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Site Map</h4>
<ul class="mb-20">
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">FAQs</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer-bottom-area">
<div class="container">
<div class="footer-border">
<div class="row d-flex align-items-center">
<div class="col-xl-12 ">
<div class="footer-copy-right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: black" target="_blank" rel="nofollow noopener">Colorlib</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>

<div id="back-top">
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/price_rangs.js"></script>

<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script async="" src="../../gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="../../beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81aa1994ce3d5f9d","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>