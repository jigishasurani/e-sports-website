<?php 
include_once("include/config.php");

session_start();

$a = $_SESSION['login'];

date_default_timezone_set("Asia/Kolkata");
$udate = date("Y-m-d H:i:s");


$up = "update login_tb set last_seen = '$udate' where username = '$a'";

if($con->query($up)==TRUE)
{
	
	$_SESSION['login'] = "";
	$_SESSION['img'] = "";
	$_SESSION['time'] = "";
	
	session_destroy();
	
	header("location:login.php");
	
}


?>