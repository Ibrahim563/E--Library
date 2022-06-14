// where the student can return his book
<?php
session_start();
extract($_REQUEST);
require_once('phhp.php');
$id=$_SESSION['id'];
if($submitReturn){
    $sql="update student set book_id=NULL , returnDate=NULL where id='$id' ";
    if(mysqli_query($conn,$sql)){
        echo"book returned successfully ";
        header("Location: student.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Update Book Details.css">
    <title>Update Book Details</title>
</head>
<body>
   
    <form action="" method="post" id="AddABookForm">   
    <br>
    <h1 id="regParg">return your book</h1>

        <input type="submit" value="return book" id="ConfirmButton" name="submitReturn">
        <br><br>
        <a href="student.php"><input type="button" name="cancel" value="Return to main screen" id="CancelButton"></a>
    </form>
</body>
</html>

