<?php
// print_r($_POST);

session_start();

include("../common/database.php");
if (isset($_POST['signup'])) 
{
	// echo "User Name is ".$_POST['name']."<br/>";

	// echo "User Email is ".$_POST['email']."<br/>";

	// echo "User Password is ".$_POST['password']."<br/>";

	// echo "User Address is ".$_POST['address']."<br/>";

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];

	 $user=$conn->prepare("insert into `users`(`id`,`name`,`email`,`password`,`address`)
	values(NULL,	'$name' ,'$email' ,'$password' ,'$address');
	");
	
	$result= $user->execute();

	if($result)
	{
		// echo "New user registered";
		$_SESSION["user"]=["name"=>$name,"email"=>$email];
		// signup home page project-php
		header("location: /project-php");
		// exit;
	}
	else
	{
		echo "New user not registered";
	}
}
?>