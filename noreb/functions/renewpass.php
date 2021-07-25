<?php
  function renewpass()
  { 
 ?>
<?php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
require ('includes/config.php'); 
 
$errors = array(); 

if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter your email address.';
} else {
$e = mysqli_real_escape_string($dbcon, trim($_POST['email'])); 
}
// Check for the current password:
if (empty($_POST['password'])) {
$errors[] = 'You forgot to enter your current password.';
} else {
$p = mysqli_real_escape_string($dbcon, trim($_POST['password']));
}
// Check for a new password and match against the confirmed password:
if (!empty($_POST['psword1'])) {
if ($_POST['psword1'] != $_POST['psword2']) {
$errors[] = 'Your new password did not match the confirmed password.';
} else {
$np = mysqli_real_escape_string($dbcon, trim($_POST['psword1']));
}
} else {
$errors[] = 'You forgot to enter your new password.';
}
if (empty($errors)) { 

$q = "SELECT user_id FROM wazalendo WHERE (email='$e' AND password = SHA1('$p') )";
$result = @mysqli_query($dbcon, $q);
$num = @mysqli_num_rows($result);
if ($num == 1) { 

$row = mysqli_fetch_array($result, MYSQLI_NUM);
// Make the UPDATE query:
$q = "UPDATE wazalendo SET password = SHA1('$np') WHERE user_id = $row[0]";
$result = @mysqli_query($dbcon, $q);
if (mysqli_affected_rows($dbcon) == 1) { 
echo '<h2>Thank you!</h2>
<h3>Your password has been updated.Click Login</h3>';
} else { 

echo '<h2>System Error</h2>
<p class="error">Your password could not be changed due to a system error.
We apologize for any inconvenience.</p>';
// Debugging message
echo '<p>' . mysqli_error($dbcon) . '<br /><br />Query: ' . $q . '</p>';
}
mysqli_close($dbcon); // Close the database connection.
exit();
} else { // Invalid email address/password combination.
echo '<h2>Error!</h2>
<p class="error">The email address and password do not match 
   those on the system.</p>';
}
} else { 
echo '<h2>Error!</h2>
<p class="error">The following error(s) occurred:<br />';
foreach ($errors as $msg) { 
echo " - $msg<br />\n";
}
echo '</p><p class="error">Please try again.</p><p><br /></p>';
} 
mysqli_close($dbcon); 
} 
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>Change Your Password</legend>
<form action="register-password.php" method="post">
<p><label class="label" for="email">Email Address:</label><br/>
<input id="email" type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" ></p>
<p><label class="label" for="psword">Current Password:</label><br/>
<input id="password" type="password" name="password" size="20" maxlength="12" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"></p>
<p><label class="label" for="psword1">New Password:</label><br/>
<input id="psword1" type="password" name="psword1" size="20" maxlength="12" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>"></p>
<p><label class="label" for="psword2">Confirm New Password:</label><br/>
<input id="psword2" type="password" name="psword2" size="20" maxlength="12" value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>"></p>
<p><input id="submit"type="submit" name="submit" value="Change Password"></p>
</fieldset>
</form>
     <?php
  }
?>  
 