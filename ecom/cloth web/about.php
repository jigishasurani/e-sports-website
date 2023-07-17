<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="shop.css"> -->
    <!-- <link rel="stylesheet" href="about.css"> -->
    <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: -40px;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.img:hover{
box-shadow:2px 2px 10px 3px #ff55a3;
}
span{
    font-size: 25px;
}
    </style>
</head>

<body>
    <section id="header">
    <?php
        session_start();
        // echo $_SESSION['uid'];
        // echo $_SESSION['u_name'];
        if (isset($_SESSION['uid'])) {
            ?>

<div class="main-logo">
                <a href="#"><img src="./img-1/logo.png" alt="" class="logo"></a>
            </div>
            <div>
                <ul id="navbar">
                    <li><a  href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a class="active" href="./about.php">About</a></li>
                    <li id="lg-bag"><a href="./cart.php"><i class="bx bx-shopping-bag"></i></a></li>
                    <li>
                        <div class="dropdown">
                            <span>
                            <i class='bx bx-user bx-flip-horizontal' style='color:#ed1d1d' ></i>
                                <!-- <img src="img-1/product/h2.png" height="30px" width="30px" style="margin-right:33px;"/> -->
                            </span>
                            <div class="dropdown-content">
                                <p><a href="#" style="text-decoration:none;color:black;">Hi,<?php echo $_SESSION['u_name']?></a></p>
                                <hr />
                                <p><a href="logout.php" style="text-decoration:none;color:black;">Logout</a></p>
                            </div>
                        </div>
                    </li>
                    <a href="#" id="close"><i class="bx bx-x" style='color:#ed1d1d'></i></a>
                </ul>
            </div>
            <div id="mobile">
            <a href="./cart.php"><i class="bx bx-shopping-bag" id="bag1"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
            <?php
        } else {

            ?>

            <div class="main-logo">
                <a href="#"><img src="./img-1/logo.png" alt="" class="logo"></a>
            </div>
            <div>
                <ul id="navbar">
                    <li><a  href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a class="active" href="./about.php">About</a></li>
                    <li id="lg-bag"><a href="./login.php"><i class="bx bx-shopping-bag"></i></a></li>
                    <li id="lg-bag"><div class="dropdown">
                            <span><i class='bx bx-user bx-flip-horizontal' style='color:#ed1d1d' ></i></span>
                            <div class="dropdown-content">
                                <p><a href="sign.php" style="text-decoration:none;color:black;">Sign Up</a></p>
                                <hr />
                                <p><a href="login.php" style="text-decoration:none;color:black;">Login</a></p>
                            </div>
                        </div></li>
                    <a href="#" id="close"><i class="bx bx-x" style='color:#ed1d1d'></i></a>
                </ul>
            </div>
            <div id="mobile">
            <a href="./login.php"><i class="bx bx-shopping-bag" id="bag1"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>

        <?php } ?>
    </section>

    <!-- page contant *-*-*-*-*-*-* -->
    <section id="page-header" class="about-header">
        <h2>@ Know Us</h2>
        <!-- <p>Lorem ipsum sit amet, consectetur </p> -->
    </section>

    <!-- who we are section  -->
<section id="about-head" class="section-p1">
    <img src="img-1/s8ul wallpaperts.jpg" alt="">
    <div>
        <h2>Who We Are?</h2>
        <p>S8UL is one of the most beloved esports organizations in India and is a home for many popular content creators in Indian gaming community. Soul and 8Bit have merged under the same banner and the co-owners 8bit Thug, 8bit Goldy an Soul Mortal have formed the “most luxurious gaming facility in India”.</p>
        <abbr title="" class="abbr-1">we crete memories with you #s8ul for life.</abbr>
        <br><br>

<marquee bgcolor="#000" loop="-1" scrollamount="5" width="100%">........ We crete memories........</marquee>
    </div>
</section>
<!-- documentry section *-*-*-*- -->
<section id="about-app" class="section-p1">
   
    <div class="video">
        <video autoplay muted loop src="img-1/s8ul try1.mp4"></video>
    </div>
</section>

<!-- feature section *-*-*- -->
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
<!-- newslatter section *-*-* -->
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
<!-- footer *-*-*-*-*-* -->
<?php
include('footer.php');
?>

   