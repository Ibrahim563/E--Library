<?php 
require_once('phhp.php');
session_start();
$name=$_SESSION['bookname'];
$author=$_SESSION['Bookauthor'];
$ISBN=$_SESSION['ISBN'];
$pubyear=$_SESSION['pubyear'];
$sql="select bookname,bookauthor,bookISBN,bookpubyear from book where bookname='$name'";
   $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<p class='p1'> Name : " . $row["bookname"]. " <br> Author : " . $row["bookauthor"]. " <br> ISBN : " . $row["bookISBN"]. "<br> Book Publication Year : " . $row["bookpubyear"]."<br> </p>";
  }
}
    else {
        echo "<p> no Records found </p>";
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
            left: 29%;
            top: 18%;
            background-color: black;
            font-size: 5em;
        }
        .p1{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 20%;
            top: 18%;
            background-color: black;
            font-size: 5em;
        }
        </style>
  <link rel="stylesheet" href="css/styles.css">

  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php 
require_once('phhp.php');
session_start();
$name=$_SESSION['bookname'];
$author=$_SESSION['Bookauthor'];
$ISBN=$_SESSION['ISBN'];
$pubyear=$_SESSION['pubyear'];
$sql="select bookname,bookauthor,bookISBN,bookpubyear from book where bookname='$name'";
   $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<p class='p1'> Name : " . $row["bookname"]. " <br> Author : " . $row["bookauthor"]. " <br> ISBN : " . $row["bookISBN"]. "<br> Book Publication Year : " . $row["bookpubyear"]."<br> </p>";
  }
}
    else {
        echo "<p> no Records found </p>";
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
            left: 29%;
            top: 18%;
            background-color: black;
            font-size: 5em;
        }
        .p1{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            position: absolute;
            left: 20%;
            top: 18%;
            background-color: black;
            font-size: 5em;
        }
        </style>
  <link rel="stylesheet" href="css/styles.css">

  <title>Document</title>
</head>
<body>
  
</body>
</html>
