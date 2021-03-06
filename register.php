<!DOCTYPE html>
<html>
    <head>
        <title>SUPER AWESOME CAT PHOTOS</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Project, INFX2670">
		<meta name="author" content="Negin Sauermann & Richard Sage">
		
		<!-- Bootstrap/CSS Import FrontEnd Framework -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css"></head>
	
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

	<?php include 'navigation.php';?>



<?php
		 $userErr = $passwordErr = "";
		 $user = $password = $passwordconfirm = "";
		 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errors = array();
	
   //username
   if (empty($_POST['user'])) {
     $userErr = "Username is required!";
	 $errors[]=$userErr;
   } else {
     $user = trim($_POST['user']);

     if (!ctype_alnum($user)) { //validating so that username is only in letters and numbers
       $userErr = "Username must only be in letters and numbers!";
		$errors[]=$userErr;	   
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
     $passwordconfirm = trim($_POST['passwordconfirm']);
  
     if ($passwordconfirm!=$password) { //checks to see if they match
       $passwordconfirmErr = 'Passwords must match!';
		$errors[]=$passwordconfirmErr;	   
		echo $passwordconfirm;
		echo $password;
     }
   }

if(empty($errors)){
	echo "here";
	require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	$hash = sha1($password); //hashes password
	//$password = hash('sha256',$passcode);
	$q = "INSERT INTO `infx2670`.Users (user, password) VALUES ('$user' , '$hash' )";
	echo $q;
	$result = mysqli_query ($link, $q);
	if ($result){
		header("location: index.php");
		exit();
	}
	else{
		echo 'System Error
		<p class="error">Due to a system error registration did not complete, sorry!</p>';
		echo '<p>' . mysqli_error($link) . '<br><br>Query: ' . $q . '</p>';
		}
	mysqli_close($link);
	exit();
	}
	else{
			echo "Form is not filled in correctly! :(";
	}
} 

?>

<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">

			<!-- SIGN UP FORM -->
				<form method="post" action="register.php">
					<fieldset>
					<h1>Registration:</h1>
					<div id="container">

						<!--username-->
						<div class="form-field">
							<label for="user">Username:</label>
							<input type="text" id="user" name="user" placeholder="catlover"= value="<?php echo $user;?>">
							<span class="error">* <?php echo $userErr;?></span>
						</div>
						<!--password-->
						<div class="form-field">
							<label for="password">Password:</label>
							<input type="text" id="password" name="password" placeholder="*******" value="<?php echo $password;?>">
							<span class="error">* <?php echo $passwordErr;?></span>
						</div>
						<!--passwordconfirmation-->
						<div class="form-field">
							<label for="passwordconfirm">Confirmation password:</label>
							<input type="text" id="passwordconfirm" name="passwordconfirm" placeholder="*******" value="<?php echo $passwordconfirm;?>">
						</div>
					
					
						<!-- submit-->
						<input class="btn btn-default btn-xl wow tada" id="submit" type="submit" name="submit" value="Register">
					</div>
			</div>

		</div>
	</div>

</section>

</body>
</html>