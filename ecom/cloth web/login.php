<?php ob_start(); ?>

<?php include_once("include/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    
    <title>login</title>

<style>
.ya{
text-decoration:none;
color:black;
}

.ya:hover{
text-decoration:none;
color:black;
text-shadow: 2px 2px pink;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>

</head>

<body  bgcolor="#faf9f8" >

<!--table-1-->

<table border="0" width="100%" height="100px" align="center" >
  <tr>
  
    <th colspan="11"><a href="index.php" style="text-decoration:none;text-shadow: 2px 2px pink;"><font color="black" size="20px" face="Engravers MT">S8UL</font></a></th>    
  </tr>
 </table>
 <form  method="post" style="border:2px solid #ccc;margin:2% 25%;" style="background-color:#f1f1f1">
  <div class="imgcontainer">
    <p><b>LOGIN HERE</b></p>
  </div>

  <div class="container">
    <label for="uname"><b>Enter Email</b></label>
    <input type="text" placeholder="Enter Username" name="t1" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="t2" required>
        
    <button type="submit" name="sub1" style="background-color:#f44336">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <a href="index.php"> <button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form> 
</body>
</html>
<?php 
		if(isset($_REQUEST['sub1']))
			{
				$a = $_REQUEST['t1'];
				$b = $_REQUEST['t2'];
				$sel = "select * from user_tb where u_email = '$a' and u_password='$b'";
				$r = $con->query($sel);
							
				if(mysqli_num_rows($r) > 0)
				{
                     session_start();
					 foreach($r as $v);
					 $_SESSION['uid'] = $v['u_id'];
           $_SESSION['u_name']=$v['u_name'];
           print_r( $v['u_name']);
           echo $v['u_id'];

					 header("location:index.php");
				}
				else
				{
			    ?>
				<div class="alert alert-info">
                <script>alert("Please login with Correct Username and Password.")</script>
            </div>
                <?php 				
			}
		}
			?>
<?php ob_flush(); ?>
