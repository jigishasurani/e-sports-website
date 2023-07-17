<?php 
session_start();

if(!isset($_SESSION['login']) || !isset($_SESSION['img']) || !isset($_SESSION['time']))
{
	
	header("location:login.php");
}


?>

<div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>S8UL</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo ucfirst($_SESSION['login']);?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a><img src="img/icon5.png" height="50px" width="50px" /></a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site : <?php echo $_SESSION['time'];?></a></li>
                
                
            </ul>

        </div>
    