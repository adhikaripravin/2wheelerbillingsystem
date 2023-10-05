<?
$nameErr = $phoneErr = $bikemodelErr = $partsErr = $messageErr = "";
$name = $phone = $bikemodel =$parts =$messageErr = "";
?>
<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Field');</script>";
    }
    elseif($_GET['error'] == 2){
      echo "<script>alert('Your Query has been send. Respective memeber will contact you within 10 minutes..');</script>";
    }
    else{
        echo "<script>alert('Your Query has been Send');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" href="../admin/global.css">
    <style>
            .containerrr{
    width: 85%;
    background: #fff;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    justify-content: center;
    margin-left: 4em;
    }
    .containerrr .contentss{
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .containerrr .contentss .left-side{
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
    }
    .contentss .left-side::before{
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
    }
    .contentss .left-side .details{
    margin: 14px;
    text-align: center;
    }
    .contentss .left-side .details i{
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
    }
    .contentss .left-side .details .topic{
    font-size: 18px;
    font-weight: 500;
    }
    .contentss .left-side .details .text-one,
    .contentss .left-side .details .text-two{
    font-size: 14px;
    color: #afafb6;
    }
    .containerrr .contentss .right-side{
    width: 75%;
    margin-left: 75px;
    }
    .contentss .right-side .topic-text{
    font-size: 23px;
    font-weight: 600;
    color: #3e2093;
    }
    .right-side .input-box{
    height: 50px;
    width: 100%;
    margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
    }
    .right-side .message-box{
    min-height: 110px;
    }
    .right-side .input-box textarea{
    padding-top: 6px;
    }
    .right-side .button{
    display: inline-block;
    margin-top: 12px;
    }
    .right-side .button input[type="submit"]{
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #3e2093;
    cursor: pointer;
    transition: all 0.3s ease;
    }
    .button input[type="submit"]:hover{
    background: #5029bc;
    }
    @media (max-width: 950px) {
    .containerrr{
        width: 90%;
        padding: 30px 40px 40px 35px ;
    }
    .containerrr .contentss .right-side{
    width: 75%;
    margin-left: 55px;
    }
    }
    @media (max-width: 820px) {
    .containerrr{
        margin: 40px 0;
        height: 100%;
    }
    .containerrr .contentss{
        flex-direction: column-reverse;
    }
    .containerrr .contentss .left-side{
    width: 100%;
    flex-direction: row;
    margin-top: 40px;
    justify-content: center;
    flex-wrap: wrap;
    }
    .containerrr .contentss .left-side::before{
    display: none;
    }
    .containerrr .contentss .right-side{
    width: 100%;
    margin-left: 0;
    }
    }
</style>
</head>
<body>
<div class="head">
        <div class="logo">
            <img src="Uploadimage/logo.png">
        </div>
        <a href="../admin/adminlogin.php"><div class="user">
        <i class="fa-solid fa-user"></i>
        <h3 style="margin-top:13px;">Login</h3>
        </div></a>
        
    </div>
    

<nav>
        <ul class="menu nav-menu">
            <li><a href="index.php">Home</a></li>
            <li>
            <li><a href="parts.php">Parts</a></li>
            </li>
            <!-- <li><a href="parts.php">Parts</a></li> -->
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">contact us</a></li>
        </ul>
    </nav>
    <div class="containerrr">
    <div class="contentss">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Gokulpati, Kalanki</div>
          <div class="text-two">Kathmandu</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+900000000000</div>
          <div class="text-two">+900000000000</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">2wheeler6532@gmail.com</div>
          <div class="text-two">info.2wheler@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Which Bike Parts you are looking for ?</div>
        <p>If you have any work from me or any types of queries related to any bike parts, you can send me message from here. It's my pleasure to help you.</p>

        <div id="error_message"></div>
      <form onsubmit="return validation()" action="../auth/backendenquiry.php" method="POST">
        <div class="input-box">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            
        </div>
        <div class="input-box">
        <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required>
        </div>
        <div class="input-box">
        <input type="text" name="email" id="email" placeholder="Enter your Email" required>
        </div>
        <div class="input-box message-box">
        <input type="text" name="bike_model" id="bike_model" placeholder="Enter Parts of Bike Model" required>
        </div>
        <div class="input-box message-box">
        <input type="text" name="parts" id="parts" placeholder="Enter the parts you are looking for!" required>
        </div>
        <div class="input-box message-box">
        <textarea name="message" id="message" rows="10" placeholder="Message" required></textarea>
        </div>
        <div class="button">
        <input type="submit" value="Send" name="send" id="send">
        </div>
      </form>

      <script src="script.js"></script>

    </div>
    </div>
  </div>
 
   <!-- Footer--------------------------------------------------- -->
   <footer>
        <div class="contenttt">
          <div class="top">
            <div class="logo-details">
              <img src="Uploadimage/logo.png"  alt="" srcset="" style="width: 5em;height: 5em;">
              
            </div>
            <div class="media-icons">
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://www.youtube.com/?reload=9"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="boxes">
              <li class="link_name">Company</li>
              <li><a href="index.php">Home</a></li>
              <li><a href="parts.php">Parts</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
            
            <img src="https://i.gifer.com/3AfW.gif" style="width:20em; height:12em;margin-top:-3em;">
            
            <ul class="box input-box">
            <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+900000000000</div><br>
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">2wheeler6532@gmail.com</div>
          <div class="text-two">info.2wheler@gmail.com</div>
        </div>

            </ul>
          </div>
        </div>
      </footer>   
</html>
<?php
}
else{
    header("location:../admin/contact.php");
}
?>