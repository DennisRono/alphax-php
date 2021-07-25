<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signform.css">
</head>
<body>
    <div id="container">
        <?php require_once("includes/header-members.php") ?>
        <?php
            $menu='nav.php';
            if(file_exists($menu) && is_readable($menu)){
                include_once($menu);
            }
        ?>
        <div id="content">
            <?php
                echo '<h2>Welcome to NOREB Fraternity &nbsp';
                if (isset($_SESSION['lname'])){
                    echo "{$_SESSION['lname']}";
                }
                echo '</h2>';
                ?>
        </div>
    </div>
</body>
</html>