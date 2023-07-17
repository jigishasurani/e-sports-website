<?php
session_start();
// Create connection
$con = new mysqli("localhost","root","","post");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$total = 0;
$update = false;
$id=0;
$name = '';
$email = '';
$number = '';
$Shippingaddress = '';
$p_name = '';
$p_offerprice = '';

    if(isset($_POST['save'])){
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $Shippingaddress = $_POST['Shippingaddress'];
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_offerprice'];

        $query = mysqli_query($con, "INSERT INTO post (name, email, number, Shippingaddress, p_name, p_offerprice) VALUE ('$name', '$email', '$number', '$Shippingaddress', '$p_name', '$p_offerprice')"); 
        
        $_SESSION['massage'] = "Order has been placed!";
        $_SESSION['msg_type'] = "primary";

        header("location: shipment.php?result=true");
        

    }

    //delete data

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $query = mysqli_query($con, "DELETE FROM post WHERE id=$id");
        $_SESSION['massage'] = "order placed!";
        $_SESSION['msg_type'] = "danger";

        header("location: admin-page.php");

    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($con, "SELECT * FROM post WHERE id=$id");

      
        if( mysqli_num_rows($result) == 1){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $email = $row['email'];
            $number = $row['number'];
            $Shippingaddress = $row['Shippingaddress'];
            $p_name = $row['p_name'];
            $p_price = $row['p_offerprice'];
        }
    
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $Shippingaddress = $_POST['Shippingaddress'];
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_offerprice'];

        $query = mysqli_query($con, "UPDATE post SET name='$name', email='$email', number='$number', Shippingaddress='$Shippingaddress', p_name='$p_name', p_offerprice='$p_price' WHERE id='$id'");
        $_SESSION['massage'] = "Order has been placed!";
        $_SESSION['msg_type'] = "success";
        header("location: admin-page.php");
    }


?>

