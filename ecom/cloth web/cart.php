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
    <link rel="stylesheet" href="cloth web/index.css">
    <!-- <link rel="stylesheet" href="shop.css"> -->
    <!-- <link rel="stylesheet" href="about.css"> -->
    <!-- <link rel="stylesheet" href="cart.css"> -->
    <?php
    ob_start();
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
    </style>
</head>

<body>

    <?php
    session_start();

    $cart_data = $product->getData('cart');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['delete-cart-submit'])) {
            $deleterecord = $cart->deletecart($_POST['i_id']);
        }

    }
    ?>

    <section id="header">

        <?php
        // session_start();
// echo $_SESSION['uid'];
// echo $_SESSION['u_name'];
        if (isset($_SESSION['uid'])) {
            ?>

            <div class="main-logo">
                <a href="#"><img src="./img-1/logo.png" alt="" class="logo"></a>
            </div>
            <div>
                <ul id="navbar">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li id="lg-bag"><a class="active" href="./cart.php"><i class="bx bx-shopping-bag"></i></a></li>
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
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="./accessories.php">Accessories</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li id="lg-bag"><a class="active" href="./login.php"><i class="bx bx-shopping-bag"></i></a></li>
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


    <!-- page header banner -->
    <section id="page-header" class="about-header">
        <h2>@ let's Shop</h2>
        <!-- <p>Lorem ipsum sit amet, consectetur </p> -->
    </section>

    <!-- cart table   -->
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <t>
                    <td>REMOVE</td>
                    <td>IMAGE</td>
                    <td>PRODUCT</td>
                    <td>PRICE</td>
                    <td>SIZE</td>
                    <td>QUANTITY</td>
                    <td>SUBTOTAL</td>
                    </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cart_data as $item) {
                    ?>
                    <?php if (isset($_SESSION['uid']) && $item['user_id'] == $_SESSION['uid']) {
                        $cart1 = $product->getproduct($item['p_id']);
                        $subtotal[] = array_map(function ($item) {
                            ?>
                            <tr>
                                <td>
                                    <form method="post">
                                        <button name="delete-cart-submit" type=submit>
                                            <i class="far fa-times-circle"></i>
                                        </button>
                                        <input type="hidden" value="<?php echo $item['p_id'] ?? 0; ?>" name="i_id">
                                    </form>
                                    <!-- <a href="#">
                                </a> -->
                                </td>
                                <td><img src="upload/product/<?php echo $item['p_img'] ?? "./img-1/product/1.webp" ?>" alt=""></td>
                                <td>
                                    <?php echo $item['p_name'] ?? "unknown"; ?>
                                </td>
                                <td>&#8377;
                                    <?php echo $item['p_offerprice'] ?? 0; ?>
                                    <input type="hidden" class="iprice" value=" <?php echo $item['p_offerprice'] ?? 0; ?>">
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">Select Size</option>
                                        <option value="">XL</option>
                                        <option value="">XXL</option>
                                        <option value="">Small</option>
                                        <option value="">Large</option>
                                    </select>
                                </td>
                                <td>
                                    <form action="shipment.php" method="post">
                                        <input onchange="subtotal2()" class="iquantity" type="number" value="1" min='1' max='6'
                                            name="t1">
                                        <input type="hidden" name="p_id" value="<?php $item['p_id'] ?>" id="">
                                    </form>
                                </td>
                                <td class="itotal">&#8377;</td>
                            </tr>
                            <?php
                            // }
                            return $item['p_offerprice'];
                        }, $cart1);
                    }
                    //closing array map function       
                }
                ;
                ?>
            </tbody>

        </table>
    </section>
    <!-- coupon section  -*--*-*-*-*-*-*-*-*-*-*-*-->
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <!-- cart total section  -->
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal [
                        <?php echo isset($subtotal) ? count($subtotal) : 0; ?> item ]
                    </td>
                    <td id="gtotal">
                        <!-- <?php echo isset($subtotal) ? $cart->getsum($subtotal) : 0; ?> -->
                    </td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>

                    <td><Strong>Total</Strong></td>
                    <td id="gtotal1">
                        <form action="shipment.php" method="post">
                        <input type="hidden" name="s1" value="gtotal1.innerText">
                        </form>
                        </td>
                </tr>
            </table>
            <a class="normal"><?php echo( "<button name='sub' onclick= \"location.href='shipment.php'\">Processed to checkout</button>");?></a>
        </div>
    </section>
    <!-- feature product section  -->
    <?php
    include('templet/f1p.php');
    ?>

    <!-- cart total script logoc  -->
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        var gtotal1 = document.getElementById('gtotal1');
        function subtotal2() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {

                itotal[i].innerText = "₹" + (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = "₹" + gt;
            gtotal1.innerText = "₹" + gt;
        }
        subtotal2();
    </script>

    <!-- ***** footer -->
    <?php
    include('footer.php');
    ?>


    <!-- // if($item['c_id']==1){
                    // }
                    // elseif($item['c_id']==2){
                    //     $cart= $product->getproduct($item['item_id'],'nproduct');
                    // } 
                    // elseif($item['c_id']==3){
                    //     $cart= $product->getproduct($item['item_id'],'shopproduct');
                    // } -->