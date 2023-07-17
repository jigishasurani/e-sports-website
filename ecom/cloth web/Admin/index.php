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
            <a href="#">Dashboard</a>
        </li>
        <li>
        <a href="#">Home</a>
        </li>
    </ul>
</div>
<div class=" row">
	
	<!-- WORK SPACE AREA START -->
                
				<a class="navbar-brand" href="index.php">
                <span><font size="14px">Welcome to admin</font></span></a>
	
	
	<!-- WORK SPACE AREA END -->
	
</div>


<!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <hr>

    <footer class="row">
        <?php include_once("include/footer.php"); ?>
    </footer>

</div><!--/.fluid-container-->
</body>
</html>
<?php ob_flush(); ?>
