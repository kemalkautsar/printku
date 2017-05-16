<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "printku";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//selecting table
$sql = "SELECT * FROM myprint";
$result = mysqli_query($conn, $sql);

$p_date = $_POST['print_date'];
$p_file = $_POST['print_file'];
$p_pickup = $_POST['print_pickup'];

$p_date = mysql_real_escape_string($p_date);
$p_file = mysql_real_escape_string($p_file);
$p_pickup = mysql_real_escape_string($p_pickup);

$query = "
INSERT INTO `printku`.`myprint` (`print_id`, `print_date`, `print_file`, `print_status`, `print_pickup`) VALUES (NULL, '$p_date', '$p_file', '1', '$p_pickup');
";

mysql_query($query);

if(mysqli_query($conn, $query)){
    echo "Records added successfully. <a>Back to Control Panel</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysql_close($conn);

?>