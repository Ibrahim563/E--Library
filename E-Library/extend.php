// where the student can extend his borrow date
<?php
session_start();
extract($_REQUEST);
require_once('phhp.php');
$id=$_SESSION['id'];

if($extendReturn){
    $sql="update student set ReturnDate='$returnDate' where id='$id' ";
    $sql1="select book_id from student where id = '$id' ";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);
    if($row['book_id'] !== NULL){
        if(mysqli_query($conn,$sql)){
            echo"borrowing period extended successfully";
            header("Location: student.php");
        }
    }else{
        echo "<p> You don't have a book yet </p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="css/Update Book Details.css">
    <title>Update Book Details</title>
</head>
<body>
   
    <form action="" method="post" id="AddABookForm">   
    <br>
    <h1 id="regParg">extend borrowing book</h1>
         <label for="BookName" class="formElement">New Return Date :</label>
        <input type="text" name="returnDate" required>
        <br><br>
        <input type="submit" value="extend period" id="ConfirmButton" name="extendReturn">
        <br><br>
        <a href="student.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    </form>
</body>
</html>
