<?php
session_start();
require_once('phhp.php');
if($_POST['submitregisterStudent']){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $tbl_name='student';
    $password=$_POST['password'];
    $sql="INSERT INTO $tbl_name (fullname,name,email,password) VALUES('$fullname','$username','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if(isset($result)){
         header("Location: index.php");
    }
    else{
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Register.css">
    <title>New User</title>
</head>
<body>
    
    <form action="" method="post" id="RegisterForm" onsubmit="return check(this)">
        <h1 id="regParg">Registeration is totally FREE !!!</h1>

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
        <label for="password" class="formElement" >Password: </label>
        <input type="password" name="password" id="pass" required>
        <br><br>
        <label for="password2" class="formElement" >Confirm Password: </label>
        <input type="password" name="password2" id="confirmpass" required> 
        <br><br>
        
        <br>
        <br>
        <input type="submit" value="Register" id="RegisterButton" name="submitregisterStudent">
        <br><br>
        <a href="index.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    
    </form>
    <script src="js/index.js"></script>
</body>
</html>
