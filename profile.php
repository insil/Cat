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
	<body>
	
	<?php include 'navigation.php';?>

<!-- upload file script-->		
<?php
	$img_target_dir = "uploads/img/"; //puts stuff in uploads
	$target_file2 = $img_target_dir. basename($_FILES["imgfile"]["name"]); //img file
	$uploadOk = 1;

	$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
	
	// Allow certain file formats for images (png)
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		if($imageFileType != "png" ) {
			echo "Sorry, only PNG.";
			$uploadOk = 0;
		}
		else{
			$check = getimagesize($_FILES["imgfile"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		if ($uploadOk == 0) { //uploads stuffs to folder
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["imgfile"]["name"], $img_target_dir) {
				//rename("tmp_name","lab2_upload");
				echo "<br>";
				echo "The file ". basename( $_FILES["imgfile"]["name"]). " has been uploaded.";				
				//chmod("uploads/img/lab2_upload.png",0777); //changes permission of image
				//echo '<img src= "uploads/img/lab2_upload.png" height="300" width="300">'; //prints image
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

	}
	
?>
		
    <!-- FORM FOR PHP UPLOAD -->		
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
		
					<h1> Welcome "name"</h1>
					
				<!-- Update information, to be completed --> 	
					<h5> Change your email? </h5>
					<h5> Change your password?</h5>
					
					
					
					
					
					
					
				<!-- Upload image-->	
					<h2> Image Upload </h2>
					<h4> Ensure that the file upload is a PNG file!</h4>
					
					
					<form action="profile.php" method="post" enctype="multipart/form-data">

						<div><h2>Upload a PNG file: </h2><input type="file" name="imgfile" id="imgfile">
							<br>
							<input type="submit" value="Upload" name="submit">
						</div>

					
					</form>
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