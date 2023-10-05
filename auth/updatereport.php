<?php
require "../connection/connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM report WHERE id = '$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
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
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <li>
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' >
            <i class="fa-solid fa-right-from-bracket" style="color: #f6f7f9;"></i>
             Logout</a>
            </li>
           
        </ul>
    </aside>

    <div class="content1">
    <h1> Update Customer Bill Report </h1>
    </div>
    <?php
    require "../connection/connection.php";
    ?>
    <div class="container">
  <form action="../auth/updatereport1.php" method="POST">
  <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['id']?>" name="id">
      </div>
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['parts_name']?>" name="parts_name">
      </div>
      <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['c_name']?>" name="c_name">
      </div>
      <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['c_phone']?>" name="c_phone">
      </div>
      <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['qty']?>" name="qty">
      </div>
      <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['price']?>" name="price">
      </div>
      <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['total']?>" name="total">
      </div>
    <div class="row">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
    </div>
    
</body>
</html>


<script>

function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>