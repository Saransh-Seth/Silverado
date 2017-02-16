<div class="modal fade cartModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
          <h3 class="modal-title text-center">Your cart!</h3>
      </div>
	<div class="modal-body">
					<?php
		if($_SESSION['couponerror']==1){

		echo '<div class="alert alert-warning coupon">Coupon code invalid!</div>';
		echo "<script>$('.coupon').delay(5000).fadeOut('slow');</script>";}
		if($_SESSION['coupon']==1){
								echo '<div class="alert alert-info coupon">Coupon code applied successfully!</div>';
		echo "<script>$('.coupon').delay(5000).fadeOut('slow');</script>";

}

			 if(isset($_SESSION['cart']) && count($_SESSION['cart'])!=0 && $_SESSION['empty']!=1){
			echo "<script>$('.chk').disable(false);</script>";
			  $array=$_SESSION['cart'];
				foreach ($array as $film) {
				if (is_array($film)) {
foreach ($film as $key=>$value) {
if($key=="film"||$key=="day"||$key=="time"||$value!=0){
echo '<dl class="dl-horizontal text-center">
  <dt>'.$key.' : </dt>
     <dd>'.$value.'</dd>
    </dl>';
}

}
} 
echo "<hr/>";
}
if(!isset($_SESSION['coupon'])||$_SESSION['coupon']!=1){
echo '<form action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/coupon.php" method="post"><div class="input-group col-md-6 pull-left"><span class="input-group-addon" id="basic-addon1">Coupon code : </span>
  		<input type="text" class="form-control couponenter" name="coupon" pattern="[0-9]{5}-[0-9]{5}-[A-Z]{2}" placeholder="Eg: 12345-67890-ZI" aria-describedby="basic-addon1" required/></div><button type="submit" class="btn btn-primary">Apply coupon</button></form>';}
echo '<dl class="dl-horizontal pull-right"><dt>Total : </dt><dd>$'.$_SESSION["total"].'</dd></dl><br/>';
			}else{
				
				echo "<script>$('.chk').disable(true);</script>";
				echo "<div class='alert alert-info'>No items to display</div>";}
  			?>
			</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-warning" onClick="clearAll()" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-danger" onClick="emptyFunction()">Empty cart</button>

                <button type="submit" class="btn btn-primary" onClick="chkFunction()" data-dismiss="modal">Checkout</button>
        </div>

     </div>
  </div>
</div>
