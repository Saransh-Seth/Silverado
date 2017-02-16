<?php
session_start();
$_SESSION['user']['name']=$_POST['name'];
print_r($_SESSION['user']['name']);
header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/index.php");
	die();

?>