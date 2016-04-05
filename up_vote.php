<?php
include("config.php");
$ip=$_SERVER['REMOTE_ADDR']; 

if($_POST['IdImages'])
{
	$id=$_POST['IdImages'];
	$id = mysql_escape_String($id); //getting rid of illegal characters


	$sql = "update Images set votes=votes+1 where IdImages='$id'";
	mysql_query( $sql);

}
?>