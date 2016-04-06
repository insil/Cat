<?php
session_start(); // Starting Session
require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	$user = $_SESSION['login_user'];
	$query = mysqli_query($link, "SELECT idUsers FROM Users WHERE user = '$user'");
	$row=mysqli_fetch_array($query);
	$userID=$row['idUsers'];
?>

<html>
    <head>
        <title>SUPER AWESOME CAT PHOTOS</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Project, INFX2670">
		<meta name="author" content="Negin Sauermann & Richard Sage">
		
		<!-- Bootstrap/CSS Import FrontEnd Framework -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	
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
	
	<h1> Welcome, <?php 
	echo $_SESSION['login_user']; ?> !</h1>
	
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h5>Site Statistics: </h5>
					<?php
					$query = "SELECT COUNT(idUsers) FROM Users";
					$query2 = "SELECT COUNT(idImages) FROM Images";
					$userRows = mysqli_query($link, $query);
					$imageRows = mysqli_query($link, $query2);
					$numUsers = mysqli_fetch_row($userRows);
					$numImages = mysqli_fetch_row($imageRows);
					echo "Number of users: " . $numUsers[0] . "<br>";
					echo "Number of images: " . $numImages[0] . "<br>";
					?>				
				</div>
			</div>
		</div>
	</section>

		<!-- scripts from Creative -->
		 <!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Plugin JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/wow.min.js"></script>
		<!-- Custom Theme JavaScript -->
		<script src="js/creative.js"></script>
	</body>
</html>