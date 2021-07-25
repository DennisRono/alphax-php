<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)){
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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./signform.css">
</head>
<body>
    <div id="container">
        <?php require_once("includes/header-admin.php") ?>
        <div id="menu">
            <?php
                $menu='nav.php';
                if(file_exists($menu) && is_readable($menu)){
                    include_once($menu);
                }
            ?>
        </div>
        
        <div id="content">
            <?php
                echo '<h2> Welcome to Admin Dashboard &nbsp;';
                if(isset($_SESSION['lname'])){
                    echo "{$_SESSION['lname']}";
                }
                echo '</h2>';
            ?>
        </div>
    </div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>