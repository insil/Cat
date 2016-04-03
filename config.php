<?php
# db configurations
define('DB_HOST',    'db.cs.dal.ca');
define('DB_USER',    'negin');
define('DB_PASS',    'B00667452');
define('DB_NAME',    'negin');

# db connect
function dbConnect($close=true){
  global $link;

  if (!$close) {
    mysqli_close($link);
    return true;
  }

  $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysqli_error();
  if (!mysqli_select_db(DB_NAME, $link))
    return false;
}
?>


<!--
$servername = "db.cs.dal.ca";
$username = "negin";
$db_pass = "B00667452";
$dbname = "negin";

//create
$conn = new mysqli($servername, $username, $db_pass, $dbname);
//check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn, 'utf8'); -->

