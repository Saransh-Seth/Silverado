<?php
session_start();
$_SESSION['empty']=1;
$_SESSION['total']=0;
$_SESSION['coupon']=0;
$_SESSION['couponerror']=0;
$_SESSION['userdetails']=0;
unset($_SESSION['cart']);
header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php");
	die();

?>