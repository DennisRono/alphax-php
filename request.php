<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of PHP $_REQUEST variable</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['name'])){
            echo "<p>Hi, ".$_REQUEST['name']."</p>";
            echo "<p>Your username is, ".$_REQUEST['username']."</p>";
            echo "<p>Your email is, ".$_REQUEST['email']."</p>";
            echo "<p>You are, ".$_REQUEST['age']." years old</p>";
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        <br><br>
        <!-- username, email and age -->
        <label for="inputUsername">Username:</label>
        <input type="text" name="username" id="inputUsername">
        <br><br>
        <label for="inputEmail">Email:</label>
        <input type="email" name="email" id="inputEmail">
        <br><br>
        <label for="inputAge">Age:</label>
        <input type="text" name="age" id="inputAge">
        <br><br>
        <input type="submit" Value="Submit">
    </form>
</body>
</html>