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
	<div class="row">
	<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Product</h2>

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
							?>
							<option value="<?php echo $v['c_id'];?>"><?php echo $v['c_name'];?></option>
							<?php } ?>
						</select>
                    </div>
				
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" name="pname"  class="form-control" placeholder="Enter Category Name">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="pimg"  class="form-control">
                    </div>
					
					<div class="form-group">
                        <label for="exampleInputEmail1">Actual Price</label>
                        <input type="text" name="paprice" class="form-control" placeholder="Enter Actual Price" />
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Offer Price</label>
                        <input type="text" name="poprice" class="form-control" placeholder="Enter Offer Price" />
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Descprition</label>
                        <input type="text" name="pdesc" class="form-control" placeholder="Enter product detail" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
						<select name="pstatus" class="form-control">
							<option value="Active">Active</option>
							<option value="Deactive">Deactive</option>
						</select>
                    </div>
                    
                    <input type="submit" name="addproduct" class="btn btn-success" />
                </form>

            </div>
        </div>
    </div>
	</div>
	
	<?php
		if(isset($_REQUEST['addproduct']))
		{
			$pcat= $_REQUEST['pcategory'];
			$name = $_REQUEST['pname'];
			
			$img = date("ymdHis").$_FILES["pimg"]["name"];
			
			move_uploaded_file($_FILES["pimg"]["tmp_name"],"../upload/product/".$img);
			
			
			
			$apri= $_REQUEST['paprice'];
			$opri = $_REQUEST['poprice'];
			$status = $_REQUEST['pstatus'];
			$desc=$_REQUEST['pdesc'];


			date_default_timezone_set("Asia/Kolkata");
			$cdate = date("Y-m-d H:i:s");
			$udate = date("Y-m-d H:i:s");
			
			$ins = "insert into product_tb (c_id,p_name,p_img,p_price,p_offerprice,p_desc,p_status,p_cdate,p_udate) values ('$pcat','$name','$img','$apri','$opri','$desc','$status','$cdate','$udate')";
			
			if($con->query($ins)){
				header("location:product.php");
			}else{
				echo "<script>alert('Something went Wrong!');</script>";
			}
			
		}
	?>
	
	
	 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Product</h2>

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
	<th>Product</th>
	    <th>Category</th>
	    <th>Product Name</th>
		<th>Image</th>
		<th>Actual Price</th>
		<th>Offer price</th>
		<th>Descprition</th>
        <th>Status</th>
		<th>Creat date</th>
		<th>Udate date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   
   <?php 
	  // select code
	  $sel = "select * from product_tb,category_tb where product_tb.c_id = category_tb.c_id";
	  $r = $con->query($sel);
	  foreach($r as $v)
	  {
	 ?>
    
    <tr>
	<td><?php echo $v['p_id'];?></td>
	   <td><?php echo $v['c_name'];?></td>
	    <td><?php echo $v['p_name'];?></td>
        <td><img src="../upload/product/<?php echo $v['p_img'];?>"  height='50px' width='50px'/></td>
        <td><?php echo $v['p_price'];?></td>
        <td><?php echo $v['p_offerprice'];?></td>
        <td><?php echo $v['p_desc'];?></td>
        <td class="center">
            <span class="label-success label label-<?php if($v['p_status']=="Active"){?>default<?php } else{?>danger<?php } ?>"><?php echo $v['p_status'];?></span>
        </td>

		<td class="center"><?php echo $v['p_cdate'];?></td>
        <td class="center"><?php echo $v['p_udate'];?></td>
        
		<td class="center">
            <a class="btn btn-info" href="product_edit.php?editid=<?php echo $v['p_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
			
            <a class="btn btn-danger" href="product.php?delid=<?php echo $v['p_id'];?>" onClick="return confirm('Are You Sure Want to Delete..?');" style="margin-top:3%;">
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
			$proid = $_REQUEST['delid'];
			$del = "delete from product_tb where p_id = '$proid'";
			$con->query($del);
			header("location:product.php");
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
