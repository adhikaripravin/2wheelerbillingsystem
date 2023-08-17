<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Customer Query');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Customer Query Updated');</script>";
    }
    // elseif($_GET['error'] == 'none'){
    //     echo "<script>alert('Customer Query Deleted');</script>";
    // }
    else{
        echo "<script>alert('Customer Query Deleted');</script>";
    }
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header class="header">
    <h2> Admin Dashboard </h2> 
        <!-- <a href="../admin/admindashboard.php"> Admin Dashboard </a> -->
        <!-- <div class="logout"> -->
            <!-- <a href="../admin/adminlogin.php" onclick = 'return Logout()'>Logout</a> -->
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            <!-- <li>
                <a href="../admin/admincategory.php">Category</a>
            </li> -->
            <li>
                <a href="../admin/adminproduct.php">Product</a>
            </li>
            <li>
                <a href="">Enquiry</a>
            </li>
            <li>
                <a href="../admin/invoice.php">Invoice</a>
            </li>
            <li>
                <a href="../admin/adminreport.php">Sell Report</a>
            </li>
            <li>
                <a href="../admin/inventory.php">Check Inventory</a>
            </li>
            <li>
                <a href="../admin/subscriber.php">Subscribers</a>
            </li>
            <br/>
            <br/><br/><br/><br/><br/><br/><br/><br/>
            <li>
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' >
            <i class="fa-solid fa-right-from-bracket" style="color: #f6f7f9;"></i>
             Logout</a>
            </li>
        </ul>
    </aside>
    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        section{
           width: 100%;
           height: 100%;
           display: flex;
           /* align-items: center; */
           /* justify-content: center; */
        }
        ul#menu{
           list-style: none;
           width: 250px;
   
        }
        ul#menu li{
           margin: 8px 0;
           position: relative;
           background-color: #2b2b2b;
           border-radius: 2px;
           overflow: hidden;
    
        }
        ul#menu li:hover::before{
           border-radius: 0 50px 50px 0;
           width: 110%;
        }
        ul#menu li:nth-child(1):before{
            background-color: #4185f3;

        }
        ul#menu li:nth-child(2):before{
            background-color: #4df341;

        }
        ul#menu li:nth-child(3):before{
            background-color: #f34141;

        }
        ul#menu li:nth-child(4):before{
            background-color: #41f3f3;

        }
        ul#menu li:nth-child(5):before{
            background-color:blue;

        }
        ul#menu li:nth-child(6):before{
            background-color: yellow;

        }
        ul#menu li:nth-child(7):before{
            background-color: red;

        }
        ul#menu li::before{
           content: ' ';
           position:absolute;
           left: 0;
           top: 0;
           bottom: 0;
           width: 5px;
           background-color: #f0f;
           transition: 0.3s all ease-in-out;
        }
        ul#menu li a{
           display: block;
           padding: 5px 20px;
           color:white;
           text-decoration: none;
           font-size: 18px;
           font-weight: 500;
           position: relative;
           z-index: 1;
        }
   </style>
</head>
<body>
    <header class="header">
        <h>Admin Dashboard</h> -->
        <!-- <a href=""> Admin Dashboard </a> -->
        <!-- <div class="logout">
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' ><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </header>
    <section>
        <ul id="menu">
            <li><a href="../admin/admindashboard.php">Dashboard</a></li>
            <li><a href="../admin/adminproduct.php">Parts</a></li>
            <li><a href="../admin/adminenquiry.php">Enquiry</a></li>
            <li><a href="../admin/invoice.php">Invoice</a></li>
            <li><a href="../admin/adminreport.php">Sell Report</a></li>
            <li><a href="../admin/inventory.php">Check Inventory</a></li>
            <li><a href="../admin/subscriber.php">Subscribers</a></li>
        </ul>
    </section> -->
    <div class="content1">
    <h1> Customer Enquiry for Parts </h1>
    </div>

    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Customer Name</th>
    <th>Phone Number</th>
    <th>Bike Model</th>
    <th>Query Parts</th>
    <th>Message</th>
    <th colspan="2">Action</th>
  </tr>

  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM enquiry";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['bike_model']."</td>";
        echo "<td>".$row['parts']."</td>";
        echo "<td>".$row['message']."</td>";
        echo "<td><a href='../auth/deleteenquiry.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "<td><a href='../auth/updateenquiry.php?id=".$row['id']."'><input type='submit' value='Update' class='update'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
<script>
//  function confirmDelete() {
//   return confirm("Are you sure want to delete this data?");
// }
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>