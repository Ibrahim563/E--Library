//  the home page for the student to do operations on book
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
    <h1 id="welcomeadmin">do your opertaions</h1>
    <br>
    <a href="borrow.php"><button type="button" class="adminbuttons1">borrow book</button></a>
    <br><br>
    <a href="returnBook.php"><button type="button" class="adminbuttons2" >return book</button></a>
    <br><br>
    <a href="extend.php"><button type="button" class="adminbuttons3">extend borrow date</button></a>
    <br>
    <a href="BrowseBooksstudent.php"> <button type="button" class="adminbuttons5" name="browsingbooks">browse book</button></a>
    <a href="student.php"><button class="adminbuttons6">Return to main menu</button> </a> 
    
</body>
</html>
