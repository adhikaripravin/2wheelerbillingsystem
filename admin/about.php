<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" href="../admin/global.css">
</head>
<body>
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
        </ul>
    </nav>
<!----------------------------------------------------About us--------------------------------- -->
<section class="about-us">
      <div class="about">
        <img src="Uploadimage/logo.png" class="pic">
        <div class="text">
          <h2>About Us</h2>
          <!-- <h5>Bike Recondition &<span> Service Center</span></h5> -->
            <p>2wheeler develops premium drivetrain components for every kind of bicycle. We offer good quality bike parts to trade customers within the areas of gears, cassettes, cranks, chains and more. Our products are specified by the world’s leading bike parts manufacturers and are also used extensively in the aftermarket.
                    Alongside the catalogue range, we have also always used our R&D expertise in co-operation with OEM, to create customised products. We distinguish ourselves in the market by being the best partner and offer outstanding personal service.
                    That broad range has helped 2wheeler to become a major player in the bike industry world-wide.</p>
        </div>
      </div>
    </section>
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