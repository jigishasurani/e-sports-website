<?php ob_start(); ?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="C:\xampp\htdocs\ecom\cloth web\html templet\shop\index.css.css"> -->
    <?php
    require('function.php');
    ?>
    <script src="https://kit.fontawesome.com/f3720e1b96.js" crossorigin="anonymous"></script>
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .img:hover {
            box-shadow: 2px 2px 10px 3px #ff55a3;
        }

        span {
            font-size: 25px;
        }
        .disable{
   cursor: not-allowed;
   pointer-events: none;
}
.deals-value {
    color: white;
        text-decoration: line-through;
    }
    </style>
</head>

<body>
    <section id="header">

        <?php
        session_start();
        // echo $_SESSION['u_name'];
        if (isset($_SESSION['uid'])) {
            // echo $_SESSION['uid'];
            ?>

            <div class="main-logo">
                <a href="#"><img src="./img-1/logo.png" alt="" class="logo"></a>
            </div>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li id="lg-bag"><a href="./cart.php"><i class="bx bx-shopping-bag"></i></a></li>
                    <li>
                        <div class="dropdown">
                            <span>
                                <i class='bx bx-user bx-flip-horizontal' style='color:#ed1d1d'></i>
                                <!-- <img src="img-1/product/h2.png" height="30px" width="30px" style="margin-right:33px;"/> -->
                            </span>
                            <div class="dropdown-content">
                                <p><a href="#" style="text-decoration:none;color:black;">Hi,
                                        <?php echo $_SESSION['u_name'] ?>
                                    </a></p>
                                <hr />
                                <p><a href="logout.php" style="text-decoration:none;color:black;">Logout</a></p>
                            </div>
                        </div>
                    </li>
                    <a href="#" id="close"><i class="bx bx-x" style='color:#ed1d1d'></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="./cart.php"><i class="bx bx-shopping-bag"  id="bag1"></i></a>
                <i id="bar" class="fas fa-outdent" ></i>
            </div>
            <?php
        } else {
            ?>
            <div class="main-logo">
                <a href="#"><img src="./img-1/logo.png" alt="" class="logo"></a>
            </div>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li id="lg-bag"><a href="./login.php"><i class="bx bx-shopping-bag"></i></a></li>
                    <li id="lg-bag">
                        <div class="dropdown">
                            <span><i class='bx bx-user bx-flip-horizontal' style='color:#ed1d1d'></i></span>
                            <div class="dropdown-content">
                                <p><a href="sign.php" style="text-decoration:none;color:black;">Sign Up</a></p>
                                <hr />
                                <p><a href="login.php" style="text-decoration:none;color:black;">Login</a></p>
                            </div>
                        </div>
                    </li>
                    <a href="#" id="close"><i class="bx bx-x" style='color:#ed1d1d'></i></a>
                </ul>
            </div>
            <div id="mobile">
            <a href="./login.php"><i class="bx bx-shopping-bag" id='bag1'></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>

        <?php } ?>
    </section>
    <!-- <?php ob_flush(); ?> -->
    <!-- <a href="./iclude/top_bar.php"><i class="bx bx-user"></i></a> -->
    <!-- <li><a href="blog.html">Blog</a></li> -->