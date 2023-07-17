
<?php require_once 'process.php'; ?>
<?php $con = new mysqli("localhost","root","","post"); ?>
<?php  if(isset($_SESSION['message'])): ?>
<?php endif ?> 
 
<?php
    ob_start();
    require('function.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-dark bg-dark text-center">
    <span class="navbar-brand mb-0 h1 text-center">pending-orders</span>
	<div class="row" text-align="right">
                        <a href="logout.php"> Logout</a>
	</div>

</nav>
    
                </form>
            </div>
            <div class="col-md-12">
                <h2 class="text-center">orders</h2>
                <hr>
                <br><br>

                <?php 
                    
                    $result = mysqli_query($con, "SELECT * FROM post");
                ?>
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>number</th>
                                <th>Shippingaddress</th>
                                <th>Product Name</th>
                                <th>Product Price</th>

                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php 
                            while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['Shippingaddress']; ?></td>
                                <td><?php echo $row['p_name']; ?></td>
                                <td><?php echo $row['p_offerprice']; ?></td>

                                <td>
                                    
                                    <a href="process.php?delete=<?php echo $row['id']; ?>"  class="btn btn-danger">Placed</a>
                                </td>
                            </tr>
                            

                        <?php endwhile ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>