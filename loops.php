<!DOCTYPE html>
<html lang="en">
<head>
<title>Loops</title>
</head>
<body>
	<?php
		
		$i = 30;
		while($i <= 34){
			$i++;
			echo "The Age-group for the persons are ".$i."<br>";
		}
		
		
		
		$i = 30;
		do{
			$i++;
			echo "The Age-group is $i"."<br>";
		} while ($i <= 34);
		
		
		
		for($i = 30; $i<=34; $i++){
			echo "The Age-group is $i"."<br>";
		}
		
		
		$brands = array("Toyota","Volkswagen","Subaru","Audi","Range Rover","Lexus","Chevrolet");
		foreach($brands as $value){
			echo "$value <br>";
		}
	?>
</body>
</html>