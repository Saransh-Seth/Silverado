<?php
session_start();

include "mail/Mail/mime.php";
$to      = $_SESSION['user']['email'];
$subject = 'Silverado : Your tickets!';
$message = 'Details of your order
';
$headers='MIME-Version: 1.0' . "rn";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "rn";
$headers = "From: Silverado@movie.com";
if(isset($_SESSION['cart'])||count($_SESSION['cart'])!=0){
			  $array=$_SESSION['cart'];
				foreach ($array as $film) {
				if (is_array($film)) {
foreach ($film as $key=>$value) {
if($key=="film"||$key=="day"||$key=="time"||$value!=0){
  $message.=$key." : ".$value."\r\n";

}

}
$message.="=============================\r\n";
} 
}
$message.="Total : $".$_SESSION['total'];

}

mail($to, $subject, $message, $headers);
$_SESSION['mail']=1;
header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php");
	die();


?> 