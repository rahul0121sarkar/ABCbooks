﻿<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Book Shop</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/slicknav.css">
<link rel="stylesheet" href="../assets/css/animate.min.css">
<link rel="stylesheet" href="../assets/css/price_rangs.css">
<link rel="stylesheet" href="../assets/css/magnific-popup.css">
<link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../assets/css/themify-icons.css">
<link rel="stylesheet" href="../assets/css/slick.css">
<link rel="stylesheet" href="../assets/css/nice-select.css">
<link rel="stylesheet" href="../assets/css/style.css">
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
<li><a href="../login" class="btn header-btn">Admin</a></li>
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
<li><a href="../home">Home</a></li>
<li><a href="../category">Categories</a></li>
<li><a href="../about">About</a></li>
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
<li><a href="../contact">Contact</a></li>
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

<div class="services-area2">
<div class="container">
<div class="row">
<div class="col-xl-12">
  <?php
  //foreach(DB::table('book_details')->get() as $key){dd($key);
 ?>
 <form action="{{$detail->id}}" enctype="multipart/form-data">
<div class="row">
<div class="col-xl-12">

<div class="single-services d-flex align-items-center mb-0">
<div class="features-img">
  <a href="book-details.html">
    {{-- <img src="assets/img/gallery/best_selling1.jpg" alt=""></a> --}}
    <img src="/uploads/{{$detail->image}}" height="200px" width="200px" alt="nothing"></a>
  
 
{{-- <img src="assets/img/gallery/best-books1.jpg" alt=""> --}}
</div>



 <div class="features-caption">
 <h3><?=$detail->title;?></h3>
 <p><?=$detail->author_name;?></p>
 <div class="price">
 <span><?=$detail->price;?></span>
 </div>
 <div class="review">
 <div class="rating">
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star-half-alt"></i>
 </div>
 <p>(120 Review)</p>
 </div>
 <a href="../librarie" class="white-btn mr-10">Preview</a>
 <a href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a>
 </div>
 
 
 <?php
  // }
?>

</div>
</div>
</div>
</div>



</div>
</div>
</div>
</form>

<section class="our-client section-padding best-selling">
<div class="container">
<div class="row">
<div class="offset-xl-1 col-xl-10">
<div class="nav-button f-left">

<nav>
<div class="nav nav-tabs " id="nav-tab" role="tablist">
<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Description</a>
<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Author</a>
<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Comments</a>
<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Review</a>
</div>
</nav>

</div>
</div>
</div>
</div>
<div class="container">

<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p><?=$detail->description;?></p>

</div>
</div>
</div>
<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p><?=$detail->author;?></p>

</div>
</div>
</div>
<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p><?=$detail->comment;?></p>

</div>
</div>
</div>
<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p><?=$detail->review;?></p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

<div class="row">
<div class="offset-xl-1 col-lg-9">
<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.</p>
</div>
</div>
</div>
</div>
</div>

</section>
<?php
// }
?>





<section class="subscribe-area">
<div class="container">
<div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="../assets/img/gallery/section-bg1.jpg.webp">
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


<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery.slicknav.min.js"></script>

<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/price_rangs.js"></script>

<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script async="" src="../../gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="../../beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81aa19a8b95e5f9d","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>