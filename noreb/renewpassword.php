<?php
session_start();
ob_start();
$newpassword ='functions/renewpass.php'; 
if(file_exists($newpassword) && is_readable($newpassword))
 {
	 require_once($newpassword);
 }
?>
<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8> <!--important for escaping problem characters-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="signform.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='scripts/validator.js'></script>
</head>
<body>
<div id='container'>
<?php require_once("includes/header.php")?>
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
   renewpass();
 ?> 
 </div>
<?php require_once("includes/footer.php")?>
</body>
</html>
