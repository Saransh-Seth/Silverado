<?php
session_start();
$cartcount=0;
if(isset($_SESSION['cart'])){$cartcount=count($_SESSION['cart']);}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once("includes/header.php"); ?>

    <link rel="stylesheet" type="text/css" href="css/price.css">
    
</head>
  
  <body>

    <div class="menu">
		<?php include_once("includes/pricemenu.php"); ?>
	</div>

	
<div id="container">
	<div id="pricecontainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center" id="r1">
			<h1 id="header" class="center whitebox">Types of seats</h1>
			</div>
		</div>
		<div class="row" id="s1">
		<div class="col-md-6 center">
			<img src="images/standard.png" id="i1" alt="">
		</div>
		<div class="col-md-3 center mtitle">
			<h3>Standard Seat</h3>
		</div>
		</div>
		<div class="row" id="s2">
		<div class="col-md-6 center">
			<img src="images/firstclass.png" id="i2" alt="">
		</div>
		<div class="col-md-3 center mtitle">
			<h3>First-class Seat</h3>
		</div>
		</div>
		<div class="row" id="s3">
		<div class="col-md-6 center">
			<img src="images/beanbag.jpg" id="i3" alt="">
		</div>
		<div class="col-md-3 center mtitle">
			<h3>Beanbag Seat</h3><div class="smallt">*new</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center" id="r2">
			<h1 id="header1" class="center whitebox">Price List</h1>
			</div>
		</div>
		
		<div class="row" id="r3">
		<div class="col-md-6 col-md-offset-3 center">
		<table class="table table-hover table-bordered tb">
		<thead>
      <tr>
        <th class="center">Price List</th>
        <th class="center">Mon - Tue(All day)<br/>Mon - Fri(1pm only)</th>
        <th class="center">Wed - Fri(not 1pm)<br/>Sat - Sun(All day)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="bold">Standard-Full</td>
        <td>$12</td>
        <td>$18</td>
      </tr>
      <tr>
        <td class="bold">Standard-Concession</td>
        <td>$10</td>
        <td>$15</td>
      </tr>
      <tr>
        <td class="bold">Standard-Child</td>
        <td>$8</td>
        <td>$12</td>
      </tr>
	  
	  <tr>
        <td class="bold">FirstClass-Adult</td>
        <td>$25</td>
        <td>$30</td>
      </tr>
	  <tr>
        <td class="bold">FirstClass-Child</td>
        <td>$20</td>
        <td>$25</td>
      </tr>
	  <tr>
        <td class="bold">Beanbag*</td>
        <td>$20</td>
        <td>$30</td>
      </tr>
    </tbody>
  </table></div></div>
	<div class="row">
	<div class="smallt col-md-6 col-md-offset-3 center">* Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all!</div></div>
	</div>	
</div>
	



<div class="footer">
		<?php include_once("includes/footer.php"); ?>
	</div>

<?php include_once("includes/displaycart.php"); ?>



<?php include_once("includes/userdetails.php"); ?>

<?php include_once("includes/checkout.php"); ?>

<?php include_once("includes/modaljs.php"); ?>

</body>
</html>
<!--All the images,videos and plug ins used in the site are for educational purpose only. Links for them are given in the links.txt file-->