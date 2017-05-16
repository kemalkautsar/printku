<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "printku";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//selecting table
$sql = "SELECT * FROM myprint";
$result = mysqli_query($conn, $sql);

?>