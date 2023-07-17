<?php $con = new mysqli("localhost","root","","post"); ?>
<?php  if(isset($_SESSION['message'])): ?>

<?php endif ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esport</title>
    <link rel="stylesheet" href="valorant1.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
<?php include("nav.php")?>
    <div class="main-heading">
        <div class="heading">
            <img src="bgmi/Capturebg.PNG" alt="" class="valo-img">
        </div>
    </div>
    
    <div class="main-container">
        <div class="container">
            <div class="box">
                <div class="box-img">
                    <img src="bgmi/g1.jpg" alt="">
                </div>
                <h2>hastar</h2>
                <h3>pinku sharma</h3>
                <div class="social-1">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
                <!-- <button class="ctn">Twitch</button> -->
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="bgmi/g2.jpg" alt="">
                </div>
                <h2>goblin</h2>
                <h3>anjan das</h3>
                <div class="social-1">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
                <!-- <button class="ctn">Twitch</button> -->
            </div>
            
        </div>
        <div class="container">
            <div class="box">
                <div class="box-img">
                    <img src="bgmi/g3.jpg" alt="">
                </div>
                <h2>krutika</h2>
                <h3>jigisha roy</h3>
                <div class="social-1">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
                <!-- <button class="ctn">Twitch</button> -->
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="bgmi/g4.jpg" alt="">
                </div>
                <h2>Omegha</h2>
                <h3>amana jain</h3>
                <div class="social-1">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
                <!-- <button class="ctn">Twitch</button> -->
            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="box-img">
                    <img src="bgmi/g5.jpg" alt="">
                </div>
                <h2>kashh </h2>
                <h3>kashvi shah</h>
                <div class="social-1">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
                <!-- <button    class="ctn">Twitch</button> -->
            </div>
            
        </div>
    </div>
    <!-- <footer></footer> -->
    <?php include("./footer.php")?>
      <script src="main.js"></script>
    </body>
    
    </html>