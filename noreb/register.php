<?php
session_start();
ob_start();
$signupform='functions/signup.php'; 
if(file_exists($signupform) && is_readable($signupform))
 {
	 require_once($signupform);
 }
?>
<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="signform.css" rel="stylesheet" type="text/css" />
<script src="./scripts/validator.js"></script>
</head>
<body>
<div id='container'>
<?php require_once("includes/header-register.php")?>
<div id ="menu">
		      <?php
			     $menu='nav.php';
				 if(file_exists($menu)&& is_readable($menu))
				 {
				    include_once($menu);
				 }
			  ?>
		   </div>

<div id='content'>
<?php
   regform();
 ?> 
</div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>
