<?php
session_start();
$cartcount=0;
if(isset($_SESSION['cart'])){$cartcount=count($_SESSION['cart']);}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include_once("includes/header.php"); ?>

    <link rel="stylesheet" type="text/css" href="css/movies.css">
</head>
  
  <body>

    <div class="menu">
	<?php include_once("includes/moviesmenu.php"); ?>
    </div>

<?php
if(isset($_SESSION['success'])){
	if($_SESSION['success']==1){
		
		echo '<div class="alert alert-info alert-dismissible added" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Item added successfully!</div>';


		echo "<script>$('.added').delay(5000).fadeOut('slow');</script>";
}
	else{
		echo '<div class="alert alert-info alert-dismissible added" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Item updated successfully!</div>';
				echo "<script>$('.added').delay(5000).fadeOut('slow');</script>";
	}
}
if(isset($_SESSION['empty'])){
	if($_SESSION['empty']==1){
	echo "<script>$('.added').hide();</script>";
	echo '<div class="alert alert-danger alert-dismissible empty" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Cart emptied successfully!</div>';
	echo "<script>$('.empty').delay(5000).fadeOut('slow');</script>";


}
}
?>

	
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/c2/i1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Avengers : Age of Ultron</h1>
              <p>Action movie</p>
			  <a class="btn btn-large btn-primary" href="https://www.youtube.com/watch?v=JAUoeqvedMo" target="_blank">View trailer</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/c2/i2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Despicable me 3</h1>
              <p>Kids movie</p>
			  <a class="btn btn-large btn-primary" href="https://www.youtube.com/watch?v=hcRAnhcEYLY" target="_blank">View trailer</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/c2/i3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Focus</h1>
              <p>Romantic-Comedy movie</p>
			  <a class="btn btn-large btn-primary" href="https://www.youtube.com/watch?v=MxCRgtdAuBo" target="_blank">View trailer</a>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="fourth-slide" src="images/c2/i4.jpg" alt="fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="blackcaption bluecaption">Ted 2</h1>
              <p  class="blackcaption bluecaption">Comedy movie</p>
			  <a class="btn btn-large btn-primary" href="https://www.youtube.com/watch?v=S3AVcCggRnU" target="_blank">View trailer</a>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="fifth-slide" src="images/c2/i5.jpg" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption  blackcaption">
              <h1>Nanak Shah Fakir</h1>
              <p>Art/Foreign movie</p>
			  <a class="btn btn-large btn-primary" href="https://www.youtube.com/watch?v=Ykru-Y9upWI" target="_blank">View trailer</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
	<!--Movie Description-->
	
<div id="container">


<div id="moviecontainer">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 center">
			<h1 id="header" class="center whitebox">Now Showing</h1>
		</div>
	</div>
	
	<div class="row searchable" id="r1">
		<div class="col-md-3">
			<img class="acposter" id="m1" src="" alt="">
		</div>
		<div class="col-md-3 mtitle">
			<h3 id="actitle"></h3>
		</div>
		<div class="col-md-6 mdesc">
		<div  class="span1 collapse-group">
		<p id="acsum"></p>
		
		<p class="collapse" id="acdesc"></p>
							<h3 class="center">Show timings</h3>
							<div class="table-responsive">
							
							<table class="table table-condensed">
							<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead>
							<tr><td class="danger noshow"> - </td><td class="danger noshow"> - </td><td>9 PM</td><td>9 PM</td><td>9 PM</td><td>9 PM</td><td>9 PM</td></tr>
							</table></div>
		<p><a class="btn btn-success" href="#" data-toggle="modal" data-target="#basicModal" data-backdrop="static">Add to Cart</a></p>
		<p><a class="btn btn-primary SeeMore2" href="#">Read more</a></p>
		</div>
		</div>
		
	</div>
	<div class="row searchable" id="r2">
		<div class="col-md-3">
			<img class="chposter" id="m2" src="" alt="">
		</div>
		<div class="col-md-3 mtitle">
			<h3 id="chtitle"></h3>
		</div>
		<div class="col-md-6 mdesc">
		<div  class="span1 collapse-group">
		<p id="chsum"></p>
		
		<p class="collapse" id="chdesc"><br/><br/></p>
		<h3 class="center">Show timings</h3>
							<div class="table-responsive">
							
							<table class="table table-condensed">
							<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead>
							<tr><td>1 PM</td><td>1 PM</td><td>6 PM</td><td>6 PM</td><td>6 PM</td><td>12 PM</td><td>12 PM</td></tr>
							</table></div>
		<p><a class="btn btn-success" href="#" data-toggle="modal" data-target="#basicModal1" data-backdrop="static">Add to Cart</a></p>
		<p><a class="btn btn-primary SeeMore2" href="#">Read more</a></p>
		</div>
		</div>
	</div>
	<div class="row searchable" id="r3">
		<div class="col-md-3">
			<img class="rcposter" id="m3" src="" alt="">
		</div>
		<div class="col-md-3 mtitle">
			<h3 id="rctitle"></h3>
		</div>
		<div class="col-md-6 mdesc">
		<div  class="span1 collapse-group">
		<p id="rcsum"></p>
		
		<p class="collapse" id="rcdesc"><br/><br/></p>
							<h3 class="center">Show timings</h3>
							<div class="table-responsive">
							
							<table class="table table-condensed">
							<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead>
							<tr><td>9 PM</td><td>9 PM</td><td>1 PM</td><td>1 PM</td><td>1 PM</td><td>6 PM</td><td>6 PM</td></tr>
							</table></div>
		<p><a class="btn btn-success" href="#" data-toggle="modal" data-target="#basicModal2" data-backdrop="static">Add to Cart</a></p>
		<p><a class="btn btn-primary SeeMore2" href="#">Read more</a></p>
		</div>
		</div>
	</div>
	<div class="row searchable" id="r4">
		<div class="col-md-3">
			<img src="images/c2/i4.jpg" id="m4" alt="">
		</div>
		<div class="col-md-3 mtitle">
			<h3>Ted 2 (R)</h3>
		</div>
		<div class="col-md-6 mdesc">
		<div  class="span1 collapse-group">
		<p>In this comedy movie newly wed couple Ted and Tami-Lynn want to have a baby, but in order to qualify to be a parent, Ted will have to prove he's a person in a court of law.</p>
		
		<p class="collapse">Director: Seth MacFarlane<br/>
							Writers: Seth MacFarlane, Alec Sulkin<br/>
							Stars: Liam Neeson, Mark Wahlberg, Amanda Seyfried <br/><br/></p>
							<h3 class="center">Show timings</h3>
							<div class="table-responsive">
							
							<table class="table table-condensed">
							<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead>
							<tr><td>9 PM</td><td>9 PM</td><td>1 PM</td><td>1 PM</td><td>1 PM</td><td>6 PM</td><td>6 PM</td></tr>
							</table></div>
		<p><a class="btn btn-success" href="#" data-toggle="modal" data-target="#basicModal3" data-backdrop="static">Add to Cart</a></p>
		<p><a class="btn btn-primary SeeMore2" href="#">Read more</a></p>
		</div>
		</div>
	</div>
	<div class="row searchable" id="r5">
		<div class="col-md-3">
			<img class="afposter" id="m5" src="" alt="">
		</div>
		<div class="col-md-3 mtitle">
			<h3 id="aftitle"></h3>
		</div>
		<div class="col-md-6 mdesc">
		<div  class="span1 collapse-group">
		<p id="afsum"></p>
		
		<p class="collapse" id="afdesc"><br/><br/></p>
							<h3 class="center">Show timings</h3>
							<div class="table-responsive">
							
							<table class="table table-condensed">
							<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead>
							<tr><td>6 PM</td><td>6 PM</td><td class="danger"> - </td><td class="danger"> - </td><td class="danger"> - </td><td>3 PM</td><td>3 PM</td></tr>
							</table></div>
		<p><a class="btn btn-success" href="#" data-toggle="modal" data-target="#basicModal4" data-backdrop="static">Add to Cart</a></p>
		<p><a class="btn btn-primary SeeMore2" href="#">Read more</a></p>
		</div>
		</div>
		</div>
	</div>
</div>


<!--MODALS-->
<div class="modal modal1 fade modal-scrollable" id="basicModal" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title myModalLabel">Book ticket</h4>
            </div>
            <div class="modal-body">
                
							
							<form id="avenger" method="post" class="form-horizontal" action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/addcart.php">
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Movie</label>
									<div class="col-xs-4">
								<input type="text" class="form-control movie" name="film" value="Avengers:Age of Ultron" readonly="readonly"/>
									
									</div>
								</div>
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Day</label>
									<div class="col-xs-4">
								<select class="form-control day" name="day">
									<option>Wednesday</option>
									<option>Thursday</option>
									<option>Friday</option>
									<option>Saturday</option>
									<option>Sunday</option>
									
									</select>
									
									</div>
								</div>
								<div class="form-group">
							<label class="col-xs-3 control-label">Time</label>
									<div class="col-xs-4">
								<select class="form-control time" name="time">
									<option>9 PM</option>
									
									
									</select>
									
									</div>
								</div>
								<br/><hr><br/>
							<div class="form-group">
								
								<label class="col-xs-3 control-label">Adult</label>
									<div class="col-xs-3">
								<select class="form-control SA pricing pricingi" name="SA">
									<option data-price="0">0</option>
									<option data-price="18">1</option>
									<option data-price="36">2</option>
									<option data-price="54">3</option>
									<option data-price="72">4</option>
									<option data-price="90">5</option>
									
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $18.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Concession</label>
									<div class="col-xs-3">
								<select class="form-control SP pricing pricingi" name="SP">
									<option data-price="0">0</option>
									<option data-price="15">1</option>
									<option data-price="30">2</option>
									<option data-price="45">3</option>
									<option data-price="60">4</option>
									<option data-price="75">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $15.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Children</label>
									<div class="col-xs-3">
								<select class="form-control SC pricing pricingi" name="SC">
									<option data-price="0">0</option>
									<option data-price="12">1</option>
									<option data-price="24">2</option>
									<option data-price="36">3</option>
									<option data-price="48">4</option>
									<option data-price="60">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $12.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Adult</label>
									<div class="col-xs-3">
								<select class="form-control FA pricing pricingi" name="FA">
									<option data-price="0">0</option>
									<option data-price="30">1</option>
									<option data-price="60">2</option>
									<option data-price="90">3</option>
									<option data-price="120">4</option>
									<option data-price="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $30.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Child</label>
									<div class="col-xs-3">
								<select class="form-control FC pricing pricingi" name="FC">
									<option data-price="0">0</option>
									<option data-price="25">1</option>
									<option data-price="50">2</option>
									<option data-price="75">3</option>
									<option data-price="100">4</option>
									<option data-price="125">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $25.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 1 Person</label>
									<div class="col-xs-3">
								<select class="form-control B1 pricing pricingi" name="B1">
									<option data-price="0">0</option>
									<option data-price="30">1</option>
									<option data-price="60">2</option>
									<option data-price="90">3</option>
									<option data-price="120">4</option>
									<option data-price="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $30.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 2 Person</label>
									<div class="col-xs-3">
								<select class="form-control B2 pricing pricingi" name="B2">
									<option data-price="0">0</option>
									<option data-price="30">1</option>
									<option data-price="60">2</option>
									<option data-price="90">3</option>
									<option data-price="120">4</option>
									<option data-price="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $30.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 3 Children</label>
									<div class="col-xs-3">
								<select class="form-control B3 pricing pricingi" name="B3">
									<option data-price="0">0</option>
									<option data-price="30">1</option>
									<option data-price="60">2</option>
									<option data-price="90">3</option>
									<option data-price="120">4</option>
									<option data-price="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $30.00</span>
									</div>
									</div>
									
									<br/><hr><br/>
									
									<div class="form-group">
							<label class="col-xs-3 control-label">Total price</label>
									<div class="col-xs-4">
								<input type="text" class="form-control total" name="price" value="0.00" data-base-price="0" readonly/>
									
									</div>
								</div>
							
							</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="myFunction()">Add to Cart</button>
        </div>
    </div>
	</div>
  </div>


<!--for despicable me -->

<div class="modal fade modal-scrollable" id="basicModal1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title myModalLabel">Book ticket</h4>
            </div>
            <div class="modal-body">
                
							
							<form id="desp" method="post" class="form-horizontal" action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/addcart.php">
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Movie</label>
									<div class="col-xs-4">
								<input type="text" class="form-control movie" name="film" value="Despicable me 3" readonly="readonly"/>
									
									</div>
								</div>
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Day</label>
									<div class="col-xs-4">
								<select class="form-control day1" name="day">
									<option>Monday</option>
									<option>Tuesday</option>
									<option>Wednesday</option>
									<option>Thursday</option>
									<option>Friday</option>
									<option>Saturday</option>
									<option>Sunday</option>
									
									</select>
									
									</div>
								</div>
								<div class="form-group">
							<label class="col-xs-3 control-label">Time</label>
									<div class="col-xs-4">
								<select class="form-control time1" name="time">
									<option>1 PM</option>
									
									
									</select>
									
									</div>
								</div>
								<br/><hr><br/>
							<div class="form-group">
								
								<label class="col-xs-3 control-label">Adult</label>
									<div class="col-xs-3">
								<select class="form-control SA pricing pricing1" name="SA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="12" data-cheap="18">1</option>
									<option data-price="24" data-cheap="36">2</option>
									<option data-price="36" data-cheap="54">3</option>
									<option data-price="48" data-cheap="72">4</option>
									<option data-price="60" data-cheap="90">5</option>
									
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSA">x $12.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Concession</label>
									<div class="col-xs-3">
								<select class="form-control SP pricing pricing1" name="SP">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="10" data-cheap="15">1</option>
									<option data-price="20" data-cheap="30">2</option>
									<option data-price="30" data-cheap="45">3</option>
									<option data-price="40" data-cheap="60">4</option>
									<option data-price="50" data-cheap="75">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSP">x $10.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Children</label>
									<div class="col-xs-3">
								<select class="form-control SC pricing pricing1" name="SC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="8" data-cheap="12">1</option>
									<option data-price="16" data-cheap="24">2</option>
									<option data-price="24" data-cheap="36">3</option>
									<option data-price="32" data-cheap="48">4</option>
									<option data-price="40" data-cheap="60">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSC">x $8.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Adult</label>
									<div class="col-xs-3">
								<select class="form-control FA pricing pricing1" name="FA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="25" data-cheap="30">1</option>
									<option data-price="50" data-cheap="60">2</option>
									<option data-price="75" data-cheap="90">3</option>
									<option data-price="100" data-cheap="120">4</option>
									<option data-price="125" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFA">x $25.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Child</label>
									<div class="col-xs-3">
								<select class="form-control FC pricing pricing1" name="FC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="25">1</option>
									<option data-price="40" data-cheap="50">2</option>
									<option data-price="60" data-cheap="75">3</option>
									<option data-price="80" data-cheap="100">4</option>
									<option data-price="100" data-cheap="125">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFC">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 1 Person</label>
									<div class="col-xs-3">
								<select class="form-control B1 pricing pricing1" name="B1">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 2 Person</label>
									<div class="col-xs-3">
								<select class="form-control B2 pricing pricing1" name="B2">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 3 Children</label>
									<div class="col-xs-3">
								<select class="form-control B3 pricing pricing1" name="B3">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
								</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<br/><hr><br/>
									
									<div class="form-group">
							<label class="col-xs-3 control-label">Total price</label>
									<div class="col-xs-4">
								<input type="text" class="form-control total" name="price" value="$0.00" data-base-price="0" readonly="readonly"/>
									
									</div>
								</div>
							
							</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="myFunction1()">Add to Cart</button>
        </div>
    </div>
  </div>
</div>


<!-- For focus film -->

<div class="modal fade modal-scrollable" id="basicModal2" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title myModalLabel">Book ticket</h4>
            </div>
            <div class="modal-body">
                
							
							<form id="focus" method="post" class="form-horizontal" action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/addcart.php">
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Movie</label>
									<div class="col-xs-4">
								<input type="text" class="form-control movie" name="film" value="Focus" readonly="readonly"/>
									
									</div>
								</div>
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Day</label>
									<div class="col-xs-4">
								<select class="form-control day2" name="day">
									<option>Monday</option>
									<option>Tuesday</option>
									<option>Wednesday</option>
									<option>Thursday</option>
									<option>Friday</option>
									<option>Saturday</option>
									<option>Sunday</option>
									
									</select>
									
									</div>
								</div>
								<div class="form-group">
							<label class="col-xs-3 control-label">Time</label>
									<div class="col-xs-4">
								<select class="form-control time2" name="time">
									<option>9 PM</option>
									
									
									</select>
									
									</div>
								</div>
								<br/><hr><br/>
							<div class="form-group">
								
								<label class="col-xs-3 control-label">Adult</label>
									<div class="col-xs-3">
								<select class="form-control SA pricing pricing2" name="SA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="12" data-cheap="18">1</option>
									<option data-price="24" data-cheap="36">2</option>
									<option data-price="36" data-cheap="54">3</option>
									<option data-price="48" data-cheap="72">4</option>
									<option data-price="60" data-cheap="90">5</option>
									
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSA">x $12.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Concession</label>
									<div class="col-xs-3">
								<select class="form-control SP pricing pricing2" name="SP">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="10" data-cheap="15">1</option>
									<option data-price="20" data-cheap="30">2</option>
									<option data-price="30" data-cheap="45">3</option>
									<option data-price="40" data-cheap="60">4</option>
									<option data-price="50" data-cheap="75">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSP">x $10.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Children</label>
									<div class="col-xs-3">
								<select class="form-control SC pricing pricing2" name="SC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="8" data-cheap="12">1</option>
									<option data-price="16" data-cheap="24">2</option>
									<option data-price="24" data-cheap="36">3</option>
									<option data-price="32" data-cheap="48">4</option>
									<option data-price="40" data-cheap="60">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSC">x $8.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Adult</label>
									<div class="col-xs-3">
								<select class="form-control FA pricing pricing2" name="FA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="25" data-cheap="30">1</option>
									<option data-price="50" data-cheap="60">2</option>
									<option data-price="75" data-cheap="90">3</option>
									<option data-price="100" data-cheap="120">4</option>
									<option data-price="125" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFA">x $25.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Child</label>
									<div class="col-xs-3">
								<select class="form-control FC pricing pricing2" name="FC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="25">1</option>
									<option data-price="40" data-cheap="50">2</option>
									<option data-price="60" data-cheap="75">3</option>
									<option data-price="80" data-cheap="100">4</option>
									<option data-price="100" data-cheap="125">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFC">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 1 Person</label>
									<div class="col-xs-3">
								<select class="form-control B1 pricing pricing2" name="B1">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 2 Person</label>
									<div class="col-xs-3">
								<select class="form-control B2 pricing pricing2" name="B2">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 3 Children</label>
									<div class="col-xs-3">
								<select class="form-control B3 pricing pricing2" name="B3">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
								</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<br/><hr><br/>
									
									<div class="form-group">
							<label class="col-xs-3 control-label">Total price</label>
									<div class="col-xs-4">
								<input type="text" class="form-control total" name="price" value="$0.00" data-base-price="0" readonly="readonly"/>
									
									</div>
								</div>
							
							</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="myFunction2()">Add to Cart</button>
        </div>
    </div>
  </div>
</div>


<!-- for ted -->

<div class="modal fade modal-scrollable" id="basicModal3" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title myModalLabel">Book ticket</h4>
            </div>
            <div class="modal-body">
                
							
							<form id="ted" method="post" class="form-horizontal" action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/addcart.php">
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Movie</label>
									<div class="col-xs-4">
								<input type="text" class="form-control movie" name="film" value="Ted 2" readonly="readonly"/>
									
									</div>
								</div>
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Day</label>
									<div class="col-xs-4">
								<select class="form-control day2" name="day">
									<option>Monday</option>
									<option>Tuesday</option>
									<option>Wednesday</option>
									<option>Thursday</option>
									<option>Friday</option>
									<option>Saturday</option>
									<option>Sunday</option>
									
									</select>
									
									</div>
								</div>
								<div class="form-group">
							<label class="col-xs-3 control-label">Time</label>
									<div class="col-xs-4">
								<select class="form-control time2" name="time">
									<option>9 PM</option>
									
									
									</select>
									
									</div>
								</div>
								<br/><hr><br/>
							<div class="form-group">
								
								<label class="col-xs-3 control-label">Adult</label>
									<div class="col-xs-3">
								<select class="form-control SA pricing pricing2" name="SA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="12" data-cheap="18">1</option>
									<option data-price="24" data-cheap="36">2</option>
									<option data-price="36" data-cheap="54">3</option>
									<option data-price="48" data-cheap="72">4</option>
									<option data-price="60" data-cheap="90">5</option>
									
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSA">x $12.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Concession</label>
									<div class="col-xs-3">
								<select class="form-control SP pricing pricing2" name="SP">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="10" data-cheap="15">1</option>
									<option data-price="20" data-cheap="30">2</option>
									<option data-price="30" data-cheap="45">3</option>
									<option data-price="40" data-cheap="60">4</option>
									<option data-price="50" data-cheap="75">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSP">x $10.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Children</label>
									<div class="col-xs-3">
								<select class="form-control SC pricing pricing2" name="SC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="8" data-cheap="12">1</option>
									<option data-price="16" data-cheap="24">2</option>
									<option data-price="24" data-cheap="36">3</option>
									<option data-price="32" data-cheap="48">4</option>
									<option data-price="40" data-cheap="60">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSC">x $8.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Adult</label>
									<div class="col-xs-3">
								<select class="form-control FA pricing pricing2" name="FA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="25" data-cheap="30">1</option>
									<option data-price="50" data-cheap="60">2</option>
									<option data-price="75" data-cheap="90">3</option>
									<option data-price="100" data-cheap="120">4</option>
									<option data-price="125" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFA">x $25.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Child</label>
									<div class="col-xs-3">
								<select class="form-control FC pricing pricing2" name="FC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="25">1</option>
									<option data-price="40" data-cheap="50">2</option>
									<option data-price="60" data-cheap="75">3</option>
									<option data-price="80" data-cheap="100">4</option>
									<option data-price="100" data-cheap="125">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFC">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 1 Person</label>
									<div class="col-xs-3">
								<select class="form-control B1 pricing pricing2" name="B1">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 2 Person</label>
									<div class="col-xs-3">
								<select class="form-control B2 pricing pricing2" name="B2">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 3 Children</label>
									<div class="col-xs-3">
								<select class="form-control B3 pricing pricing2" name="B3">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
								</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<br/><hr><br/>
									
									<div class="form-group">
							<label class="col-xs-3 control-label">Total price</label>
									<div class="col-xs-4">
								<input type="text" class="form-control total" name="price" value="$0.00" data-base-price="0" readonly="readonly"/>
									
									</div>
								</div>
							
							</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="myFunction3()">Add to Cart</button>
        </div>
    </div>
  </div>
</div>


<!--for nanak shah movie -->

<div class="modal fade modal-scrollable" id="basicModal4" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title myModalLabel">Book ticket</h4>
            </div>
            <div class="modal-body">
                
							
							<form id="nanak" method="post" class="form-horizontal" action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/addcart.php">
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Movie</label>
									<div class="col-xs-4">
								<input type="text" class="form-control movie" name="film" value="Nanak Shah Fakir" readonly="readonly"/>
									
									</div>
								</div>
							
							<div class="form-group">
							<label class="col-xs-3 control-label">Day</label>
									<div class="col-xs-4">
								<select class="form-control day3" name="day">
									<option>Monday</option>
									<option>Tuesday</option>
									<option>Saturday</option>
									<option>Sunday</option>
									
									</select>
									
									</div>
								</div>
								<div class="form-group">
							<label class="col-xs-3 control-label">Time</label>
									<div class="col-xs-4">
								<select class="form-control time3" name="time">
									<option>6 PM</option>
									
									
									</select>
									
									</div>
								</div>
								<br/><hr><br/>
							<div class="form-group">
								
								<label class="col-xs-3 control-label">Adult</label>
									<div class="col-xs-3">
								<select class="form-control SA pricing pricing3" name="SA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="12" data-cheap="18">1</option>
									<option data-price="24" data-cheap="36">2</option>
									<option data-price="36" data-cheap="54">3</option>
									<option data-price="48" data-cheap="72">4</option>
									<option data-price="60" data-cheap="90">5</option>
									
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSA">x $12.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Concession</label>
									<div class="col-xs-3">
								<select class="form-control SP pricing pricing3" name="SP">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="10" data-cheap="15">1</option>
									<option data-price="20" data-cheap="30">2</option>
									<option data-price="30" data-cheap="45">3</option>
									<option data-price="40" data-cheap="60">4</option>
									<option data-price="50" data-cheap="75">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSP">x $10.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Children</label>
									<div class="col-xs-3">
								<select class="form-control SC pricing pricing3" name="SC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="8" data-cheap="12">1</option>
									<option data-price="16" data-cheap="24">2</option>
									<option data-price="24" data-cheap="36">3</option>
									<option data-price="32" data-cheap="48">4</option>
									<option data-price="40" data-cheap="60">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceSC">x $8.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Adult</label>
									<div class="col-xs-3">
								<select class="form-control FA pricing pricing3" name="FA">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="25" data-cheap="30">1</option>
									<option data-price="50" data-cheap="60">2</option>
									<option data-price="75" data-cheap="90">3</option>
									<option data-price="100" data-cheap="120">4</option>
									<option data-price="125" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true">x $25.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">First class Child</label>
									<div class="col-xs-3">
								<select class="form-control FC pricing pricing3" name="FC">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="25">1</option>
									<option data-price="40" data-cheap="50">2</option>
									<option data-price="60" data-cheap="75">3</option>
									<option data-price="80" data-cheap="100">4</option>
									<option data-price="100" data-cheap="125">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceFA">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 1 Person</label>
									<div class="col-xs-3">
								<select class="form-control B1 pricing pricing3" name="B1">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 2 Person</label>
									<div class="col-xs-3">
								<select class="form-control B2 pricing pricing3" name="B2">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
									</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<div class="form-group">
									<label class="col-xs-3 control-label">Beanbag - 3 Children</label>
									<div class="col-xs-3">
								<select class="form-control B3 pricing pricing3" name="B3">
									<option data-price="0" data-cheap="0">0</option>
									<option data-price="20" data-cheap="30">1</option>
									<option data-price="40" data-cheap="60">2</option>
									<option data-price="60" data-cheap="90">3</option>
									<option data-price="80" data-cheap="120">4</option>
									<option data-price="100" data-cheap="150">5</option>
								</select>
									
									</div>
									<div class="col-xs-3 pricebox">
									<span aria-hidden="true" class="priceB">x $20.00</span>
									</div>
									</div>
									
									<br/><hr><br/>
									
									<div class="form-group">
							<label class="col-xs-3 control-label">Total price</label>
									<div class="col-xs-4">
								<input type="text" class="form-control total" name="price" value="$0.00" data-base-price="0" readonly="readonly"/>
									
									</div>
								</div>
							
							</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="myFunction4()">Add to Cart</button>
        </div>
    </div>
  </div>
</div>



<div class="footer">
		<?php include_once("includes/footer.php"); ?>
	</div>


    

<?php include_once("includes/displaycart.php"); ?>



<?php include("includes/userdetails.php"); ?>

<?php include("includes/checkout.php"); ?>

<?php include("includes/modaljs.php"); ?>




<script src="js/ie10-viewport-bug-workaround.js"></script>

	<script>
	//for pricing ----START-----

	


	$(document).ready(function () {
		
    
    
    
    $('.pricingi').change(function () {
        
			
        
            
            
        
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricingi').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('price'));
                $('.total').val(price.toFixed(2));
            });
            
     
    });

});
	
	$(document).ready(function () {
		
    
    var cheap;
    $('.day1').on('change', function (e) {
		initializeModal();
		
		if($(this).val() == "Monday"||$(this).val()=="Tuesday"){
			removeTime();
			$('.time1').append($('<option>', {
				value: '1 PM',
				text: '1 PM'
			}));
			
		}
		if($(this).val() == "Wednesday"||$(this).val()=="Thursday"||$(this).val()=="Friday"){
			removeTime();
			$('.time1').append($('<option>', {
				value: '6 PM',
				text: '6 PM'
			}));
			
		}
		if($(this).val() == "Saturday"||$(this).val()=="Sunday"){
			removeTime();
			$('.time1').append($('<option>', {
				value: '12 PM',
				text: '12 PM'
			}));
			
		}
        if ($(this).val() == "Saturday"||$(this).val()=="Sunday"||$('.time1').val()!="1 PM") {
			togglePrice();
            cheap = true;
        } else {
			deTogglePrice();
            cheap = false;
        }
    });
    $('.pricing1').change(function () {
        if (cheap == true) {
			
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing1').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('cheap'));
                $('.total').val( price.toFixed(2));
            });
            //console.log('cheap',cheap)
        } else {
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('price'));
                $('.total').val(price.toFixed(2));
            });
            console.log('cheap', cheap)
        }
    });

});
	//       ------- END ------
	
	$(document).ready(function () {
	var cheap;
	
    $('.day2').on('change', function (e) {
		initializeModal();
		
		if($(this).val() == "Monday"||$(this).val()=="Tuesday"){
			removeTime1();
			$('.time2').append($('<option>', {
				value: '9 PM',
				text: '9 PM'
			}));
			
		}
		if($(this).val() == "Wednesday"||$(this).val()=="Thursday"||$(this).val()=="Friday"){
			removeTime1();
			$('.time2').append($('<option>', {
				value: '1 PM',
				text: '1 PM'
			}));
			
		}
		if($(this).val() == "Saturday"||$(this).val()=="Sunday"){
			removeTime1();
			$('.time2').append($('<option>', {
				value: '6 PM',
				text: '6 PM'
			}));
			
		}
        if ($(this).val() == "Saturday"||$(this).val()=="Sunday") {
			togglePrice();
            cheap = true;
        } else {
			deTogglePrice();
            cheap = false;
        }
    });
    $('.pricing2').change(function () {
        if (cheap == true) {
			
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing2').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('cheap'));
                $('.total').val(price.toFixed(2));
            });
            //console.log('cheap',cheap)
        } else {
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('price'));
                $('.total').val(price.toFixed(2));
            });
            console.log('cheap', cheap)
        }
    });

});
	
	
	$(document).ready(function () {
		
    
    var cheap;
    $('.day3').on('change', function (e) {
		initializeModal();
		
		if($(this).val() == "Monday"||$(this).val()=="Tuesday"){
			removeTime2();
			$('.time3').append($('<option>', {
				value: '6 PM',
				text: '6 PM'
			}));
			
		}
		
		if($(this).val() == "Saturday"||$(this).val()=="Sunday"){
			removeTime2();
			$('.time3').append($('<option>', {
				value: '3 PM',
				text: '3 PM'
			}));
			
		}
        if ($(this).val() == "Saturday"||$(this).val()=="Sunday") {
			togglePrice();
            cheap = true;
        } else {
			deTogglePrice();
            cheap = false;
        }
    });
    $('.pricing3').change(function () {
        if (cheap == true) {
			
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing3').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('cheap'));
                $('.total').val(price.toFixed(2));
            });
            //console.log('cheap',cheap)
        } else {
            var price = parseFloat($('.total').data('base-price')) || 0;
            $('.pricing').each(function (i, el) {
                price += parseFloat($('option:selected', el).data('price'));
                $('.total').val(price.toFixed(2));
            });
            console.log('cheap', cheap)
        }
    });

});
	
	
		$('.SeeMore2').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
	$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('Read More');			
		} else {
			$this.text('Read Less');
		}
    var $collapse = $this.closest('.collapse-group').find('.collapse');
    $collapse.collapse('toggle');
		
		 
		
		
	
});

		 
	
	
	function myFunction() {
    $('#avenger').submit();
    

    
	

}
$('#cartcount').html();
function myFunction1() {
    $('#desp').submit();
}
function myFunction2() {
    $('#focus').submit();
}
function myFunction3() {
    $('#ted').submit();
}
function myFunction4() {
    $('#nanak').submit();
}
function initializeModal(){
$(".pricing").val(0);
  $('.total').val('$0.00');
}
function removeTime(){
$(".time1 option:selected").remove();
}
function removeTime1(){
$(".time2 option:selected").remove();
}
function removeTime2(){
$(".time3 option:selected").remove();
}

$('.modal').on('show.bs.modal', function () {
	$('.day1').val('Monday');
	removeTime();
			$('.time1').append($('<option>', {
				value: '1 PM',
				text: '1 PM'
			}));
	$('.day2').val('Monday');
	removeTime1();
			$('.time2').append($('<option>', {
				value: '9 PM',
				text: '9 PM'
			}));
			$('.day3').val('Monday');
	removeTime2();
			$('.time3').append($('<option>', {
				value: '6 PM',
				text: '6 PM'
			}));
	deTogglePrice();
  initializeModal();
});
$('.modal1').on('show.bs.modal', function () {
	
  initializeModal();
});

function togglePrice(){
$('.priceSA').text("x $18.00");
$('.priceSP').text("x $15.00");
$('.priceSC').text("x $12.00");
$('.priceFA').text("x $30.00");
$('.priceFC').text("x $25.00");
$('.priceB').text("x $30.00");

}
function deTogglePrice(){
$('.priceSA').text("x $12.00");
$('.priceSP').text("x $10.00");
$('.priceSC').text("x $8.00");
$('.priceFA').text("x $25.00");
$('.priceFC').text("x $20.00");
$('.priceB').text("x $20.00");

}
$("#searchtext").keyup(function(){
          $(".searchable")
        .hide()
        .filter(":contains('" + $("input[name='searchtext']").val() + "')")
        .show();
});



//----AJAX and JSON----

$(document).ready(function() {
      $.post("movie-service.php",
      {
movie:"AC"  
      },
      function(data) {
        var movieObj=JSON.parse(data);
	
	$('.acposter').attr('src',movieObj['AC'].poster);
	$('#actitle').html(movieObj['AC'].title);
	$('#acsum').html(movieObj['AC'].summary);
	$('#acdesc').html(movieObj['AC'].description);
      });
    });	
$(document).ready(function() {
      $.post("movie-service.php",
      {
movie:"CH"  
      },
      function(data) {
        var movieObj=JSON.parse(data);
	
	$('.chposter').attr('src',movieObj['CH'].poster);
	$('#chtitle').html(movieObj['CH'].title);
	$('#chsum').html(movieObj['CH'].summary);
	$('#chdesc').html(movieObj['CH'].description);
      });
    });	
$(document).ready(function() {
      $.post("movie-service.php",
      {
movie:"RC"  
      },
      function(data) {
        var movieObj=JSON.parse(data);
	
	$('.rcposter').attr('src',movieObj['RC'].poster);
	$('#rctitle').html(movieObj['RC'].title);
	$('#rcsum').html(movieObj['RC'].summary);
	$('#rcdesc').html(movieObj['RC'].description);
      });
    });	
$(document).ready(function() {
      $.post("movie-service.php",
      {
movie:"AF"  
      },
      function(data) {
        var movieObj=JSON.parse(data);
	
	$('.afposter').attr('src',movieObj['AF'].poster);
	$('#aftitle').html(movieObj['AF'].title);
	$('#afsum').html(movieObj['AF'].summary);
	$('#afdesc').html(movieObj['AF'].description);
      });
    });
	

</script>
</body>
</html>
<!--All the images,videos and plug ins used in the site are for educational purpose only. Links for them are given in the links.txt file-->