<?php
session_start();


$film=$_POST["film"];
$day=$_POST["day"];
$time=$_POST["time"];
$sa=$_POST["SA"];
$sp=$_POST["SP"];
$sc=$_POST["SC"];
$fa=$_POST["FA"];
$fc=$_POST["FC"];
$b1=$_POST["B1"];
$b2=$_POST["B2"];
$b3=$_POST["B3"];
$subtotal=$_POST["price"];
$cartcount=0;
if(empty($_SESSION['cart'])){
	$_SESSION['cart']=array($film.$day=>$film);
	$_SESSION['cart'][$film.$day]=array("film"=>$film,"day"=>$day,"time"=>$time,"sa"=>$sa,"sp"=>$sp,"sc"=>$sc,"fa"=>$fa,"fc"=>$fc,"b1"=>$b1,"b2"=>$b2,"b3"=>$b3,"subtotal"=>$subtotal);
	$_SESSION['total']+=$subtotal;
	$_SESSION['success']=1;
}



else{
	if(array_key_exists($film.$day,$_SESSION['cart'])){

				$_SESSION['cart'][$film.$day]['sa']+=$sa;
				$_SESSION['cart'][$film.$day]['sp']+=$sp;
				$_SESSION['cart'][$film.$day]['sc']+=$sc;
				$_SESSION['cart'][$film.$day]['fa']+=$fa;
				$_SESSION['cart'][$film.$day]['fc']+=$fc;
				$_SESSION['cart'][$film.$day]['b1']+=$b1;
				$_SESSION['cart'][$film.$day]['b2']+=$b2;
				$_SESSION['cart'][$film.$day]['b3']+=$b3;
				$_SESSION['cart'][$film.$day]['subtotal']+=$subtotal;
				$_SESSION['total']+=$subtotal;
				$_SESSION['success']=2;
			}else{
				$_SESSION['cart'][$film.$day]=$film;
				$_SESSION['cart'][$film.$day]=array("film"=>$film,"day"=>$day,"time"=>$time,"sa"=>$sa,"sp"=>$sp,"sc"=>$sc,"fa"=>$fa,"fc"=>$fc,"b1"=>$b1,"b2"=>$b2,"b3"=>$b3,"subtotal"=>$subtotal);
				$_SESSION['total']+=$subtotal;
				$_SESSION['success']=1;
}
}
	$_SESSION['empty']=0;
	header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php");
	die();
 



$cartcount=count($_SESSION['cart']);
?>