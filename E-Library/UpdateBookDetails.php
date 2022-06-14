<?php
session_start();
require_once('phhp.php');

if($_POST['updatebookdetails']){
    $bookname=$_POST['newBookName'];
    $bookISBN=$_POST['newISBN'];
    $bookauthor=$_POST['newAuthor'];
    $pubyear=$_POST['newPublicationYear'];
    $sql1="select bookname from book where bookname='$bookname'";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $sql="UPDATE book SET bookauthor='$bookauthor' , bookISBN='$bookISBN' , bookpubyear='$pubyear' 
            WHERE bookname='$bookname' ";
            if(mysqli_query($conn,$sql)){
                header("Location: admin.php");
            }
        }
    }
    else {
        echo"<p> ERROR: Book name doesn't exist <p> "   ;
    }
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Update Book Details.css">
    <style type="text/css">
        p{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 37%;
            top: 18%;
            background-color: black;
        }
    </style>
    <title>Update Book Details</title>
</head>
<body>
   
    <form action="" method="post" id="AddABookForm">   
    <br>
    <h1 id="regParg">Update Book Details</h1>
         <label for="BookName" class="formElement">New Book Name:</label>
        <input type="text" name="newBookName" required>
        <br><br>
        <label for="ISBN" class="formElement">New ISBN:</label>
        <input type="text" name="newISBN" required>
        <br><br>
        <label for="Author" class="formElement">New Author:</label>
        <input type="text" name="newAuthor" required>
        <br><br>
        <label for="publicationYear" class="formElement">New Publication Year:</label>
        <input type="number" name="newPublicationYear" required>
        <br><br>
       
        <br>
        <br>
        <input type="submit" value="Confirm" id="ConfirmButton" name="updatebookdetails">
        <br><br>
        <a href="admin.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    </form>
</body>
</html>
