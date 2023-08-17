

<?php
        require "../connection/connection.php";
        if(isset($_POST['save'])){
         $id = $_POST['id'];
         $name = $_POST['p_name'];
         $qty = $_POST['qty'];
         $price = $_POST['product_price'];
         $total = $_POST['totalAmount'];
     
         // $query = "UPDATE product SET qty='$qty'- quantity='$qqty' WHERE id='$pid'";
         $query = "INSERT INTO `invoice` (`id`, `p_name`, `qty`, `product_price`, `totalAmount`) VALUES ('$id','$name','$qty','$price','$total')";
         $result=mysqli_query($con,$query);
         
         if ($result){
             header("location:../admin/invoice.php?error=false");
         }
         else{
             header("location:../admin/invoice.php?error=1");
         }
     }
     else
     {
         die ('error');
     }
     ?>