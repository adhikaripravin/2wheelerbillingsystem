<?php
    require "../connection/connection.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM report WHERE id = '$id'";
        $result = mysqli_query($con,$query);
        if ($result){
            header("location:../admin/adminreport.php?error=none");
        }
    }
    else
    {
        die ('error');
    }
?>