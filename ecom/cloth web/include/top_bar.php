 <?php 
 session_start();
 ?>
 <table width="100%">
  <tr>
    <td><a href="index.php" style="text-decoration:none;"><font color="black" size="20px" face="Engravers MT" style="margin-left:35%;text-shadow: 2px 2px pink;"><b>S8UL</b></font><a></td>
	<td>
	
	</td>
	
	<?php
	if(!isset($_SESSION['uid']))
	{
	?>
	 
	<td>
	<div class="dropdown">
	<span><img src="img-1/feature/f1.png" height="30px" width="30px"  style="margin-right:33px;"/></span>
	<div class="dropdown-content">
	<p><a href="sign.php" style="text-decoration:none;color:black;">Sign Up</a></p>
	<hr/>
	<p><a href="login.php" style="text-decoration:none;color:black;">Login</a></p>
	 </div>
</div>
	
	</td>
	<?php } ?>

 </tr>
</table>
  