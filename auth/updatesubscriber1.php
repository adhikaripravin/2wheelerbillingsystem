<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $num = $_POST['num'];
    $email = $_POST['email'];

    $query = "UPDATE subscriber SET email = '$email' WHERE num = '$num'";
    $result=mysqli_query($con,$query);
    if ($result){ 
        header("location:../admin/subscriber.php?error=false");
    }
    else{
        header("location:../admin/subscriber.php?error=2");
    }
}
else
{
    die ('error');
}
?>