<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gp_elab";
$rfid=$_GET['rfid'];
$access=$_GET['access'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE cards SET accStatus=$access where cardLable=$rfid ";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "error";
}

$conn->close();
?>