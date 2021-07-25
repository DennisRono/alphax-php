<?php 
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{ header("Location: login.php");
exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8> <!--important for escaping problem characters-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="signform.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id='container'>
<?php require_once("includes/header-admin.php")?>
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
<!doctype html>
<html lang=en>
<head>
<title>Edit a record</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body>
<div id="container">
<?php
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { 
$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { 
$id = $_POST['id'];
} else { // If no valid ID, stop the script
echo '<p class="error">This page has been accessed in error</p>';
exit();
}
require ('includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$errors = array();
if (empty($_POST['fname'])) {
$errors[] = 'You forgot to enter the first name.';
} else {
$fn = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
}
if (empty($_POST['lname'])) {
$errors[] = 'You forgot to enter the last name.';
} else {
$ln = mysqli_real_escape_string($dbcon, trim($_POST['lname']));
}
if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter the email address.';
} else {
$e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
}
if (empty($errors)) { // If everything is OK, make the update query 
// Check that the email is not already in the users table
$q = "UPDATE wazalendo SET fname='$fn', lname='$ln', email='$e' WHERE user_id = $id LIMIT 1";
$result = @mysqli_query ($dbcon, $q);
if (mysqli_affected_rows($dbcon) == 1) { // If it ran OK
echo '<h3>The user has been edited.</h3>';
} else { 
echo '<p class="error">The user could not be edited due to a system error.
We apologize for any inconvenience.</p>'; // Error message.
echo '<p>' . mysqli_error($dbcon) . '<br />Query: ' . $q . '</p>'; // Debugging message.
}
} else { 
echo '<p class="error">The email address has already been registered.</p>';
}
}
$q = "SELECT fname, lname, email FROM wazalendo WHERE user_id = $id";
$result = @mysqli_query ($dbcon, $q);
if (mysqli_num_rows($result) == 1) { 
$row = mysqli_fetch_array ($result, MYSQLI_NUM);
// Create the form
echo '<form action="edit_record.php" method="post">
<fieldset>
<legend>Edit Record</legend>
<p><label class="label" for="fname">First Name:</label><br>
<input id="fname" type="text" name="fname" size="20" maxlength="20" value="' . $row[0] . '"></p>
<p><label class="label" for="lname">Last Name:</label><br>
<input type="text" name="lname" size="20" maxlength="20" value="' . $row[1] . '"></p>
<p><label class="label" for="email">Email Address:</label><br>
<input  type="text" name="email" size="20" maxlength="20" value="' . $row[2] . '"></p>
<p><input id="submit"  type="submit" name="submit" value="Edit"></p>
<br><input type="hidden" name="id" value="' . $id . '" />
</fieldset>
</form>';
} else { 
echo '<p class="error">This page has been accessed in error</p>';
}
mysqli_close($dbcon);
?>

</div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>