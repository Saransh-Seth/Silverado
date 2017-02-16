<div class="modal fade finalModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<div class="modal-header">
          <h3 class="modal-title">Thank you for choosing us!</h3>
      </div>
	<div class="modal-body">
			<?php if(isset($_SESSION['mail'])){if($_SESSION['mail']==1){$_SESSION['mail']=0;
 echo "<div class='alert alert-info'>Mail sent!!</div>";}}

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
echo '<hr/>';
}
}
echo '<dl class="dl-horizontal pull-right"><dt>Total : </dt><dd>$'.$_SESSION["total"].'</dd></dl><br/>';

}
?>
			<hr/>
			
			<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
			<img src="images/qr.png" alt=""/></div>
			</div><br/>
			<div class="row">
			<div class="col-md-6 col-md-offset-3 center text-center">
			<a id="mail" href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/email.php">Mail me my ticket!</a></div></div><br/>
<div class="row">
<div class="col-md-6 col-md-offset-3 center text-center">
			<a id="print" href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/print.php">Print my ticket!</a></div></div><br/>


		<div class="modal-footer">
		<button type="button" class="btn btn-warning" onClick="clearAll()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onClick="chk1Function()">Checkout!</button>
        </div>
	</div>
     </div>
  </div>
</div>
