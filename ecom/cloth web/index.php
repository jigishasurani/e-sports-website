<!-- navbar file  -->
<?php
ob_start();
// session_start();
include("nav.php");
?>
<!-- new feature section  -->

<section id="hero">
    <h4>Trade-in-offer </h4>
    <h2>Super value deals</h2>
    <!-- <h1>On all product</h1> -->
    <div class="main-video">
        <video autoplay loop muted src="./img-1/shop viedo.mp4"></video>
    </div>
    <h5>Save more with coupons &up to 70% off! </h5>
    <br>
    <br>
    <a href="shop.html"><button>Shop Now</button></a>
</section>
<!-- feature section *--*-*-*- -->
<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./img-1/feature/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img-1/feature/f2.png" alt="">
        <h6>Online order</h6>
    </div>
    <div class="fe-box">
        <img src="./img-1/feature/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="./img-1/feature/f4.png" alt="">
        <h6>Promotion</h6>
    </div>
    <div class="fe-box">
        <img src="./img-1/feature/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="./img-1/feature/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>
<!-- ****** feature product section *-*-*-*-*-->
<?php
include("templet/feature.php");
?>
<!-- mid banner *-*-*-*-*-*-*- -->
<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span> - All t-shirt & Accessories</h2>
    <button class="normal"> Explore More</button>
</section>
<!-- ****** new arivels product section *--**-*--->
<?php
include("templet/newarrivel.php");
?>
<!-- crazy deal section  -->
<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best Classic dress is on sale cara</span>
        <button class="white"><a href="shop.php">Learn More</a></button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Spring/summer</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best Classic dress is on sale cara</span>
        <button class="white"><a href="accessories.php">Collection</a><button>
    </div>
</section>
<!-- sale banner *-*-*-* -->
<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <H3>Winter Colection -50% OFF</H3>
    </div>
    <div class="banner-box banner-box2 ">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <H3>Spring / Summer 2022</H3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
    </div>
</section>
<!-- news latter *-*-*-*- -->
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
            Get E-mail updates about our shop and <span> special offers.</span>
        </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>
<!-- ***** -->
<?php
include('footer.php');
?>