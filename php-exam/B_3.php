<?php
error_reporting(0);
$error = "";
$msg = "";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if(empty($username) || empty($pass)){
            $error = "inputs cannot be empty";
        } else {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $pass;
            setcookie("User", $username . "," . $pass);

            // fetching details
            if(isset($_COOKIE["User"])){
                $pieces = explode(",", $_COOKIE["User"]);
                $username = $pieces[0];
                $pass = $pieces[1];
                $r = $_SESSION['username'];
                $y = $_SESSION['password'];
                $msg = "Cookie saved as username = $username and Password saved as $pass <br> Session saved as $r and $y";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PART B Question 3</title>
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
    <form action="B_3.php" method="post">
        <div>
            <h1>Login</h1>
            <p style="color: red;"><?php echo $error; ?></p>
            <p style="color: green;"><?php echo $msg; ?></p>
        </div>
        <label for="username">Username</label><br>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) {echo $_POST['username'];} ?>"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" value="<?php if(isset($_POST['password'])) {echo $_POST['password'];} ?>"><br>
        <input class="button" type="submit" name="submit" value="Login">
    </form>
</body>
</html>