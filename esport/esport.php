<?php $con = new mysqli("localhost","root","","post"); ?>
<?php  if(isset($_SESSION['message'])): ?>

<?php endif ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>esport</title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="esport1.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>
  <div class="navbar-3">
    <?php include("nav.php");?>
  </div>
  <div class="main-banner">
    <div class="banner">
    <img src="esport-img/E-sport.png">
  </div>
  </div>
  <div class="main-container">
    <div class="menu-container">
      <div class="box">
        <div class="box-img">
          <a href="game/bgmi.php"><img src="esport-img/bgmi/bgmi logo.png" alt=""></a>
        </div>
        <a href="game/bgmi.php">
          <h3>BGMI</h3>
        </a>
      </div>
      <div class="box">
        <div class="box-img">
          <a href="game/valorant.php"><img src="esport-img/valorant/valorant logo.jpg" alt=""></a>
        </div>
        <a href="game/valorant.php">
          <h3>VALORANT</h3>
        </a>
      </div>
      <div class="box">
        <div class="box-img">
          <a href="game/pokemonunite.php"><img src="esport-img/pockmenunit/Pokemon Unite logo.png" alt=""></a>
        </div>
        <a href="game/pokemonunite.php">
          <h3>POKEMON UNITE</h3>
        </a>
      </div>
    </div>
    <div class="menu-container">
      <div class="box">
        <div class="box-img">
          <a href="game/clashroyal.php"><img src="esport-img/clashroyal/clash royal logo.png" alt=""></a>
        </div>
        <a href="game/clashroyal.php">
          <h3>CLASH ROYAL</h3>
        </a>
      </div>

      <div class="box">
        <div class="box-img">
          <a href="game/clashofclans.php"><img src="esport-img/coc/coc log.png" alt=""></a>
        </div>
        <a href="game/clashofclans.php">
          <h3>CLASH OF CLANS</h3>
        </a>
      </div>
    </div>
  </div>
<!-- <footer> -->
  <?php include("footer.php")?>
      <!-- <hr> -->
      
 
    <!-- </footer> -->
    <!-- <script src="/project1/navjs.js"></script> -->
    <script src="/project1/main.js"></script>
    <!-- <script src="/project1/footer.js"></script> -->
  </body>
</html>