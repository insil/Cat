<!-- using http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html -->
<?php
	include('config.php');
	# start new session
	session_start();
	dbConnect();
	if ($_SERVER['HTTP_X_REQUESTED_WITH']) {
	  if (isset($_POST['idImage']) AND isset($_POST['action'])) {
		$postId = (int) mysql_real_escape_string($_POST['idImage']);
		# check if already voted, if found voted then return
		if (isset($_SESSION['votes'][$idImage])) return;
		# connect mysql db
		

		# query into db table to know current voting score 
		$query = mysql_query("
		  SELECT Images
		  from votes
		  WHERE id = '{$idImages}' 
		  LIMIT 1" );

		# increase or dicrease voting score
		if ($data = mysql_fetch_array($query)) {
		  if ($_POST['action'] === 'up'){
			$vote = ++$data['votes'];
		  } else {
			$vote = --$data['votes'];
		  }
		  # update new voting score
		  mysql_query("
			UPDATE Images
			SET votes = '{$votes}'
			WHERE id = '{$idImages}' ");

		  # set session with image id as true
		  $_SESSION['votes'][$IdImages] = true;
		  # close db connection
		  
		}
	  }
	}
	dbConnect(false);
?>