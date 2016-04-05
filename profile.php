<?php
session_start(); // Starting Session
require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	//$query = mysqli_query(
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
	

<!-- upload file script-->		
<?php

	if(!file_exists ("uploads/".$_SESSION['login_user'])){ //making the user directory
		mkdir("uploads/".$_SESSION['login_user'], 0777, true);		
	}
	
	// Allow certain file formats for images (png)
	// Check if image file is a actual image or fake image
	if(isset($_POST['submit'])) {
		$img_target_dir = "uploads/".$_SESSION['login_user']; //puts stuff in uploads
		$target_file2 = $img_target_dir. basename($_FILES["imgfile"]["name"]); //img file
		echo $_FILES["imgfile"]["name"];
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
		if($imageFileType == "png") {
			$check = getimagesize($_FILES["imgfile"]["tmp_name"]);
			echo $img_target_dir . "/" . $_FILES["imgfile"]["name"];
			if($check != false) {
				if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $img_target_dir . "/" . $_FILES["imgfile"]["name"])) {
					//chmod("uploads/img/lab2_upload.png",0777);
					//echo "Image file size: ";
					//echo filesize("uploads/img/lab2_upload.png") . "<br>";
					//echo '<img src= "uploads/img/lab2_upload.png" height="300" width="300">';
				}
				else {
					echo "file was not uploaded";
				}
			}
			else {
				echo "error uploading image";
			}
		}
		else {
			echo "File not png<br>";
		}

	}
	
?>
		
    <!-- FORM FOR PHP UPLOAD -->		
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">

				<!-- Upload image-->	
					<h2> Image Upload </h2>
					<h4> Ensure that the file upload is a PNG file!</h4>
					
					
					<form action="profile.php" method="post" enctype="multipart/form-data">

						<div><h2>Upload a PNG file: </h2>
						<input class="btn btn-default btn-xl wow tada" id="imgfile" type="file" name="imgfile" value="imgfile">
							<br>
							<input class="btn btn-default btn-xl wow tada" id="Upload" type="submit" name="submit" value="Upload">
						</div>
	
					</form>
				</div>
			</div>
		</div>
		
 <!-- Source http://www.9lessons.info/2009/08/vote-with-jquery-ajax-and-php.html-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
				libs/jquery/1.3.0/jquery.min.js"></script>
				<script type="text/javascript">
				$(function() {
				$(".vote").click(function() 
				{
					var id = $(this).attr("id");
					var name = $(this).attr("name");
					var dataString = 'id='+ id ;
					var parent = $(this);
					//document.write(dataString);
					if (name=='up')
					{
						$(this).fadeIn(200).html('<img src="dot.gif" />');
						$.ajax({
						type: "POST",
						url: "up_vote.php",
						data: dataString, 
						cache: false,

						success: function(html)
				{
					parent.html(html);
				} 
				});
				}
				return false;
					});
					});
				</script>
				<h1> Voting: </h1>

				<?php
				$sql=mysqli_query($link, "SELECT idImages, filepath, votes, userId FROM Images LIMIT 100");
				while($row=mysqli_fetch_array($sql))
				{
					$votes=$row['votes'];
					$fpath=$row['filepath'];
					$idImages=$row['idImages'];
					$userId=$row['userId'];
				?>
				<div class="main"> 
				<div class="box1">
				<div class='up'>
				<a href="" class="vote" id="<?php echo $idImages; ?>" name="up">
				<?php echo $votes; ?></a></div>

				<div class='box2' ><?php echo "<img src=" . $fpath . ">";?>
				</div>

<?php } ?>
		
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