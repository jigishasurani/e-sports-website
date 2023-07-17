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
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
		<?php include_once("include/header.php"); ?>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
			<?php include_once("include/left_bar.php"); ?>
		</div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Category</a>
        </li>
    </ul>
</div>

	
	<!-- WORK SPACE AREA START -->
	
	
	
	
	 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Users</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
		<th>Image</th>
		<th>Password</th>
        <th>Status</th>
		<th>Created date</th>
		<th>Updated date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
     
     <?php 
	  // select code
	  $sel = "select * from user_tb order by u_id DESC";
	  $r = $con->query($sel);
	  $j = 1;
	  foreach($r as $v)
	  {
	 ?>
	 
	 
	
    <tr>
	    <td><?php echo $j++;?></td>
        <td><?php echo $v['u_name'];?></td>
        <td><?php echo $v['u_contact'];?></td>
        <td><?php echo $v['u_email'];?></td>
       <td><img src="../upload/user/<?php echo $v['u_img'];?>"  height='50px' width='50px'/></td>
	   <td><?php echo $v['u_password'];?></td>
        <td class="center">
            <span class="label-success label label-<?php if($v['u_status']=="Active"){?>default<?php } else{?>danger<?php } ?>"><?php echo $v['u_status'];?></span>
        </td>
		
		<td class="center"><?php echo $v['u_cdate'];?></td>
        <td class="center"><?php echo $v['u_udate'];?></td>
        <td class="center">
           			
            <a class="btn btn-danger" href="user.php?delid=<?php echo $v['u_id'];?>" onClick="return confirm('Are You Sure Want to Delete..?');">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
	  <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
	
	
	
	<?php
		if(isset($_REQUEST['delid'])){
			$userid = $_REQUEST['delid'];
			$del = "delete from user_tb where u_id = '$userid'";
			$con->query($del);
			header("location:user.php");
		}
	?>

	<!-- WORK SPACE AREA END -->
	
	



<!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>

    <footer class="row">
        <?php include_once("include/footer.php"); ?>
    </footer>
	
	

</div><!--/.fluid-container-->
</body>
</html>

<?php ob_flush(); ?>
