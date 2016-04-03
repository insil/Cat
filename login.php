<?php
session_start(); // Starting Session
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
	$error = "Email or Password is invalid!";
	}
	else
	{
	$email=$_POST['email'];
	$psword=$_POST['password'];
	require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	$query = mysqli_query($link, "select * from newacc where `password`='$psword' AND `email`='$email'");
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
	$_SESSION['login_user']=$email; // Initializing Session
	header("location: profile.php"); // Redirecting To Other Page
	} else {
	$error = "Username or Password is invalid";
	}
	mysqli_close($link); // Closing Connection
	}
	}
?>