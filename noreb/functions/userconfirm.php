<?php
  function logform()
  { 
 ?>
 <?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require ('includes/config.php');
  
  if (!empty($_POST['username'])) {
	  $un = mysqli_real_escape_string($dbcon, $_POST['username']);
  } else { 
  $un = FALSE;
    echo '<p class="error">You forgot to enter your username.</p>';
  }
 
  if (!empty($_POST['password'])) {
	  $p = mysqli_real_escape_string($dbcon, $_POST['password']);
 } else {

  $p = FALSE;
    echo '<p class="error">You forgot to enter your password.</p>';
   }
   if ($un && $p){
   $q = "SELECT user_id, lname, user_level FROM wazalendo WHERE 
         (username ='$un' AND password = md5('$p'))";
   $result = mysqli_query ($dbcon, $q);
   if (@mysqli_num_rows($result) == 1) {//if one database row (record) matches the input:-
   // Start the session, fetch the record and insert the three values in an array
   session_start(); 
   $_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
// Ensure that the user level is an integer.
  $_SESSION['user_level'] = (int) $_SESSION['user_level'];
  // Use a ternary operation to set the URL
  $url = ($_SESSION['user_level'] === 1) ? 'admin.php' : 'users.php';
  header('Location: ' . $url); // Make the browser load either the users ’ or the admin page
  exit(); // Cancel the rest of the script
  mysqli_free_result($result);
  mysqli_close($dbcon);
  } else { 
 echo '<p class="error">The Username and password entered do
        not match our records</p>';
   }
 } else { 
 echo '<p class="error">Please try again.</p>';
 }
mysqli_close($dbcon);
} // End of SUBMIT conditional.
 
?>
<form  action ="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>Login</legend>
<p><label class ="label" for="username"><b>User Name *</b></label><br />
<input id="username" type="text" name="username" size="20" maxlength="40" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></p>
<p><label class ="label" for='password' ><b>Password*:</b></label><br/>
<input id="password" type="password" name="password" size="20" maxlength="12" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" ></p>
<p><input id="submit" style="cursor:pointer;"type="submit" name="submit" value="Login"></p>
</fieldset>
<p>Don't have an account? <a href="register.php">Register here</a>.</p>
</form>
     <?php
  }
?>  
 