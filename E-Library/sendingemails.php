<?php
require_once('phhp.php');
session_start();
extract($_REQUEST);
if($submit){
    $sql="SELECT name , book_id FROM student WHERE name='$borrowername' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result) ) {
            if($row['book_id'] !== NULL){
            $message = "email sent";
            echo "<script type=\"text/javascript\">alert('$message');</script>";
            header("Location: admin.php");
            }else{
                echo "<p> This student doesn't have any book yet </p>";
            }
        }
        
    }
    else {
        echo "<p> please enter the right name of the borrower </p> ";
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Register.css">
    <style type="text/css">
        p{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 37%;
            top: 15%;
            background-color: black;
        }
    </style>
    <title>New User</title>
</head>
<body>
    
    <form action="" method="post" id="registerForm" onsubmit="return check(this)">
        <br>
        <label for="name" class="formElement"> Borrower name :</label>
        <input type="text" name="borrowername" required>
        <br><br>
        <input type="submit" value="search" id="RegisterButton" name="submit">
        <br><br>
        <a href="admin.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
        
    </form>
</body>
</html>
