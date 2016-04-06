<?php
	require_once 'config.php';
	
	$articlesQuery = $db->query("
		SELECT 
		articles.id
		articles.title,
		COUNT(articles_likes.id) AS likes
		GROUP_CONCAT(users.username SEPERATOR '|') AS liked_by
		
		FROM articles
		LEFT JOIN articles_likes
		ON articles.id = articles_likes.article
		
		GROUP by articles.id
		");
		
		while($row = $articlesQuery ->fetch_object()){
			$row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
			$articles[] = $row;
			}
			
			//echo '<pre>', print_r($articles, true), '</pre>';l
			
			
			
			//html
			<?php forsearch($articles as $article): ?>
				<div class ="article">
					<?php echo $article->title; ?>
					
					<a href="like.php?type=article&id=<?php "echo $article->id; ">Like</a>
					<?php if (!empty($article->liked_by)): ?>
						<ul> 
							<?php foreach($article->liked_by as $user): ?>
								<li><?php echo $user;></li>
							<?php endforeach; ?>
						</ul>
					<?php endif;
				</div>
				
				<p> <?php echo $article->liked; ?> votes</p>
				
				<ul>
					<li></li>
				</ul>
				<?php endforseach; ?>
?>
				