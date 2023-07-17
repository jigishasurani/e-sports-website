<?php require_once 'process.php'; ?>
<?php $con = new mysqli("localhost", "root", "", "post"); ?>
<?php if (isset($_SESSION['message'])): ?>
<?php endif ?>

<?php
ob_start();
require('function.php');
?>
</head>

<body>

    <?php
    $cart_data = $product->getData('cart');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['delete-cart-submit'])) {
            $deleterecord = $cart->deletecart($_POST['i_id']);
        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark text-center">
            <span class="navbar-brand mb-0 h1 text-center">Payment-Cash On Delivery</span>
            <div class="row" text-align="right">
                <a href="logout.php"> Logout</a>
            </div>

        </nav>

        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-center">Your shipping address</h2>
                    <hr><br>
                    <form action="process.php" method="POST">
                        <div class="form-group">
                            <label for="name">Enter your name:</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                                required value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter E-mail"
                                required value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="number">Contact-number:</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="number" class="form-control" id="number" placeholder="" required
                                value="<?php echo $number; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Shippingaddress">shipping-address:</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="Shippingaddress" class="form-control" id="Shippingsddress"
                                placeholder="Enter shipping-address" required value="<?php echo $Shippingaddress; ?>">
                        </div>
                        <div class="form-group">

                            <table width="100%">
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
                                                            <input type="hidden" value="<?php echo $item['p_id'] ?? 0; ?>"
                                                                name="i_id">

                                                            </button>
                                                        </form>
                                                        <!-- <a href="#">
                                </a> -->
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="p_name">
                                                                <?php echo $item['p_name'] ?? "unknown"; ?>
                                                            </label>
                                                            <input type="hidden" name="p_name"
                                                                value="<?php echo $item['p_name']; ?>">
                                                        </div>
                                                    </td>
                                                       
                                                    <td>&#8377;
                                                        <div class="form-group">
                                                            <label for="p_name">
                                                                <?php echo $item['p_offerprice'] ?? 0; ?>
                                                            </label>
                                                            <input type="hidden" class="iprice" name="p_price"
                                                                value=" <?php echo $item['p_offerprice'] ?? 0; ?>">
                                                        </div>
                                                    </td>

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

                        </div>
                        <?php if ($update == true): ?>
                            <button type="submit" name="update" class="btn btn-success btn-block">Order Ready</button>
                        <?php else: ?>
                            <button type="submit" name="save" class="btn btn-primary btn-block">Ready to place</button>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center">Order</h2>
                    <hr>
                    <br><br>

                    <?php

                    if (isset($_SESSION['massage'])) {
                        echo "<div class='alert alert-{$_SESSION['msg_type']} alert-dismissible fade show ' role='alert'>
                                    <strong> {$_SESSION['massage']} </storng>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                ";
                    }

                    ?>


                    <?php

                    $result = mysqli_query($con, "SELECT * FROM post");
                    ?>
                    <div id="subtotal">
                        <h3>Cart Total</h3>

                        <table>
                            <tr>
                                <td>Cart Subtotal [
                                    <?php echo isset($subtotal) ? count($subtotal) : 0; ?> item ]
                                </td>
                                <td>&#8377;
                                    <?php echo isset($subtotal) ? $cart->getsum($subtotal) : 0; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>Free</td>
                            </tr>

                            <td><Strong>Total</Strong></td>
                            <td >&#8377;
                        <!-- <?php $price=$_GET['s1'];  
                        echo $price;?> -->

                                <?php echo isset($subtotal) ? $cart->getsum($subtotal) : 0; ?>
                            </td>
                            </tr>

                        </table>


                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>

    </html>