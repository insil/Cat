<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['psword'])) {
$error = "Email or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['email'];
$psword=$_POST['psword'];
require('dbconnect.php');
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn, "select * from MyGuests where `password`='$psword' AND `email`='$email'");
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