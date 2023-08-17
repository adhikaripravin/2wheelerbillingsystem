 <?php
    require "../connection/connection.php";
    if(isset($_POST['Add'])){
        $pid = $_POST['id'];
        $pname = $_POST['p_name'];
        $qty = $_POST['qty'];
        $price = $_POST['product_price'];
        if(!empty($pname) && !empty($ptype) && !empty($price) && !empty($qty)){
            //$date = date("Y-m-d");
            $query = "UPDATE product SET qty='$qty'- quantity='$qqty' WHERE id='$pid'";
            //$query = "INSERT INTO `product` (`id`, `p_name`, `qty`, `product_price`) VALUES ('$pid','$pname','$qty','$price')";
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

?>