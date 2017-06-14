<?php
require('config.php');

session_start();// Starting Session
// Storing Session :D
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select `email` from newacc where `email`='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
	mysqli_close($conn); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
	}
?>
