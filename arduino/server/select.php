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

$sql = "SELECT * FROM cards where cardLable=$rfid and accStatus=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "%";
    /*// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "rfid: " . $row["rfid"]. " - access: " . $row["access"]. "<br>";
    }*/
}
else{
	echo "nf";
}
$conn->close();
?>