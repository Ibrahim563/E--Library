<?php
require_once('phhp.php');
-------------------------------------------------------------------------------------------------
session_start();
if($_POST['submitaddbook']){
    $bookname=$_POST['bookname'];
    $bookauthor=$_POST['author'];
    $bookISBN=$_POST['isbn'];
    $bookpubyear=$_POST['pubyear'];
    $tbl_name='book'; 
    $sql="INSERT INTO $tbl_name (bookname,bookauthor,bookISBN,bookpubyear)VALUES('$bookname','$bookauthor','$bookISBN','$bookpubyear')";
    $result=mysqli_query($conn,$sql);
    if(isset($result)){
        header("Location: admin.php");
        $message = "value added ";
        echo "<script type='text/javascript'>alert('$message');</script>";
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
    <link rel="stylesheet" href="css/Add a book.css">
    <title>Add A Book</title>
</head>
<body>
    
    <form action="" method="post" id="AddABookForm">   
    <br>
    <h1 id="regParg">Add A Book</h1>
         <label for="bookname" class="formElement">Book Name:</label>
        <input type="text" name="bookname" required>
        <br><br>
        <label for="isbn" class="formElement">ISBN:</label>
        <input type="text" name="isbn" required>
        <br><br>
        <label for="author" class="formElement">Author:</label>
        <input type="text" name="author" required>
        <br><br>
        <label for="pubyear" class="formElement">Publication Year:</label>
        <input type="text" name="pubyear" required>
        <br><br>
       
        <br>
        <br>
        <input type="submit" value="Confirm" id="ConfirmButton" name="submitaddbook">
        <br><br>
        <a href="admin.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    </form>
</body>
</html>
