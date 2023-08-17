<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $pid = $_POST['id'];
    $pname = $_POST['p_name'];
    $qty = $_POST['qty'];
    $price = $_POST['product_price'];
    $Pimage = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
    
    if(!empty($pname) && !empty($price) && !empty($qty) && !empty($image_name)){
    $query = "UPDATE parts SET p_name = '$pname', qty = '$qty', product_price = '$price', Pimage = '$img_des' WHERE id = '$pid'";
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