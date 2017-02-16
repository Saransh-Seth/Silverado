<div class="modal fade userModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
          <h3 class="modal-title">Your details!</h3>
      </div>
	<div class="modal-body">
			<form action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/details.php" method="post">
	<div class="input-group col-md-6 col-md-offset-3 text-center">
  		<span class="input-group-addon" id="basic-addon1">Name : </span>
  		<input type="text" class="form-control nameenter" name="name" value="<?php echo $_SESSION['user']['name'];?>" aria-describedby="basic-addon1" required/>	
	</div>
	<div class="input-group col-md-6 col-md-offset-3 text-center">
  		<span class="input-group-addon" id="basic-addon2">Email : </span>
  		<input type="email" class="form-control emailenter" name="email" placeholder="Your email" aria-describedby="basic-addon2" required/>
	</div>
	
      

					<div class="modal-footer">
		<button type="button" class="btn btn-warning" onClick="clearAll()" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Next</button></div>
	</form>
        </div>
</div>

     </div>
  
</div>
