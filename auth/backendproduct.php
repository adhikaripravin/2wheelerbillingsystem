<?php
    require "../connection/connection.php";
    if(isset($_POST['add'])){
        $pid = $_POST['id'];
        $pname = $_POST['p_name'];
        $qty = $_POST['qty'];
        $price = $_POST['product_price'];
        $Pimage = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_des = "Uploadimage/" . $image_name;
        move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
        $added_on = $_POST['added_on'];
        if(!empty($pname) && !empty($price) && !empty($qty) && !empty($image_name)){
            $date = date("Y-m-d");
            $query = "INSERT INTO `parts` (`id`, `p_name`, `qty`, `product_price`, `Pimage`, `added_on`) VALUES ('$pid','$pname','$qty','$price','$img_des','$date')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/adminproduct.php?error=false");
            }
            else{
                header("location:../admin/adminproduct.php?error=1");
            }
        }
        else{
            header("location:../admin/adminproduct.php?error=1");
        }
    }
    else{
        die('error');
    }
?>