<?php
require "../connection/connection.php";
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location:../admin/adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Parts</title>
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" href="../admin/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
.shop-section {
  display: flex;
  align-items: center;
  flex-direction: column;
  background-color: #f3f3f3;
  padding: 50px 0;
}
.shop-images {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
  max-width: 1280px;
  width: 100%;
  margin-left: 7em;
}
.shop-link {
  background-color: #fff;
  padding: 30px;
  display: flex;
  cursor: pointer;
  flex-direction: column;
  white-space: nowrap;
}
.shop-link img {
  width: 100%;
  height: 280px;
  object-fit: cover;
  margin-bottom: 10px;
}
.shop-link h3 {
  margin-bottom: 10px;
}
.shop-link a {
  display: inline-block;
  margin-top: 10px;
  font-size: 0.9rem;
  color: blue;
  font-weight: 500;
  transition: color 0.3s ease;
}
.shop-link:hover a {
  color: #c7511f;
  text-decoration: underline;
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
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">contact us</a></li>
            
        </ul>
    </nav>
    <?php
    require "../connection/connection.php";
    ?>
        
               
      <div class="shop-images">
        <div class="shop-link">
        <img src="Uploadimage/ct1.jpg" alt="" srcset="">
                    <h4>
                        <a href=""> Crossfire RM Tank </a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/ct2.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Crossfire CX Tank</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/y1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fzs 250 Back Mud Guard</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e9.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Engine</a><br>
                        <a href=""></a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e8.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Throttle Wire</a><br>
                        <a href=""></a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e6.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Clutch Plate</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e5.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha V2 clutch Plate</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e4.jpg" alt="" srcset="">
                    <h4>

                        <a href="">Crossfire CX Shock</a><br>
                        <a href=""></a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e3.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 290 Suspension</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e2.jpg" alt="" srcset="">
                    <h4>
                        <a href=""> Honda Spark Plug</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/h1.webp" alt="" srcset="">
                    <h4>

                        <a href="">Honda Shine CP Tank</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
          <img src="Uploadimage/e1.webp" alt="" srcset="">
                    <h4>
                        <a href=""> Splendor Piston</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/p1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Pulsar 220 clutch Brake</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/k1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Back Guard</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/h2.webp" alt="" srcset="">
                    <h4>
                        <a href="">Honda Shine SP Tank</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/t1.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fz v2 front</a><br>
                        <a href=""> </a>
                    </h4>
        </div>
      </div>
    </section>

        


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
</body>
</html>