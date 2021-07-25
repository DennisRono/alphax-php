<?php
    $submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <style type="text/css">
        <!--
            body{
                font-family: Verdana,Arial,Helvetica, sans-serif;
                font-weight: normal;
                background-color: #dddddd;
            }
        -->
    </style>
</head>
<?php
    setcookie('username', $_POST['username']);
    $submitted = !empty($_POST);    
?>
<html>
<body>
    <p>Form submitted? <?php echo (int) $submitted; ?></p>
    <p>Your Login info is</p>
    <ul>
    <li><b>Username:</b> <?php echo $_POST['username']; ?></li>
    <li><b>Password:</b> <?php echo $_POST['password']; ?></li>
    </ul>
</body>
</html>