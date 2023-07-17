<?php require_once 'ecom\cloth web\process.php'; ?>
<?php require ('ecom\cloth web\function.php'); ?>
<?php
$product_suffel = $product->getData();
shuffle($product_suffel);?>
<?php $con = new mysqli("localhost", "root", "", "post"); ?>
<?php if (isset($_SESSION['message'])): ?>


<?php endif ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="./home1/new arriwals.css" />
    <link rel="stylesheet" href="./home1/news.css" />
</head>

<body>
    <header>
        <!-- <div class="header-1"> -->
        <video class="background-video" autoplay loop muted plays-inline poster="background.mp4">
            <source src="./video/bg video .mp4" type="video/mp4" />
        </video>
        <!-- </div> -->
        <?php include("mnav.php")?>
        <div class="content">
            <h1 class="ml15">S 8 U L</h1>
            <h2 class="ml15">PLAYING IDEAS FOR LIFE</h2>
        </div>
    </header>
    <!-- main section  -->
    <main>
        <!-- another section -1 -->
        <div class="main-shop">
            <div class="heading-1">
                <h5>NEW ARRIWALS</h5>
                <hr />
            </div>
            <div class="newarriwals">
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel">
                    <?php
        foreach ($product_suffel as $item) {
            ?>
            <?php
            if ($item['c_id'] == 1 && $item['p_status'] == 'Active') {
                ?>
                   <a href="<?php printf('%s?p_id=%s', 'ecom/cloth web/fsproduct.php', $item['p_id']) ?>"><img
                            src="ecom/cloth web/upload/product/<?php echo $item['p_img'] ?? "../img-1/product/sheesh-black.jpg" ?>" alt="img" draggable="false"/></a> 
                    <?php
            }
            ?>
            <?php
        }
        ?>
                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
        <!-- another section  -->
        <div class="about-us">
            <div class="heading">
                <h5>About</h5>
                <hr />
            </div>
            <div class="about-info">
                <div class="box">
                    <div class="box-img">
                        <a href="soul.php">
                            <img src="./img/Team_Soul.png" alt="" />
                        </a>
                    </div>
                    <h2>Soul</h2>
                </div>
                <div class="box">
                    <div class="box-img">
                        <a href="8-bit.php">
                            <img src="./img/8bit-logo.png" alt="" />
                        </a>
                    </div>
                    <h2>8-bit</h2>
                </div>
                <div class="box">
                    <div class="box-img">
                        <a href="soulcity.php">
                            <img src="./cc/cc-1/cc-1/valsol logo b.png" alt="" />
                        </a>
                    </div>
                    <h2>S8ul X Vlt</h2>
                </div>
            </div>
        </div>
        <!-- thired section  -->
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <div class="news-heading">
                        <h1>NEWS & EVENTS</h1>
                        <hr />
                    </div>
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM news");
                    ?>

                    <?php
                    while ($row = $result->fetch_assoc()): ?>
                        <div class="newscontent">
                            <h2>
                                <?php echo $row['name']; ?>
                            </h2>
                            <hr />
                            <div class="contentdesc">
                                <p>
                                    <?php echo $row['news']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>

            <div class="rightcolumn">
                <div class="card">
                    <div class="news-heading">
                        <h1>WALLPAPER</h1>
                        <hr />
                    </div>
                    <div class="wallpapercontent">
                        <figure class="effect-ruby">
                            <img src="home1/s8ul wallpaperts.jpg" alt="img" height="250px" width="340px" />
                            <figcaption>
                                <p>Download from here...</p>
                                <button class="normal"><a href="#">View more</a></button>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer section ---------------->
    <!-- <footer> -->
   <?php include("footer.php")?>
    <!-- </footer> -->
    <script src="main.js"></script>
    <script src="./home1/newarriwals.js"></script>
    <script src="nav.js"></script>
</body>

</html>