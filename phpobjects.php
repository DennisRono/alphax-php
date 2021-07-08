<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
</head>
<body>
	<?php
	class county{
		public $str = "uasin Gishu";
		function Show_county(){
			return $this->str;
		}
	}
	$town = new county;
	var_dump($town);
	?>
</body>
</html>

