<?
$nameErr = $phoneErr = $bikemodelErr = $partsErr = $messageErr = "";
$name = $phone = $bikemodel =$parts =$messageErr = "";

?>
<?php
    require "../connection/connection.php";
    if(isset($_POST['send'])){
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $bike_model = $_POST['bike_model'];
        $parts = $_POST['parts'];
        $message = $_POST['message'];
        if(!empty($name) && !empty($phone) && !empty($email) && !empty($bike_model) && !empty($parts) && !empty($message)){
            //$date = date("Y-m-d");
            $query = "INSERT INTO enquiry (name,phone,email,bike_model,parts,message) VALUES('$name','$phone','$email','$bike_model','$parts','$message')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/contact.php?error=2");
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