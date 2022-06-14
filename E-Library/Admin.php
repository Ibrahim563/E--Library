<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/homeAdmin.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
</head>
<body>
    <h1 id="welcomeadmin">welcome Admin</h1>
    <br>
    <a href="UpdateUserDetails.php"><button type="button" class="adminbuttons1">Update user details</button></a>
    <br><br>
    <a href="Addabook.php"><button type="button" class="adminbuttons2" >Add book</button></a>
    <br><br>
    <a href="UpdateBookDetails.php"><button type="button" class="adminbuttons3">Update book details</button></a>
    <br><br>
    <a href="sendingemails.php"><button type="button" class="adminbuttons4">sending email to late borrowers</button></a>
    <br><br>
    <a href="BrowseBooksAdmin.php"> <button type="button" class="adminbuttons5" name="browsingbooks">browse book</button></a>
    <a href="index.php"><button class="adminbuttons6">log out</button> </a> 
    
</body>
</html>
