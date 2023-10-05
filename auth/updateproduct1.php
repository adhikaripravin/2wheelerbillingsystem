<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $pid = $_POST['id'];
    $pname = $_POST['p_name'];
    $price = $_POST['p_price'];

    if(!empty($pname) && !empty($price)){
    $query = "UPDATE parts SET p_name = '$pname', p_price = '$price' WHERE id = '$pid'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/adminproduct.php?error=2");
    }
    else{
        header("location:../admin/adminproduct.php?error=1");
    }
    //remove this if you want
}
else{
    header("location:../admin/adminproduct.php?error=1");
}
//--------------------------------------------------------//
    
}
else
{
    die ('error');
}

?>