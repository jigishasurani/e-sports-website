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
                <h2><i class="glyphicon glyphicon-edit"></i> Add Category</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="cname" value="" class="form-control" placeholder="Enter Category Name">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="cimg"  class="form-control">
                    </div>
					<div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
						<select name="ctype" class="form-control">
							<option value="feature product">Feature product</option>
							<option value="new arivels">New arivels</option>
							<option value="shop product">Shop product</option>
							<option value="accessories">Accessories</option>
							<option value="recommended">Recommended</option>
						</select>
                    </div>
					
					
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
						<select name="cstatus" class="form-control">
							<option value="Active">Active</option>
							<option value="Deactive">Deactive</option>
						</select>
                    </div>
                    
                    <input type="submit" name="addcategory" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
	</div>
	
	<?php
		if(isset($_REQUEST['addcategory'])){
			$name = $_REQUEST['cname'];
			$status = $_REQUEST['cstatus'];
			
			$img = date("ymdHis").$_FILES["cimg"]["name"];
			
			$type = $_REQUEST['ctype'];
			
			move_uploaded_file($_FILES["cimg"]["tmp_name"],"../upload/category/".$img);
			
			
			
			date_default_timezone_set("Asia/Kolkata");
			$cdate = date("Y-m-d H:i:s");
			$udate = date("Y-m-d H:i:s");
			
			$ins = "insert into category_tb (c_name,c_img,c_type,c_status,c_cdate,c_udate) values ('$name','$img','$type','$status','$cdate','$udate')";
			
			if($con->query($ins)){
				header("location:category.php");
			}else{
				echo "<script>alert('Something went Wrong!');</script>";
			}
			
		}
	?>
	
	
	 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Category</h2>

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
		<th>Image</th>
		<th>Type</th>
        <th>Status</th>
		<th>Created date</th>
		<th>Updated date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
     
     <?php 
	  // select code
	  $sel = "select * from category_tb order by c_id DESC";
	  $r = $con->query($sel);
	  $j = 1;
	  foreach($r as $v)
	  {
	 ?>
	
    <tr>
	    <td><?php echo $j++;?></td>
        <td><?php echo $v['c_name'];?></td>
       <td><img src="../upload/category/<?php echo $v['c_img'];?>"  height='50px' width='50px'/></td>
	   <td><?php echo $v['c_type'];?></td>
        <td class="center">
            <span class="label-success label label-<?php if($v['c_status']=="Active"){?>default<?php } else{?>danger<?php } ?>"><?php echo $v['c_status'];?></span>
        </td>
		<td class="center"><?php echo $v['c_cdate'];?></td>
        <td class="center"><?php echo $v['c_udate'];?></td>
        <td class="center">
            <a class="btn btn-info" href="category_edit.php?editid=<?php echo $v['c_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
			
            <a class="btn btn-danger" href="category.php?delid=<?php echo $v['c_id'];?>" onClick="return confirm('Are You Sure Want to Delete..?');">
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

	<!-- WORK SPACE AREA END -->
	
	<?php
		if(isset($_REQUEST['delid'])){
			$catid = $_REQUEST['delid'];
			$del = "delete from category_tb where c_id = '$catid'";
			$con->query($del);
			header("location:category.php");
		}
	?>



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
