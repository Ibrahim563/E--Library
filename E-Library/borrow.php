//where the student can borrow his book
<?php
session_start();
require_once('phhp.php');
extract($_REQUEST);
$id=$_SESSION['id'];
if($submitborrow){
    $sql="SELECT book_id FROM book where bookname='$book' ";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    $book_id=$row['book_id'];
    $sql1="Select book_id FROM student where book_id='$book_id' ";
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        echo "<p> the book is already Borrowed </p> ";
    }
    else{
        $sql2="UPDATE student SET book_id='$book_id' , returnDate='$returnDate'   WHERE id='$id' ";
        if(mysqli_query($conn,$sql2)){
            echo "<p> you borrowed the book successfully </p>";
        }
    }
}
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    p{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 37%;
            top: 18%;
            background-color: black;
        }
        </style>
    <link rel="stylesheet" href="css/Update Book Details.css">
    <title>Update Book Details</title>
</head>
<body>
   
    <form action="" method="post" id="AddABookForm">   
    <br>
    <h1 id="regParg">borrow your book</h1>
         <label for="BookName" class="formElement">Book Name: </label>
        <input type="text" name="book" required>
        
        <br>
        <br>

        <label for="returnDate" class="formElement">Return Date: </label>
        <input type="text" name="returnDate" required>
        <br><br>

        <input type="submit" value="Confirm" id="ConfirmButton" name="submitborrow">
        <br><br>
        <a href="student.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    </form>
</body>
</html>
