<?php
if(isset($_SESSION['uid']))
{
?>

<tr align="center">
<td colspan="11"><font color="black" size="5px" face="Poor Richard"><b>|&nbsp;&nbsp;<a href="index.php" class="ya">Home &nbsp;</a>&nbsp; | &nbsp;<a href="about.php" class="ya">About Us</a>&nbsp; | <a href="contactus.php" class="ya">Contact Us | </a>&nbsp; |&nbsp; <a href="logout.php" class="ya">Sign Out</a>&nbsp; |</b></font></td>
  </tr>
  
  
 <?php 
}
else
{
	
	?>
<tr align="center">
<td colspan="11"><font color="black" size="5px" face="Poor Richard"><b>|&nbsp;&nbsp;<a href="index.php" class="ya">Home &nbsp;</a> |&nbsp;<a href="sign.php" class="ya"> Registration</a>&nbsp; |&nbsp; <a href="login.php" class="ya">Login</a>&nbsp; | &nbsp;<a href="about.php" class="ya">About Us</a>&nbsp; | <a href="contactus.php" class="ya">Contact Us |</a></b></font></td>
  </tr>


<?php }?>	
  