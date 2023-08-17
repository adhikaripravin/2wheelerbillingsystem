<?php
require "../connection/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
/*admin login*/
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
    font-family: poppins;
    text-decoration: none;
}

body{
    background-color: #f2f4f6;
}

div.login-form{
    width: 450px;
    background-color: white;
    box-shadow: 0px 0px 10px black;
    position: absolute;
    left: 450px;
    top: 100px;
}

div.login-form form{
    padding: 30px 60px;
}

div.login-form h2{
    text-align: center;
    padding: 12px 0px;
    background-color: white;
    color: black;
}

div.login-form{
    padding: 30px 60px;
}

div.login-form form div.input-field{
    display: flex;
    flex-direction: row;
    margin: 10px 0px;
}

div.login-form form div.input-field i{
    color: white;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;
}

div.login-form form div.input-field input{
    background-color: #f2f4f6;
    padding: 10px;
    border: none;
    width: 100%;
}

div.login form button{
    width: 200px;
    background-color: #5bd1d7;
    padding: 10px 0;
    border: none;
    font-size: 60px;
    font-weight: 600;
    color: white;
    margin: 0 10px;
    box-shadow: 0 0 20px;
    border-radius: 4px;
    text-align: center;
    display: inline-block;
}

div.login-form form button:hover{
    background-color: #41b6e6;
}
    /* Style the submit button */
  button[type=submit]{
    background-color: #04AA6D;
    display: inline-block;
    width: 83px;
    height: 40px;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
  }

</style>

</head>
<body>
    <div class="login-form">
        <h2>Admin Login</h2>
        <form method="POST" action="">
            <div class="input-field">
                <input type="text" placeholder="username" name="adminname">
            </div>
            <div class="input-field">
                <input type="password" placeholder="password" name="adminpassword">
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <?php

    if(isset($_POST['login']))
    {
        $query="SELECT * from `admin_login` WHERE `admin_name`='$_POST[adminname]' AND `admin_password`='$_POST[adminpassword]'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['adminloginid']=$_POST['adminname'];
            header("location:../admin/admindashboard.php");

        }
        else
        {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }

    ?>
</body>
</html>