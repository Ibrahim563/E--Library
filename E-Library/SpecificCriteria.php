// which the student can search for a specific book
<?php
require_once('phhp.php');
session_start();
extract($_REQUEST);
if(isset($submitSearch)){
$_SESSION['bookname']=$Bookname;
$_SESSION['Bookauthor']=$Bookauthor;
$_SESSION['ISBN']=$ISBN;
$_SESSION['pubyear']=$pubyear;
header("Location: search.php");   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Add a book.css">
    <title>New User</title>
</head>
<body>
    
    <form action="" method="post" id="AddABookForm" >
        <br>
        <label for="Bookname" class="formElement"> Book Name :</label>
        <input type="text" name="Bookname" required>
        <br><br>
        <label for="Book Author" class="formElement"> Book Author :</label>
        <input type="text" name="Bookauthor" required>
        <br><br>
        <label for="Book ISBN" class="formElement">Book ISBN : </label>
        <input type="text" name="ISBN" required>
        <br><br>
        <label for="BOOK Pub Year" class="formElement">Book Publication Year :</label>
        <input type="number" name="pubyear" required>
        <br><br>
        <br>
        <br>
        <input type="submit" value="search" id="ConfirmButton" name="submitSearch">
        <br><br>
        <a href="student.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
        
    </form>
</body>
</html>
