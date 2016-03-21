

<?php
include('session.php');
?>
<html>
    <head>
	<!-- could not get database working :( no proper validation-->
	    <link rel="stylesheet" type="text/css" href="lab5/main.css"/>
        <title>Lab 5</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Lab 5">
		<meta name="author" content="Negin Sauermann">
		
		<!--from startBootstrap.com-->
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		
		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="css/animate.min.css" type="text/css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/creative.css" type="text/css">
		</head>
	
    <body>

<?php
	<?php
	//set empty/errors, ref: http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html //https://www.youtube.com/watch?v=ngqeWUIDlnk phpmyacademy
		$fnameErr = $lnameErr = $emailErr = $passwordErr = $confirmpassErr = $streetnameErr = $streetnumErr = $postalErr = $dobErr = $genderErr = "";
		$fname = $lname = $email = $gender = $password = $passwordconfirm = $streetname = $streetnum = $postal = $dob = "";
		
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errors = array();
	
	//first name
   if (empty($_POST['fname'])) {
     $fnameErr = "First name is required!";
	 $errors[]=$fnameErr;
   } else {
     $fname = trim($_POST['fname']);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$fname)) { //check for name containing only letters and white space!
       $fnameErr = "Only letters and white space allowed!";
		$errors[]=$fnameErr;	   
     }
   }
   //last name
      if (empty($_POST['lname'])) {
     $lnameErr = "Last name is required!";
	 $errors[]=$lnameErr;
   } else {
     $lname = trim($_POST['lname']);
     
     if (!preg_match("/^[a-zA-Z ]*$/",$lname)) { //check for name containing only letters and white space!
       $lnameErr = "Only letters and white space allowed!";
		$errors[]=$lnameErr;	   
     }
   }
   //email
   if (empty($_POST['email'])) {
     $emailErr = "Email is required!";
	 $errors[]=$emailErr;
   } else {
     $email = trim($_POST['email']);

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //proper format
       $emailErr = "Invalid email format!";
		$errors[]=$emailErr;	   
     }
   }
   //password + confirm
   if (empty($_POST['password'])) {
     $passwordErr = "Password is required";
	 $errors[]=$passwordErr;
   } else {
    $password = trim($_POST['password']);
  }
  
  if (empty($_POST['passwordconfirm'])) {
     $passwordconfirmErr = "Passwords must match!";
	 $errors[]=$passwordconfirmErr;
   } else {
     $passwordconfirmErr = trim($_POST['passwordconfirm']);
  
     if ($passwordconfirm!=$password) { //checks to see if they match
       $passwordconfirmErr = 'Passwords must match!';
		$errors[]=$passwordconfirmErr;	   
     }
   }
     //street name
   if (empty($_POST['streetname'])) {
     $streetname = "";
   } else {
     $streetname = trim($_POST['streetname']);
     // check if street address only contains letters
     if (!preg_match("/^[a-zA-Z]*$/",$streetname)) {
       $streetnameErr = "Only letters are allowed!";
		$errors[]=$streetnameErr;
     }
   }
   //street number
   if (empty($_POST['streetnum'])) {
     $steetnum = "";
   } else {
     $streetnum = trim($_POST['streetnum']);
     //must contain only numbers
     if (!preg_match("/^[0-9]*$/",$streetnum)) {
       $steetnumErr = "Only numbers allowed";
		$errors[]=$steetnumErr;
     }
   }

   if (empty($_POST['postal'])) {
     $postal = "";
   } else {
     $postal = trim($_POST['postal']);
     // check if postal code only contains letters and numbers
     if (!preg_match("/[A-Za-z0-9]+/",$postal)) {
       $postalErr = "Only letters and numbers allowed";
		$errors[]=$postalErr;
     }
   }
   
   if (empty($_POST['dob'])) {
     $dob = "";
   } else {
     $dob = trim($_POST['dob']);
     if (!preg_match("/^[a-zA-Z]{4}, (0[1-9]|[1-2][0-9]|3[0-1]), ([0-9]{4})$/",$dob)) { //proper format
       $dobErr = "Must be in the format: MMMM, DD, YYYY";
		$errors[]=$dobErr;
     }
   }

   if (empty($_POST['gender'])) {
     $gender = "";
   } else {
     $gender = trim($_POST['gender']);
   }

if(empty($errors)){
	   require('dbconnect.php');
	$q = "INSERT INTO newacc (name, lname, email, `password`, streetname, streetnum, postal, dob, gender, timestamp)
	VALUES ('$name','$lname', '$email', '$password', '$streetname', '$streetnum', '$postal', '$dob', '$gender', NOW() )";
	$result = @mysqli_query ($conn, $q);
	if ($result){
		header("location: confirm.php");
		exit();
	}
	else{
		echo '<h2>System Error</h2>
		<p class="error">Due to a system error registration did not complete, sorry!</p>';
		echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $q . '</p>';
		}
	mysqli_close($conn);
	exit();
	}
	else{
			echo "Form is not filled in correctly! :(";
	}
} 

?>

	<header>
		<?php include 'navigation.php';?>
	</header>
	
	<h1>Update form!</h1>


	
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
    <!-- Form -->
	
    <form action="confirm.php" method="post">
		
		<label>First Name:</label>
		<input type="text" id="fname" name="fname" placeholder="Cat"/>
		
		<label>Last Name:</label>
		<input type="text" id="lname" name="lname" placeholder="Lover"/>		
	<br>
		<label>E-mail:</label>
		<input type="text" id="email" name="email" placeholder="catlover@neginfanclub.com"/>
		
		<label>Gender:</label>
			<select name="gender">
				<option value="0">Male</option>
				<option value="1">Female</option>
				<option value="2">Prefer not to Disclose</option>
			</select>
			
		<label>Password:</label>
		<input type="password" id="password" name="password" placeholder="**********"/>

		<label>Confirm Password:</label>
		<input type="password" id="confirmpassword" name="confirmpassword" placeholder="**********"/>

		<label>Street Num:</label>
		<input type="number" id="streetnum" name="streetnum" placeholder="101"/>
	
	<br>
		<label>Street Name:</label>
		<input type="text" id="streetname" name="streetname" placeholder="Cat Lane"/>

		<label>Postal Code:</label>
		<input type="text" id="postal" name="postal" placeholder="1B1 2B2"/>
	<br>
		<label>DOB:</label>
		<input type="date" id="dob" name="dob"/>



      	<a href="confirm.php" class="btn btn-default btn-xl wow tada">
			Update information!</a>

    </form>
			</div>
		</div>
		</div>
	</section>
</body>
</html>