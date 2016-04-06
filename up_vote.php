<?php
include("config.php");
$ip=$_SERVER['REMOTE_ADDR']; 
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
if($_POST['id'])
{
	$id=$_POST['id'];
	//$id = mysql_real_escape_String($id); //getting rid of illegal characters
	//echo 

	$sql = "update Images set votes=votes+1 where IdImages='$id'";
	mysqli_query($link, $sql);

}
?>