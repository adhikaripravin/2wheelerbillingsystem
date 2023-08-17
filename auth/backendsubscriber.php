<?php
require "../connection/connection.php";
if(isset($_POST['subscribe'])){
        
    $num = $_POST['num'];
    $email = $_POST['email'];

        if(!empty($email)){
        //$date = date("Y-m-d");
        $query = "INSERT INTO subscriber (email) VALUES('$email')";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:../admin/contact.php?error=false");
        }
        else{
            header("location:../admin/contact.php?error=1");
        }
    }
    else{
        header("location:../admin/contact.php?error=1");
    }
}
else{
    die('error');
}
?>
?>