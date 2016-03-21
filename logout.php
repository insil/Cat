
<?php
session_start();
if(session_destroy()) //destroys session
	{
	header("Location: index.php"); 
	}
?>