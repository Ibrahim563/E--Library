<?php
session_start();
require_once('phhp.php');
$sql="select bookname from book";
$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table id='browsingTable'>";
        while($row = mysqli_fetch_assoc($result)) {
            
            echo"<tr>";
                echo"<td>Book Name:</td>";
                echo"<td>" . $row['bookname']."</td>";
            echo"</tr>";
        }
        echo"</table>";
    }
    else {
        echo "no books found in the library";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
table {
    border: 3px solid #1f4068;
    position: absolute;
    top: 10%;
    left: 39.6%;
    background-color: black;
    font: bold;
    color: #f40552;
    font-size: 25px;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Browse Books.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post" id="BrowseBooksForm">   
    <br>
        
        <a href="Admin.php"> <input type="button" value="Return to main menu" id="ConfirmButton" name="returnHome"></a>
        <br><br>
        
    </form>
</body>
</html>
