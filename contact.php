<?php
session_start();
$cartcount=0;
if(isset($_SESSION['cart'])){$cartcount=count($_SESSION['cart']);}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include_once("includes/header.php"); ?>

    <link rel="stylesheet" type="text/css" href="css/contact.css">
    
</head>
  
  <body>

    <div class="menu">
	<?php include_once("includes/contactmenu.php"); ?>
    </div>


	
<div id="container">
	<div id="contactContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
			<h1 id="header" class="center whitebox">Contact Us</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<div id="fail" class="alert alert-danger"><span class="glyphicon glyphicon-remove-sign"></span>  Something went wrong! Please check the inputs and try again!</div>
			</div>
		</div>
		<form class="form-horizontal" role="form" id="contactf" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="post">
    <div class="form-group">
      <label class="lb col-md-6 col-md-offset-3 center" for="email">Email</label>
      <div class="col-md-6 col-md-offset-3 center">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="lb col-md-6 col-md-offset-3 center" for="subj">Subject</label>
      <div class="col-md-6 col-md-offset-3 center">          
        <select class="form-control col-sm-6" id="subj" name="subject">
			<option value="General queries">General queries</option>
			<option value="Group and corporate bookings">Group and corporate bookings</option>
			<option value="Suggestion and complaints">Suggestion and complaints</option>
		</select>
      </div>
    </div>
    <div class="form-group">        
      <label class="lb col-md-6 col-md-offset-3 center" for="message">Message</label>
      <div>
        <div class="col-md-6 col-md-offset-3 center">
          <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-6 col-md-offset-3 center">
        <button type="submit" id="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
	</div>
</div>




<div class="footer">
		<?php include_once("includes/footer.php"); ?>
	</div>
<?php include_once("includes/displaycart.php"); ?>



<?php include_once("includes/userdetails.php"); ?>

<?php include_once("includes/checkout.php"); ?>

<?php include_once("includes/modaljs.php"); ?>


    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script>
	$("#submit").click(function(event) {
		if($('#email').val()==""||$('#message').val()==""){
			$("#fail").fadeIn();
		}
		else{
			if(validateEmail($('#email').val())==true){
			$('#contactf').submit();}
			else{
				$("#fail").fadeIn();
			}
		}
	});
	function validateEmail(email) {
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
	}
	</script>
</body>
</html>
<!--All the images,videos and plug ins used in the site are for educational purpose only. Links for them are given in the links.txt file-->