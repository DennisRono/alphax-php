<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Returning Array with Functions</title>
</head>
<body>
<?php
	function divideNumbers($dividend, $divisor){
		$quotient = $dividend/$divisor;
		$array = array($dividend, $divisor, $quotient);
		return $array;
	}

	//assign Variables as if they were an array

	list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
	echo $dividend."<br>";
	echo $divisor."<br>";
	echo $quotient."<br>";
?>
</body>
</html>