<?php
$servername="localhost";
$username="root";
$password="root";
$database="university_liberary_management";
$conn = mysqli_connect($servername, $username, $password,$database,'3306');
    if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
