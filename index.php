	<?php require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	//$query = mysqli_query(
	  //'SELECT idImages, votes
	  //FROM  Images
	  //LIMIT 0 , 15');
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

	<!-- LOGIN AND SIGN UP -->
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
		 
					<h1>Cat Image Sharing Fanclub</h1>
						<h4>Create or login to vote on your favorite cat images! =^_^= </h4>
						<form method="post" action="login.php">
							<div class="form-field">
								<label for="user">Username: </label>
								<input type="text" id="user" name="user" placeholder="catlover"/>
				
								<label>Password:</label>
								<input type="password" id="password" name="password" placeholder="******"/>
				
							<input class="btn btn-default btn-xl wow tada" id="login" type="submit" name="login" value="login">
				
							<a href="register.php" class="btn btn-default btn-xl wow tada" name="register" id="register">
								New User Registration</a>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		
	<section class="no-padding" id="portfolio">
		<h3>TOP VOTED CATS</h3>
        <div class="container-fluid">
            <div class="row no-gutter">
				<?php 
				$sql=mysqli_query($link, "SELECT idImages, filepath, votes FROM Images ORDER BY votes DESC LIMIT 6");
				$count = 0;
				while($row=mysqli_fetch_array($sql))
				{
					$votes=$row['votes'];
					$fpath=$row['filepath'];
					$idImages=$row['idImages'];
				?>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src=<?php echo $fpath; ?> class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $idImages; ?>
                                </div>
                                <div class="project-name">
                                    <?php echo $votes; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<?php } ?>
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
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		
	</body>
</html>