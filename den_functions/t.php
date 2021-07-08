<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Functions</title>
</head>
<body>
	<?php
		//Defining a function
	function leo(){
		echo "Today is" .date('l', mktime());
	}
	//calling of a function
	leo();
	?>
</body>
</html>