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
<?php require_once("includes/header-listing.php")?>
<div id='content'>
<h2 class="center" >Search for a Record</h2>
<form action="view_found_record.php" method="post">
<fieldset>
<legend>Enter the Reference Number</legend>
<p><label for="ref_num"><b>Reference Number:</b></label><input id="ref_num" type="text" name="ref_num" size="6" maxlength="6" 
value="<?php if (isset($_POST['ref_num'])) echo $_POST['refnum']; ?>"></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<input id="submit" type="submit" name="submit" value="Search"></p>
</fieldset>
</form>
</div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>
