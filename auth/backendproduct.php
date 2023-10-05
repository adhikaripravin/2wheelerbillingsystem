<?php
    require "../connection/connection.php";
    error_reporting(0);
    if(isset($_POST['add'])){
        $pid = $_POST['id'];
        $pname = $_POST['p_name'];
        $price = $_POST['p_price'];
        $added_on = $_POST['added_on'];
        if(!empty($pname) && !empty($price)){
            $date = date("Y-m-d");
            $query = "INSERT INTO `parts` (`id`, `p_name`, `p_price`, `added_on`) VALUES ('$pid','$pname','$price','$date')";
           
              try{         
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/adminproduct.php?error=false");
            }
            else{
                header("location:../admin/adminproduct.php?error=1");
            }
        }
        catch(Exception $e) {
            header("location:../admin/adminproduct.php?error=4");
            echo 'Message: ' .$e->getMessage();
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