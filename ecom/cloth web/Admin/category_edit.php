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
	
	<?php
		if(isset($_REQUEST['editid'])){
			
			$catid = $_REQUEST['editid'];
			
			$cat_sel = "select * from category_tb where c_id = '$catid'";
			$fetch = $con->query($cat_sel);
			foreach($fetch as $fetchv);
			
		}else{
			header("location:category.php");
		}
	?>
	
	
	<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Category</h2>

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
                        <input type="text" name="cname" value="<?php echo $fetchv['c_name']; ?>" class="form-control" placeholder="Enter Category Name">
                    </div>
					<input type="hidden" name="old_img" value="<?php echo $fetchv['c_img'];?>" />
					<div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="cimg"  class="form-control">
						<img src="../upload/category/<?php echo $fetchv['c_img'];?>"  height='50px' width='50px'/>
                    </div>
					<div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
						<select name="ctype" class="form-control">
							
							<?php 
								if($fetchv['c_type'] == 'feature product'){
							?>
							
							<option value="feature product" selected>feature product</option>
							<option value="new arivels">new arivels</option>
							<option value="shop product">shop product</option>
							<option value="accessories">Accessories</option>
							<option value="recommended">Recommended</option>
							
							<?php 
								}
								else if($fetchv['c_type'] == 'new arivels'){
									?>
							
							<option value="feature product" >feature product</option>
							<option value="new arivels" selected>new arivels</option>
							<option value="shop product">shop product</option>
							
							<?php } else { ?>
								
								<option value="feature product" >feature product</option>
								<option value="new arivels">new arivels</option>
								<option value="shop product" selected>shop product</option>
								
							<?php } ?>
						</select>
                    </div>
					
					
					
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
						<select name="cstatus" class="form-control">
							
							<?php 
								if($fetchv['c_status'] == 'Active'){
							?>
							
							<option value="Active" selected>Active</option>
							<option value="Deactive">Deactive</option>
							
							<?php } else { ?>
							
							<option value="Active">Active</option>
							<option value="Deactive" selected>Deactive</option>
								
							<?php } ?>
						</select>
                    </div>
                    
                    <input type="submit" value="Update" name="editcategory" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
	</div>
	
	
	<?php
		if(isset($_REQUEST['editcategory']))
		{
			$name = $_REQUEST['cname'];
			$status = $_REQUEST['cstatus'];
			
			$old_img = $_REQUEST['old_img'];
			
			$img = $_FILES["cimg"]["name"];
			
			$type = $_REQUEST['ctype'];
			
			
			if(strlen($img) > 0)
			{
			   $img = date("ymdHis").$_FILES["cimg"]["name"];
			
				move_uploaded_file($_FILES["cimg"]["tmp_name"],"../upload/category/".$img);
				
				$old_img = $img;	
			}
			
			 
			
			date_default_timezone_set("Asia/Kolkata");
			$udate = date("Y-m-d H:i:s");
			
			$upd = "update category_tb set c_name='$name',c_img='$old_img',c_status='$status',c_udate='$udate',c_type = '$type' where c_id = '$catid'";
			
			if($con->query($upd)){
				header("location:category.php");
			}else{
				echo "<script>alert('Something went Wrong!');</script>";
			}
			
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
