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
                <!-- <ul class="menu-item">
                    <li><a href="yamaha.html">Yamaha</a></li>
                    <li><a href="honda.html">Honda</a></li>
                    <li><a href="beneli.html">Beneli</a></li>
                    <li><a href="ducati.html">Ducati</a></li>
                </ul> -->
            </li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">contact us</a></li>
            <!-- <li><a href="exterior.php">Exterior Parts</a></li> -->
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
                        <a href=""> Rs. 6100/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/ct2.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Crossfire CX Tank</a><br>
                        <a href=""> Rs. 4500/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/y1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fzs 250 Back Mud Guard</a><br>
                        <a href=""> Rs. 1600/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e9.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Engine</a><br>
                        <a href=""> Rs. 67000/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e8.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Throttle Wire</a><br>
                        <a href=""> Rs. 2000/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e6.jpg" alt="" srcset="">
                    <h4>
                        <a href="">R15 Clutch Plate</a><br>
                        <a href=""> Rs. 5500/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e5.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha V2 clutch Plate</a><br>
                        <a href=""> Rs. 4000/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e4.jpg" alt="" srcset="">
                    <h4>

                        <a href="">Crossfire CX Shock</a><br>
                        <a href=""> Rs. 13600/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e3.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 290 Suspension</a><br>
                        <a href=""> Rs. 8300/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/e2.jpg" alt="" srcset="">
                    <h4>
                        <a href=""> Honda Spark Plug</a><br>
                        <a href=""> Rs. 1000/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/h1.webp" alt="" srcset="">
                    <h4>

                        <a href="">Honda Shine CP Tank</a><br>
                        <a href=""> Rs. 2500/-</a>
                    </h4>
        </div>
        <div class="shop-link">
          <img src="Uploadimage/e1.webp" alt="" srcset="">
                    <h4>
                        <a href=""> Splendor Piston</a><br>
                        <a href=""> Rs. 7000/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/p1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">Pulsar 220 clutch Brake</a><br>
                        <a href=""> Rs. 1300/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/k1.jpg" alt="" srcset="">
                    <h4>
                        <a href="">KTM 390 Back Guard</a><br>
                        <a href=""> Rs. 4900/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/h2.webp" alt="" srcset="">
                    <h4>
                        <a href="">Honda Shine SP Tank</a><br>
                        <a href=""> Rs. 2550/-</a>
                    </h4>
        </div>
        <div class="shop-link">
        <img src="Uploadimage/t1.webp" alt="" srcset="">
                    <h4>
                        <a href="">Yamaha Fz v2 front</a><br>
                        <a href=""> Rs. 1500/-</a>
                    </h4>
        </div>
      </div>
    </section>
    <?php
        // require "../connection/connection.php";
        // //$date=date("Y-m-d");
        // $query="SELECT * FROM product";
        // $result=mysqli_query($con,$query);
        // while($row=mysqli_fetch_assoc($result)){
        // echo "
        // <td>$row[p_name]</td><br>
        // <td>$row[product_price]</td>
        // <td><img src='$row[Pimage]' height= '300px' width= '200px'></td>
        // </tr>
        // ";
        //     }
        ?>


    <!-- Footer--------------------------------------------------- -->
    <footer>
        <div class="contenttt">
          <div class="top">
            <div class="logo-details">
              <img src="Uploadimage/logo.png"  alt="" srcset="" style="width: 5em;height: 5em;">
              <!-- <span class="logo_name">Bhatbhatey Kinum</span> -->
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
            <!-- <ul class="boxes">
              <li class="link_name">Services</li>
              <li><a href="#">Bike Resale</a></li>
              <li><a href="#">Recondition</a></li>
              <li><a href="#">Service Center</a></li>
              <li><a href="#">Bike modify</a></li>
            </ul> -->
            <img src="https://i.gifer.com/3AfW.gif" style="width:20em; height:12em;margin-top:-3em;">
            <ul class="box input-box">
              
              <li class="link_name">Subscribe</li>
              <form action="../auth/backendsubscriber.php" method="POST">
              <li><input type="text" name="email" placeholder="Enter your email" required></li>
              <div class="button">
              <li><input type="submit" value="Subscribe" name="subscribe"></li>
              </div>
              </form>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">2 wheelers.</a>All rights reserved</span>
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">| Terms & condition</a>
            </span>
          </div>
        </div>
      </footer> 
</body>
</html>