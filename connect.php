
<?php
$servername = "db.cs.dal.ca";
$username = "negin";
$db_pass = "no";
$dbname = "negin";

//create
$conn = new mysqli($servername, $username, $db_pass, $dbname);
//check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn, 'utf8');

	//$conn->close();
	//db lab5 - table newacc
	//server 127.0.0.1
	
	
	

?>