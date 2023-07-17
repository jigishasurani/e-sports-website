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
$news = '';

    if(isset($_POST['save'])){
       
        $name = $_POST['name'];
        $news = $_POST['news'];

        $query = mysqli_query($con, "INSERT INTO news (name, news) VALUE ('$name','$news')"); 
        
        $_SESSION['massage'] = "Recode has been saved !";
        $_SESSION['msg_type'] = "primary";

        header("location: admin-page-news.php?result=true");
        

    }

    //delete data

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $query = mysqli_query($con, "DELETE FROM news WHERE id=$id");
        $_SESSION['massage'] = "news has been deleted !";
        $_SESSION['msg_type'] = "danger";

        header("location: admin-page-news.php");

    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($con, "SELECT * FROM news WHERE id=$id");

      
        if( mysqli_num_rows($result) == 1){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $news = $row['news'];
        }
    
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $news = $_POST['news'];

        $query = mysqli_query($con, "UPDATE news SET news='$news' WHERE id='$id'");
        $_SESSION['massage'] = "news has been Update !";
        $_SESSION['msg_type'] = "success";
        header("location: admin-page-news.php");
    }


?>

