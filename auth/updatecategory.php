<?php
require "../connection/connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM category WHERE id = '$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
?>
<!-- <!DOCTYPE html>
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
    <h2> Admin Dashboard </h2>  -->
        <!-- <a href="../admin/admindashboard.php"> Admin Dashboard </a> -->
        <!-- <div class="logout"> -->
            <!-- <a href="../admin/adminlogin.php" onclick = 'return Logout()'>Logout</a> -->
        <!-- </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li> -->
            <!-- <li>
                <a href="../admin/admincategory.php">Category</a>
            </li> -->
            <!-- <li>
                <a href="../admin/adminproduct.php">Product</a>
            </li>
            <li>
                <a href="../admin/adminenquiry.php">Enquiry</a>
            </li>
            <li>
                <a href="../admin/invoice.php">Invoice</a>
            </li>
            <li>
                <a href="../admin/adminreport.php">Sell Report</a>
            </li>
            <br/>
            <br/><br/><br/><br/><br/><br/><br/><br/>
            <li>
            <a href="../admin/adminlogin.php" class="btn btn-primary" onclick = 'return Logout()' >
            <i class="fa-solid fa-right-from-bracket" style="color: #f6f7f9;"></i>
             Logout</a>
            </li>
        </ul>
    </aside> -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
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
      <h>Admin Dashboard</h>
        <a href=""> Admin Dashboard </a>
        <div class="logout">
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
    </section>
    <div class="content1">
    <h1> Update Category </h1>
    </div>
    <div class="container">
  <form action="../auth/updatecategory.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" value="<?php echo $row['id'];?>" name="id" placeholder="Enter ID">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cname">Category Name</label>
      </div>
      <div class="col-75">
        <select name="cname">
          <option value="interior">Interior Parts</option>
          <option value="exterior">Exterior Parts</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="description" value="<?php echo $row['description'];?>" name="description" placeholder="Enter description">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="type">Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="product">Product</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['cname'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    $query = "UPDATE category SET cname='$name', description='$description', type='$type' WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/admincategory.php?error=2");
    }
    else{
        header("location:../admin/admincategory.php?error=1");
    }
}
else
{
    die ('error');
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