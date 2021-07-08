<!DOCTYPE html>
<html lang="en">
<head>
<title>Strings</title>
</head>
<body>
	<?php
		$t = date("H");
		if($t>"20"){
			echo "Have a good day";
		} else {
			echo "Have a good night";
		}
		
		$d = date("M");
		if($d == "Mon"){
			echo "Time and Day to got to work";
		} else if($d == "SAT") {
			echo "Enjoy your Weekend";
		} else {
			echo "Have a nice day";
		}
	?>
</body>
</html>