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
    <?php
    require('function.php');
    ?>
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

        .disable {
            cursor: not-allowed;
            pointer-events: none;
        }
        .deals-value {
        text-decoration: line-through;
    }
    </style>

</head>

<body>
<!-- navbar *-*-*-*-*-*- -->
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
                    <li><a class="active" href="./shop.php">Shop</a></li>
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
                    <li><a class="active" href="./shop.php">Shop</a></li>
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
            <a href="./login.php"><i class="bx bx-shopping-bag" id="bag1"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>

        <?php } ?>
    </section>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['fssubmit'])) {
            //call method addtocart
            $cart->addtocart($_POST['user_id'], $_POST['p_id'], $_POST['c_id']);
        }
    }

    ?>
    <?php
    // $c_id=$_GET['c_id'] ?? 1;
    $item_id = $_GET['p_id'] ?? 1;
    foreach ($product->getData() as $item):
        // if($item['c_id']==$c_id):
        if ($item['p_id'] == $item_id):
            ?>
            <!-- product detail *-*--*-**-*-*- -->
            <section id="prodetails" class="section-p1">
                <div class="single-pro-image">
                    <img src="upload/product/<?php echo $item['p_img'] ?? './img-1/product/1.webp' ?>" width="100%" id="MainImg"
                        alt="">


                </div>
                <div class="single-pro-details">
                    <!-- <h6><?php echo $item['item_brand'] ?? "unknow" ?></h6> -->
                    <h4>
                        <?php echo $item['p_name'] ?? "unknow" ?>
                    </h4>
                    <h2 class="deals-value" style="font-size:20px">&#8377;
                        <?php echo $item['p_price'] ?? 0 ?>
                    </h2>
                    <h2 >&#8377;
                        <?php echo $item['p_offerprice'] ?? 0 ?>
                    </h2>
                    <select name="" id="">
                        <option value="">Select Size</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                        <option value="">Small</option>
                        <option value="">Large</option>
                    </select>
                    <input type="number" value="1" min='1' max='5'>
                    <!-- <button class="normal">add to cart</button> -->
                    <form method="post">
                        <input type="hidden" name="p_id" value="<?php echo $item['p_id'] ?? "1"; ?>">
                        <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['uid']); ?>">
                        <input type="hidden" name="c_id" value="<?php echo $item['c_id'] ?? "1"; ?>">

                        <?php
                        if (in_array($item['p_id'], $cart->getcartid($product->getData('cart')) ?? [])) {
                            echo ' <button type="submit" name="fssubmit" class="normal disable" style="margin-top:10px;background-color: green;">
                            In a cart
                            </button>';
                        } else {
                            echo ' <button type="submit" class="normal " style="margin-top:10px;" name="fssubmit">
                        add to cart
                            </button>';

                        }
                        ?>
                    </form>
                    <h4>Product Details</h4>
                    <span> <?php echo $item ['p_desc'] ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ut illo nesciunt dicta nulla architecto
                        consequatur laborum. Consequuntur placeat ab ipsam vel aperiam, unde omnis et rerum perferendis amet
                        eius eveniet, quaerat neque eos." ?></span>
                </div>
            </section>
            <?php
        endif;
    endforeach;
    ?>
    <!-- ******** -->
    <?php
    include('templet/f1p.php');
    ?>
    <!-- news latter *-*-*-* -->
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
<!-- <div class="small-img-group">
                <div class="small-img-col">
                    <img src="./img-1/product/download.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img-1/product/over-power-black.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img-1/product/scout.webp" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img-1/product/mortal.webp" width="100%" class="small-img" alt="">
                </div>
            </div> -->