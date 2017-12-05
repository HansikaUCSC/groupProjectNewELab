<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gp_elab";
$time=$_GET['time'];
$date=$_GET['date'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
	//echo 'done';
} 

$sql = "SELECT * FROM schedule where scheDate='$date' and startTime>=$time limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo $row[startTime].$row["endTime"].$row["scheType"];
	//echo "%";
    /*
    while($row = $result->fetch_assoc()) {
        echo "start time: " . $row["startTime"]. " - end time: " . $row["endTime"]. " - type:".$row["scheType"];
		echo "%";
    }*/
	//echo "isuru";
}
else{
	echo "nf";
}
$conn->close();
?>