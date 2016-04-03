	<?php require_once('config.php');
	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
	$query = mysqli_query(
	  'SELECT idImages, votes
	  FROM  Images
	  LIMIT 0 , 15');
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
		 
					<h1>Cat Image Sharing Fanclub (logo here)</h1>
						Create or login to vote on your favorite cat images! =^_^=
						<form method="post">
									<div class="form-field">
								<label for="email">Email: </label>
								<input type="text" id="email" name="email" placeholder="catlover@awesomecats.com"/>
				
								<label>Password:</label>
								<input type="password" id="password" name="password" placeholder="******"/>
				
						<a href="login.php" class="btn btn-default btn-xl wow tada" id="login" name="login">
							Login</a>
				
							<a href="register.php" class="btn btn-default btn-xl wow tada" name="register" id="register">
								New User Registration</a>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		
	<section class="no-padding" id="portfolio">
					<h3> Cats of the Month of March </h3>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Cutie Short Hair Cat "Bi" uploaded by User2
                                </div>
                                <div class="project-name">
                                    Votes: 1011101901
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Tiny kitty Jiro uploaded by User1
                                </div>
                                <div class="project-name">
                                    Votes: 101010
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Jiro HotDog Cat uploaded by User1
                                </div>
                                <div class="project-name">
                                    Votes: 10111
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Nomi's little feet uploaded by User3
                                </div>
                                <div class="project-name">
                                    Votes: 1101
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Black Short Hair Jiji featuring Resseti 
									Uploaded by User4
                                </div>
                                <div class="project-name">
                                    Votes: 101
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Jiro's Box 
									Uploaded by User1
                                </div>
                                <div class="project-name">
                                    Votes: 11
                                </div>
                            </div>
                        </div>
                    </a>
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
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
	<!-- JQuery voting script, retrieved from: http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html -->
		<script>
		$(document).ready(function(){
		  // ajax setup
		  $.ajaxSetup({
			url: 'ajaxvote.php',
			type: 'POST',
			cache: 'false'
		  });

		  // any voting button (up/down) clicked event
		  $('.vote').click(function(){
			var self = $(this); // cache $this
			var action = self.data('action'); // grab action data up/down 
			var parent = self.parent().parent(); // grab grand parent .item
			var postid = parent.data('postid'); // grab post id from data-postid
			var score = parent.data('score'); // grab score form data-score

			// only works where is no disabled class
			if (!parent.hasClass('.disabled')) {
			  // vote up action
			  if (action == 'up') {
				// increase vote score and color to orange
				parent.find('.vote-score').html(++score).css({'color':'orange'});
				// change vote up button color to orange
				self.css({'color':'orange'});
				// send ajax request with post id & action
				$.ajax({data: {'postid' : postid, 'action' : 'up'}});
			  }
			  // voting down action
			  else if (action == 'down'){
				// decrease vote score and color to red
				parent.find('.vote-score').html(--score).css({'color':'red'});
				// change vote up button color to red
				self.css({'color':'red'});
				// send ajax request
				$.ajax({data: {'postid' : postid, 'action' : 'down'}});
			  };

			  // add disabled class with .item
			  parent.addClass('.disabled');
			};
		  });
		});
		</script>
		
	</body>
</html>