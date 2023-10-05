
<?php
    require "../connection/connection.php";
    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $parts_name = $_POST['parts_name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $total = $_POST['total'];
        $c_name = $_POST['c_name'];
        $c_phone = $_POST['c_phone'];
        if(!empty($c_name) && !empty($c_phone) && !empty($parts_name) && !empty($qty)){
            $date = date("Y-m-d");
            $query = "INSERT INTO `report` (`id`,`parts_name`,`qty`,`price`,`total`,`c_name`,`c_phone`,`added_on`) VALUES('','$parts_name','$qty','$price','$total','$c_name','$c_phone','$date')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/invoice.php?error=false");
            }
            else{
                header("location:../admin/invoice.php?error=1");
            }
    }
    else{
        header("location:../admin/invoice.php?error=1");
    }
}
    else{
        die('error');
    }
// }
?>