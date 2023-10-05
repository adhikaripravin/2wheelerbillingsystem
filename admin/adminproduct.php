<?php

require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

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
    <h1> Add Parts </h1>
    </div>
    <div class="container">
      
  <form action="../auth/backendproduct.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <!-- <label for="p_name">Product Name</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="p_name" name="p_name" placeholder="Enter Parts Name">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <!-- <label for="product_price">Price</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="p_price" name="p_price" placeholder="Enter Price">
      </div>
    </div>
    
    
    <div class="row">
      <span id="errorblock" style="color:red; padding:350px;">
      <?php
    if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "Empty Parts";
    }
    elseif($_GET['error'] == 2){
        echo "Parts Updated";
    }
    elseif($_GET['error'] == 'none'){
        echo "Parts Deleted";
    }
    elseif($_GET['error'] == 4){
        echo "Already Added";
  }
    else{
        echo "Parts Added";
    }
}
?>
      </span>
      <button type="submit" value="Add" name="add" id="add">Add</button>
    </div>
  </form>
  
</div>
    
  
</div>


<table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th scope="col">ID</th>
    <th>Parts Name</th>
    <th>Price</th>
    <th>Date</th>
    <th colspan="2">Action</th>
  </tr>

  <?php
        require "../connection/connection.php";
        $date=date("Y-m-d");
        $query="SELECT * FROM parts";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
        <td>$row[id]</td>
        <td>$row[p_name]</td>
        <td>$row[p_price]</td>
        <td>$row[added_on]</td>
        <td><a href='../auth/deleteproduct.php?id=$row[id]'><input type='submit' value='Delete' class='delete'></a></td>
        <td><a href='../auth/updateproduct.php?id=$row[id]'><input type='submit' value='Update' name='update' class='update'></a></td>
        </tr>
        ";
            }
        ?>

</table>
    
</body>
</html>
<?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>
<script>
//  function confirmDelete() {
//   return confirm("Are you sure want to delete this data?");
// }
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>
