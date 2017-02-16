<?php
session_start();
$array=$_POST['coupon'];
$array1=explode("-",$array);
$chk=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
//print_r($chk);
$item1=str_split($array1[0]);
$item2=str_split($array1[1]);
$item3=str_split($array1[2]);
//print_r($item1);
//print_r($item2);
//print_r($item3);
$total1=(($item1[0]*$item1[1]+$item1[2])*$item1[3]+$item1[4])%26;
$total2=(($item2[0]*$item2[1]+$item2[2])*$item2[3]+$item2[4])%26;
//echo $total1."<br/>";
//echo $total2."<br/>";
//echo ord($item3[0]);
//echo ord($item3[1]);
if($item3[0]==$chk[$total1]&&$item3[1]==$chk[$total2]){
$_SESSION['couponerror']=0;

$_SESSION['coupon']=1;
$t=20/100;
$_SESSION['total']-=$t*$_SESSION['total'];
}
else{
$_SESSION['couponerror']=1;

}
header("Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php");
	die();

?>
