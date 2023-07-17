<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include_once("include/title.php"); ?>
    <?php include_once("include/meta.php"); ?>
    <?php include_once("include/link.php"); ?>
    <?php include_once("include/script.php"); ?>
	<?php include_once("include/config.php"); ?>
    
</head>

<body>
   <div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to S8UL</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal"  method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="t1" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="t2" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>


                    <p class="center col-md-5">
                        <button type="submit" name="sub1" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
			
			<?php 
			if(isset($_REQUEST['sub1']))
			{
				$a = $_REQUEST['t1'];
				$b = $_REQUEST['t2'];
				
				$sel = "select * from login_tb where username = '$a' and password='$b'";
				$r = $con->query($sel);
				
				if(mysqli_num_rows($r) > 0)
				{
                   
                     foreach($r as $v);
					 
					 session_start();
					 
					 $_SESSION['login'] = $a;
					 $_SESSION['img'] = $v['image'];
					 $_SESSION['time'] =$v['last_seen'];
					 
					 header("location:index.php");
 				  
				}
				else
				{
			    ?>
				<div class="alert alert-info">
                Please login with Correct Username and Password.
            </div>
                <?php 				
				}
				
			}
			?>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->


</body>
</html>

<?php ob_flush(); ?>
