<?php
    require "../connection/connection.php";
    
    if(isset($_GET['num'])){
        $num = $_GET['num'];
        $query = "DELETE FROM subscriber WHERE num = '$num'";
        $result = mysqli_query($con,$query);
        if ($result){
            header("location:../admin/subscriber.php?error=1");
        }
    }
    else
    {
        die ('error');
    }
?>