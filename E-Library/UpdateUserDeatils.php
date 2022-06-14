<?php
session_start();
require_once('phhp.php');
if($_POST['submitregisterAdmin']){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql1="select name from admin where name='$username'";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $sql="UPDATE admin SET email='$email' , password='$password', fullname='$fullname'
            WHERE name='$username' ";
            if(mysqli_query($conn,$sql)){
                header("Location: admin.php");
            }
        }
    }
    else {
        echo"<p> ERROR: username doesn't exist </p> " ;
    }   
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/UpdateUserDetails.css">
    <style type="text/css">
        p{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 37%;
            top: 24%;
            background-color: black;
        }
    </style>
    <title>Update User Details</title>
</head>
<body>
    <form action="" method="post" id="UpdateUserForm" onsubmit="return check(this)">
    <h1 id="regParg">Update User Details</h1>
    <br>
    <label for="fullname" class="formElement">Full Name:</label>
        <input type="text" name="fullname" required>
        <br><br>
        <label for="username" class="formElement">User Name:</label>
        <input type="text" name="username" required>
        <br><br>
        <label for="email" class="formElement">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password" class="formElement">New Password: </label>
        <input type="password" name="password" required>
        <br><br>
        <label for="password2" class="formElement">Confirm new password: </label>
        <input type="password" name="password2" required> 
        
        <br>
        <br>
        <input type="submit" value="Confirm" id="ConfirmButton" name="submitregisterAdmin">
        <br><br>
        <a href="admin.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
 
        <script src="js/index.js"></script> 
    </form>
</body>
</html>
