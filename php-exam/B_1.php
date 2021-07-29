<?php
error_reporting(0);
$error = "";
$msg = "";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if(empty($email) || empty($pass)){
            $error = "inputs cannot be empty";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PART B Question One</title>
    <style>
        input{
            margin-bottom: 10px;
        }
        .button{
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <form action="B_1.php" method="post">
        <div>
            <h1>Login</h1>
            <p style="color: red;"><?php echo $error; ?></p>
            <p style="color: green;"><?php echo $msg; ?></p>
        </div>
        <label for="email">Email Address</label><br>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];}?>" required><br>
        <label for="password">Password</label><br>
        <input type="password"  name="password" value="<?php if(isset($_POST['password'])) { echo $_POST['password'];}?>" required><br>
        <input class="button" type="submit" name="submit" value="Login">
    </form>
</body>
</html>