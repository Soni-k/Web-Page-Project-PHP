<?php
$host="localhost";
$username="root";
$password=null;
$database="project";

$conn=new mysqli($host,$username,$password,$database);

if($conn->connect_error)
{
	die("not connected with database ". $conn->connect_error);
}

// echo "database connected";
?>