<?php
    require "../connection/connection.php";
    
    if(isset($_GET['id'])){
        $pid = $_GET['id'];
        $query = "DELETE FROM parts WHERE id = '$pid'";
        $result = mysqli_query($con,$query);
        if ($result){
            header("location:../admin/adminproduct.php?error=none");
        }
    }
    else
    {
        die ('error');
    }
?>