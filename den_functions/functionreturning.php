<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Function returning values</title>
</head>
<body>
<?php
	//Defining a function

	function getSum($num1, $num2){
		$total = $num1 + $num2;
		return $total;
	}

	//printing returned value
	echo getSum(50, 100);
?>
</body>
</html>