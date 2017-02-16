<?php
session_start();
$cartcount=0;
if(isset($_SESSION['cart'])){$cartcount=count($_SESSION['cart']);}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include_once("includes/header.php"); ?>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    
</head>
  
  <body>

    <div class="menu">
	<?php include_once("includes/indexmenu.php"); ?>
    </div>

<div class="jumbotron" id="jumbo">
      <div class="container">
        <img src="images/logo.png" id="logo" alt="">
      </div>
    </div>
	<div class="jumbotron" id="jumbo1">
      <div class="container">
		<img src="images/upgradelogo.png" alt="">
        <p id="header2">We are back with all new Dolby Digital Surround System, 3D screens and more comfortable seats!! Drop by and we assure you will have the best relaxing time!</p>
      </div>
    </div>
	
<div id="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 id="header" class="center whitebox">Upcoming Movies</h1>
</div>
</div>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/c1/i3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Fantastic Four</h1>
              <p>Initial Release : August 7, 2015</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/c1/i2.jpeg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Star Wars VII</h1>
              <p>Initial Release : December 16, 2015</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/c1/i4.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" id="blackcaption">
              <h1>Mission: Impossible 5</h1>
              <p>Initial Release : July 31, 2015</p>
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
</div>	
	
  




<div class="footer">
		<?php include_once("includes/footer.php"); ?>
	</div>



<div class="modal fade nameModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<div class="modal-header">
          <h3 class="modal-title">Enter your name please!</h3>
      </div>
	<div class="modal-body">
      <form action="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/includes/name.php" method="post">
	<div class="input-group col-md-6 col-md-offset-3 text-center">
  		<span class="input-group-addon" id="basic-addonname">Name : </span>
  		<input type="text" class="form-control nameenter" name="name" placeholder="Your name" aria-describedby="basic-addonname" required/>
		</div>
	<div class="modal-footer">
                <button type="submit" class="btn btn-primary">Go to site!</button>
        </div>

      </form>
</div>
    </div>
  </div>
</div>
<?php
if(!isset($_SESSION['user']['name'])){
echo '
<script>
$(function() {
    $(".nameModal").modal();
});
</script>';
}
?>
<?php include_once("includes/displaycart.php"); ?>



<?php include_once("includes/userdetails.php"); ?>

<?php include_once("includes/checkout.php"); ?>

<?php include_once("includes/modaljs.php"); ?>

</body>
</html>
<!--All the images,videos and plug ins used in the site are for educational purpose only. Links for them are given in the links.txt file-->