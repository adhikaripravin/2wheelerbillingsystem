<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $bike_model = $_POST['bike_model'];
    $parts = $_POST['parts'];
    $message = $_POST['message'];
    
    if(!empty($id) && !empty($name) && !empty($phone) && !empty($bike_model) && !empty($parts) && !empty($message)){
    $query = "UPDATE enquiry SET name = '$name', phone = '$phone', bike_model = '$bike_model', parts = '$parts', message = '$message' WHERE id = '$id'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/adminenquiry.php?error=2");
    }
    else{
        header("location:../admin/adminenquiry.php?error=1");
    }
    //remove this if you want
}
else{
    header("location:../admin/adminenquiry.php?error=2");
}
//--------------------------------------------------------//
    
}
else
{
    die ('error');
}

?>