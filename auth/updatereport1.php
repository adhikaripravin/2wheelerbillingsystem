<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $parts_name = $_POST['parts_name'];
    $c_name = $_POST['c_name'];
    $c_phone = $_POST['c_phone'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    
    if(!empty($id) && !empty($parts_name) && !empty($c_phone) && !empty($c_name) && !empty($qty) && !empty($price) && !empty($total)){
    $query = "UPDATE report SET parts_name = '$parts_name', c_name = '$c_name', c_phone = '$c_phone',qty = '$qty', price = '$price', total = '$total' WHERE id = '$id'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/adminreport.php?error=2");
    }
    else{
        header("location:../admin/adminreport.php?error=1");
    }
    //remove this if you want
}
else{
    header("location:../admin/adminreport.php?error=2");
}
//--------------------------------------------------------//
    
}
else
{
    die ('error');
}

?>