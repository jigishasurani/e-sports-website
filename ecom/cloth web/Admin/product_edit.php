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
            <a href="#">Product</a>
        </li>
    </ul>
</div>

	
	<!-- WORK SPACE AREA START -->
	
	<?php
		if(isset($_REQUEST['editid'])){
			
			$proid = $_REQUEST['editid'];
			
			$pro_sel = "select * from product_tb where p_id = '$proid'";
			$fetch = $con->query($pro_sel);
			foreach($fetch as $fetchv);
			
		}else{
			header("location:product.php");
		}
	?>
	
	<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Product</h2>

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
                        <label for="exampleInputPassword1">Category</label>
						<select name="pcategory" class="form-control">
							<?php
							//query
							$sel_cat = "select * from category_tb where c_status  = 'Active'";
							// query exe
							$result = $con->query($sel_cat);
							// array to single value
							foreach($result as $v)
							{
								if($v['c_id'] == $fetchv['c_id']){
							?>
							<option value="<?php echo $v['c_id'];?>" selected ><?php echo $v['c_name'];?></option>
							<?php } else { ?>
							<option value="<?php echo $v['c_id'];?>" ><?php echo $v['c_name'];?></option>
							<?php } ?>
							
							<?php } ?>
						</select>
                    </div>
				
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" value="<?php echo $fetchv['p_name']; ?>" name="pname"  class="form-control" placeholder="Enter Category Name">
                    </div>
					<input type="hidden" name="old_img" value="<?php echo $fetchv['p_img'];?>" />
					<div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="pimg"  class="form-control">
						<img src="../upload/product/<?php echo $fetchv['p_img'];?>"  height='50px' width='50px'/>
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Actual Price</label>
                        <input type="text" value="<?php echo $fetchv['p_price']; ?>" name="paprice" class="form-control" placeholder="Enter Actual Price" />
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Offer Price</label>
                        <input type="text" value="<?php echo $fetchv['p_offerprice']; ?>" name="poprice" class="form-control" placeholder="Enter Offer Price" />
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Descprition</label>
                        <input type="text" value="<?php echo $fetchv['p_desc']; ?>" name="pdesc" class="form-control" placeholder="Enter product detail" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
						<select name="pstatus" class="form-control">
							<?php 
								if($fetchv['p_status'] == 'Active'){
							?>
							
							<option value="Active" selected>Active</option>
							<option value="Deactive">Deactive</option>
							
							<?php } else { ?>
							
							<option value="Active">Active</option>
							<option value="Deactive" selected>Deactive</option>
								
							<?php } ?>
						</select>
                    </div>
                    
                    <input type="submit" value="update" name="editproduct" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
	</div>
	
	<?php
		if(isset($_REQUEST['editproduct']))
		{
			$pcat= $_REQUEST['pcategory'];
			$name = $_REQUEST['pname'];
			
			$old_img = $_REQUEST['old_img'];
			
			$img = $_FILES["pimg"]["name"];
			
			if(strlen($img) > 0)
			{
				
				$img = date("ymdHis").$_FILES["pimg"]["name"];
				move_uploaded_file($_FILES["pimg"]["tmp_name"],"../upload/product/".$img);
				
				$old_img = $img;	
			}
			
		
			
			
			$apri= $_REQUEST['paprice'];
			$opri = $_REQUEST['poprice'];
			$status = $_REQUEST['pstatus'];
			$desc=$_REQUEST['pdesc'];
			
			date_default_timezone_set("Asia/Kolkata");
			$udate = date("Y-m-d H:i:s");
			
			$upd = "update  product_tb set c_id='$pcat',p_name='$name',p_img='$old_img',p_price='$apri',p_offerprice='$opri',p_desc='$desc',p_status='$status',p_udate='$udate' where p_id = '$proid'";
			
			if($con->query($upd)){
				header("location:product.php");
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
