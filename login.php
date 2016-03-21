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
	require('connect.php');
	$query = mysqli_query($conn, "select * from newacc where `password`='$psword' AND `email`='$email'");
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
	$_SESSION['login_user']=$email; // Initializing Session
	header("location: profile.php"); // Redirecting To Other Page
	} else {
	$error = "Username or Password is invalid";
	}
	mysqli_close($conn); // Closing Connection
	}
	}
?>