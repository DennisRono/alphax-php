<?php
session_start();
ob_start();
$loginform='functions/userconfirm.php'; 
if(file_exists($loginform) && is_readable($loginform))
 {
	 require_once($loginform);
 }
?>
<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="signform.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id='container'>
<?php require_once("includes/header-login.php")?>
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
   logform();
 ?> 
</div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>
