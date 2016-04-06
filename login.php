<?php
session_start(); // Starting Session
$error=''; //initalizing errors 
if (isset($_POST['login'])) {
if (empty($_POST['user']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid!";
	}
	else
	{
	$user=$_POST['user'];
	$password=$_POST['password'];
	require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	//$query = mysqli_query($link, "select user, password from `infx2670`.`Users` where `user`='$user'");
	$stmt= mysqli_prepare($link, "Select password from `infx2670`.`Users` where `user` =?");
	mysqli_stmt_bind_param($stmt, "s", $user);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$pwd);
	mysqli_stmt_fetch($stmt);
	if ($pwd == sha1($password)) {			
			echo "help";
			$_SESSION['login_user']=$user; // Initializing Session
			header("location: profile.php"); // Redirecting To Other Page
	} else {
		$error = "Username or Password is invalid!!";
		echo $error;
	}
	mysqli_close($link); // Closing Connection
	}
}
?>

