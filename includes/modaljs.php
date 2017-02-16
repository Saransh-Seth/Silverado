<?php
if(isset($_SESSION['userdetails'])){
	if($_SESSION['userdetails']==1){
	$_SESSION['success']=0;
	echo '<script>$(".finalModal").modal();</script>';}
}
if($_SESSION['coupon']==1||$_SESSION['couponerror']==1){
echo '<script>$(".cartModal").modal();</script>';
		$_SESSION['couponerror']=0;
$_SESSION['coupon']=0;
}
?>
<script>
function emptyFunction() {
	location.href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/deletecart.php";
}
	function chkFunction() {
	$(".userModal").modal();

}function detailsFunction() {
	location.href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/details.php";

}
function showCart(){
	$(".cartModal").modal();

}
function chk1Function(){
location.href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/checkoutall.php";

}
function clearAll(){
$_SESSION['coupon']=0;
$_SESSION['couponerror']=0;
$_SESSION['userdetails']=0;
$_SESSION['mail']=0;
}
</script>