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
<body>
    <p>Hello, <?php echo $_COOKIE['username']; ?> Karibu tena</p>
    <form action="auth.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>