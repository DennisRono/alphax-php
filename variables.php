<!DOCTYPE html>
<html lang="en">
<head>
<title>Print statement illustation</title>
</head>
<body>
<?php
	$txt = "July 2021";
	$num = 123456789;
	$phones = array('Tecno','Samsung','infinix');
	print $txt;
	print "<br>";
	print $num;
	print "<br>";
	print $phones[0];
	
	$color1 = "Red";
	$color2 = "Green";
	$color3 = "Blue";
	echo $color1;
	echo "<br>";
	echo $color2;
	echo "<br>";
	echo $color3;
	
?>
<h3>Common Vehicles brands in kenyan roads</h3>
	<?php
	$isuzu = "isuzu";
	$toyota = "toyota";
	$lexus = "Lexus";
	$subaru = "subaru";
	$audi = "audi";
	echo $isuzu."<br>".$toyota."<br>".$lexus."<br>".$subaru."<br>".$audi;
	
	?>
<h3>PHP Constants</h3>
<?php
	define("SITE_URL", "https://www.kra.go.ke");
	echo "Thank you for visiting us - " .SITE_URL;
?>

</body>
</html>