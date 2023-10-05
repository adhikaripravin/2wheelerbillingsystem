<?php
require "../connection/connection.php";

$pid = $_GET['id'];
$query = "SELECT * FROM parts WHERE id = '$pid'";
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
    <h1> Update Parts </h1>
    </div>
    <div class="container">
  <form action="../auth/updateproduct1.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label> 
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['id']?>" name="id" placeholder="Enter ID">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <!-- <label for="p_name">Product Name</label>  -->
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['p_name']?>" name="p_name" placeholder="Enter Parts Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <!-- <label for="product_price">Price</label> -->
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['p_price']?>" name="p_price" placeholder="Enter Price">
      </div>
    </div>
    
    
    
    <div class="row">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      <button type="submit" value="Update" name="update">Update</button>
    </div>
  </form>
</div>

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
