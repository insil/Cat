<?php
require_once("config.php");
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Your DB connection is misconfigured. Enter the correct values and try again.');
if(isset($_SESSION['login_user'])) {
	$user = $_SESSION['login_user'];
	$query = mysqli_query($link, "SELECT role FROM Users WHERE user = '$user'");
	$row=mysqli_fetch_array($query);
	$role=$row['role'];
}
?>


<ul class="navigation">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="page-scroll" href="index.php">Main page</a>
						</li>
						<li>
							<a class="page-scroll" href="profile.php">User Account</a>
						</li>
						<li>
						<?php if(isset($user) ) {?> 
							<a class="page-scroll" href="voteview.php">Vote</a> <!-- add php stuff -->
						<?php } ?>
						</li>
						<li>
						<?php if(isset($role) && $role == 1) {?> 
							<a class="page-scroll" href="admin.php">Admin Panel</a> <!-- add php stuff -->
						<?php } ?>
						</li>
						<li>
							<a class="page-scroll" href="logout.php">Sign Out</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			<!-- /.container-fluid -->
</ul>
