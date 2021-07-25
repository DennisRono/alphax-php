<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arithmetic</title>
</head>
<body>
	<?php
		function getSum($num1, $num2){
			$sum = $num1 + $num2;
			$subtraction = $num1 - $num2;
			$multiplication = $num1 * $num2;
			$division = $num1 / $num2;
			echo "The sum of $num1 and $num2 is: $sum <br>";
			echo "The subtraction of $num1 and $num2 is: $subtraction <br>";
			echo "The multiplication of $num1 and $num2 is: $multiplication <br>";
			echo "The division of $num1 and $num2 is: $division <br>";
		}

		getSum(20, 30);
	?>
</body>
</html>