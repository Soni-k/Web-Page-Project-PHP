<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website-php</title>
	<!-- client file -->
	 <?php include('./client/commonFile.php') ?>
</head>
<body>
	<!-- import client file -->
	<?php 
  session_start();
	include('./client/header.php');

	if(isset($_GET['signup']) && (!$_SESSION['user']['name']))
	{
	include('./client/signup.php');
	}
	else if(isset($_GET['login']) && (!$_SESSION['user']['name']))
	{
		include('./client/login.php');
	}
	else{
		// include('./client/signup.php');
	}
	?>
</body>
</html>