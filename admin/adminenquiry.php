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
    <h1> Customer Enquiry for Parts </h1>
    </div>
    <!-- <div class="row"> -->
      <span id="errorblock" style="color:red; padding:350px;">
      <?php
    if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "Empty Enquiry";
    }
    elseif($_GET['error'] == 2){
        echo "Enquiry Updated";
    }
    elseif($_GET['error'] == 'none'){
        echo "Enquiry Deleted";
    }
    else{
        echo "Enquiry Added";
    }
}
?>
      </span>

    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Customer Name</th>
    <th>Phone Number</th>
    <th>Email</th>
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
        echo "<td>".$row['email']."</td>";
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