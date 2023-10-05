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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header class="header">
    <h2> Admin Dashboard </h2> 
       
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            
            <li>
                <a href="../admin/adminproduct.php">Parts</a>
            </li>
            <li>
                <a href="../admin/adminenquiry.php">Enquiry</a>
            </li>
            <li>
                <a href="../admin/invoice.php">Invoice</a>
            </li>
            <li>
                <a href="../admin/adminreport.php">Report</a>
            </li>
            <br/>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <li>
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' >
            <i class="fa-solid fa-right-from-bracket" style="color: #f6f7f9;"></i>
             Logout</a>
            </li>
        </ul>
    </aside>
    
    <div class="content1">
    <h1> Customers Bill Report </h1>
    </div>
    <span id="errorblock" style="color:red; padding:350px;">
      <?php
    if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "Empty Bill";
    }
    elseif($_GET['error'] == 2){
        echo "Customer report Updated";
    }
    elseif($_GET['error'] == 'none'){
        echo "Customer Report Deleted";
    }
    else{
        echo "Bill Added";
    }
}
?>
      </span>

    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>Customer ID</th>
    <th>Parts Name</th>
    <th>Customer Number</th>
    <th>Customer Phone</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
    <th colspan="1">Date</th>
    <th colspan="2">Action</th>
  </tr>

  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM report";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['parts_name']."</td>";
        echo "<td>".$row['c_name']."</td>";
        echo "<td>".$row['c_phone']."</td>";
        echo "<td>".$row['qty']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "<td>".$row['added_on']."</td>";
        echo "<td><a href='../auth/deletereport.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "<td><a href='../auth/updatereport.php?id=".$row['id']."'><input type='submit' value='Update' class='update'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
<script>

function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>