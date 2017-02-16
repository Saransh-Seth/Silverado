<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#menu">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Silverado</a>
   </div>
   <div class="collapse navbar-collapse pull-left" id="menu">
      <ul class="nav navbar-nav">
         <li><a href="index.php">Home</a></li>
         <li><a href="movies.php">Movies</a></li>
		 <li class="active"><a href="price.php">Price List</a></li>
         <li><a href="contact.php">Contact Us</a></li>
      </ul>
   </div>
<div class="pull-right">
<button class="cart btn btn-primary" type="button" aria-label="Left Align" onClick="showCart()">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
  Cart <span id="cartcount" class="badge"><?php echo $cartcount;?></span></button>
</div>
<div class="pull-right">
<h4 class="hello">Hi, <?php echo $_SESSION['user']['name']?></h4></div>
</nav>
