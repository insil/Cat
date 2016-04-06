<?php

require_once 'config.php';


if(isset($_GET['type'], $_GET['id'])) {
		
		$type = $_GET['type'];
		$id = (int$_GET['id'];
		
		switch($type){
			case 'article':
			$db->query("
				INSERT INTO articles_likes (user, article)
					SELECT {$_SESSION['user_id']} {$id}
					FROM articles_likes
					WHERE id = {$id})
				AND NOT EXISTS
					SELECT id FROM articles_likes
					WHERE user = {S_SESSION['user_id']}
					AND article = {$id})
				LIMIT 1
			");
			
				echo 'OK!';
			break;
		}
}

?>