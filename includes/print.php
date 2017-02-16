<html>
<head>
<link rel='stylesheet' href='print.css'>
</head>
<body>
<div class="printing">
<?php session_start(); 
echo '<img src="logo.png" id="logo" alt="">';

echo '<table>';
			  $array=$_SESSION['cart'];
				foreach ($array as $film) {
				if (is_array($film)) {
foreach ($film as $key=>$value) {
if($key=="film"||$key=="day"||$key=="time"||$value!=0){
echo '<dl class="dl-horizontal text-center">
  <dt><tr><td>'.$key.' : </td></dt>
     <dd><td>'.$value.'</td></dd>
    </dl>';
}

}
}
}
echo '<img src="qr.png" alt="">';
echo '<dl class="dl-horizontal pull-right"><dt><tr><td>Total : </td></dt><dd><td>$'.$_SESSION["total"].'</td></tr></dd></dl><br/>';

echo '</table>';


?>
</div>
<script>
    window.print();
    //location.href="http://titan.csit.rmit.edu.au/~s3515746/wp/a3/movies.php";


</script>
</body>
</html>