<?php ob_start(); ?>

<?php include_once("include/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Signup</title>
   <link rel="icon" href="img/2.jpg"/>

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
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] , input[type=file]  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #47a3d0;
}

/* Extra styles for the signup button */
.signupbtn {
  padding: 14px 20px;
  background-color: #b9b9b9;
}



 .signupbtnn {
  float: left ;
  width: 33% ;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn ,.cancelbtn {
  float: left ;
  width: 50% ;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}



</style>

</head>


<body  bgcolor="#faf9f8" >

<!--table-1-->

<table border="0" width="100%" height="100px" align="center">

  <tr>
    <th colspan="11"><a href="index.php" style="text-decoration:none;text-shadow: 2px 2px pink;"><font color="black" size="20px" face="Engravers MT">S8UL</font></a></th>    	    
  </tr>
    
 </table>
 
 <form  method="post" enctype="multipart/form-data" style="border:2px solid #ccc;margin:2% 25%;">
  <div class="container">
    <h1 align="center">Sign Up</h1>
	<hr/>
    <p>Please fill up your details to create an account.</p>
    <hr/>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="uname" pattern="[A-Za-z, ]{1,10}" required /> 
    <input type="hidden" name="ustatus" value="Active" />
	<label for="contact"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact" name="ucontact" pattern="[0-9]{10}" required />
	
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" name="uemail" required />
	
	<label for="image"><b>Image</b></label>
    <input type="file"  name="uimg"  required />

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="upassword" required />

       

    <div class="clearfix" >
      <button type="submit" class="signupbtn" style="background-color:#f44336" name="signup">Sign Up</button> 
	  <button type="reset" style="background-color:#f44336" class="cancelbtn" name="signup">Clear</button>
	  <div class="signupbtnn" style="margin:20px 0px 10px 0px;">
	    <hr size="4px"  width="200px"/>
	  </div>
	  <div class="signupbtnn" style="margin:5px 0px;" >
	    <p align="center">or</p>
	  </div>
	  <div class="signupbtnn" style="margin:20px 0px 10px 0px;">
	    <hr width="200px"/>
	  </div>
     <a href="login.php" > <button type="button" style="background-color:blue" class="cancelbtnn" name="login">Login</button></a>
    </div>
  </div>
</form>

 
</body>
 
</html>


<?php

  if(isset($_REQUEST['signup'])){
	  
	  $uname =$_REQUEST['uname'];
	  $ucontact =$_REQUEST['ucontact'];
	  $uemail =$_REQUEST['uemail'];
	  
	  $uimg = date("ymdHis").$_FILES["uimg"]["name"];
			
			move_uploaded_file($_FILES["uimg"]["tmp_name"],"upload/user/".$uimg);
	  
	  $upassword =$_REQUEST['upassword'];
	  $ustatus = $_REQUEST['ustatus'];
	
			date_default_timezone_set("Asia/Kolkata");
			$cdate = date("Y-m-d H:i:s");
			$udate = date("Y-m-d H:i:s");
			
			 $ins = "insert into user_tb (u_name,u_contact,u_email,u_img,u_password,u_status,u_cdate,u_udate) values ('$uname','$ucontact','$uemail','$uimg','$upassword','$ustatus','$cdate','$udate')";
			
			if($con->query($ins)){
				header("location:index.php");
			}//else{
			//echo "<script>alert('Something went Wrong!');</script>";
			//}
	  
  }


?>


<?php ob_flush(); ?>
