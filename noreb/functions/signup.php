<?php
  function regform()
  { 
 ?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   require ('includes/config.php');
   $errors = array(); 
   if (empty($_POST['fname'])) {
   $errors[] = 'You forgot to enter your first name.';
	}
	else { $fn = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
	}
    if (empty($_POST['lname'])) {
   $errors[] = 'You forgot to enter your last name.';
	}
   else { $ln = mysqli_real_escape_string($dbcon, trim($_POST['lname']));
    }
   if (empty($_POST['email'])) {
   $errors[] = 'You forgot to enter your email address.';
   }
   else { $e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
   }
   if (empty($_POST['username'])) {
   $errors[] = 'You forgot to enter your username.';
   }
   else { $un = mysqli_real_escape_string($dbcon, trim($_POST['username']));
   }
   
   if (!empty($_POST['password'])) {
   if ($_POST['password'] != $_POST['password2']) {
   $errors[] = 'Your passwords d0 not match.';
   }
   else { $p = mysqli_real_escape_string($dbcon, trim($_POST['password']));
   }
   }
  else { $errors[] = 'You did not enter your password.';
   }
  if (empty($errors)) {
  $q = "INSERT INTO wazalendo (fname, lname, email,username, password)VALUES ('$fn', '$ln', '$e','$un', md5('$p'))";
  $result = @mysqli_query ($dbcon, $q);  
  if ($result) { 
  header ("location: login.php"); 
   exit(); 
}
else { 
echo '<h2>System Error</h2>
<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} 
mysqli_close($dbcon); 

include ('footer.php');
exit();
}
else { // Display the errors
echo '<h2>Error!</h2>
<p class="error">The following error(s) occurred:<br>';
foreach ($errors as $msg) {  
echo " - $msg<br>\n";
}
echo '</p><h3>Please try again.</h3><p><br></p>';
}
} 
?>
<form  id="signup" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>Registration Form</legend>
<p><label class ="label" for="fname"><b>First Name *</b></label><br />
<input id="fname" type="text" name="fname" size="20" maxlength="30" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p>
<p><label class = "label" for="name"><b>Last Name *</b></label><br />
<input id="lname" type="text" name="lname" size="20" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
<p><label class ="label" for="email"><b>Email Address *</b></label><br />
<input id="email" type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
<p><label class ="label" for="username"><b>User Name *</b></label><br />
<input id="username" type="text" name="username" size="20" maxlength="40" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></p>
<p><label class ="label" for='password' ><b>Password*:</b></label><br/>
<input id="password" type="password" name="password" size="12" maxlength="12" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" >&nbsp; Between 8 and 12 characters.</p>
<p><label class ="label" for='password2' ><b>Confirm Password*:</b></label><br/>
<input id="password2"  type="password" name="password2" size="12" maxlength="12" value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>" ></p>
<p><input id="submit" style="cursor:pointer;"type="submit" name="submit" value="Register"></p>
</fieldset>
<p>Already have an account? <a href="login.php">Login here</a>.</p>
</form>
     <?php
  }
?>  
 