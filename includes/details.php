<?php
session_start();
$_SESSION['user']['name']=$_POST['name'];
$_SESSION['user']['email']=$_POST['email'];
print_r($_SESSION['user']['name']);
$_SESSION['userdetails']=1;
header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php");
	die();

?>