<?php
session_start();
if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)){
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
    <style>
        h3.red{
            color: red;
            font-size: 105%;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
    <?php require_once("includes/header-admin.php")?>
    <div id ="menu">
        <?php
            $menu='nav.php';
            if(file_exists($menu)&& is_readable($menu))
            {
                include_once($menu);
            }
        ?>
    </div>
    <div id="content">
        <h3 class="red">Both Name are required items</h3>
        <form action="recordsearch.php" method="post">
            <fieldset>
                <legend>Search for a Record</legend>
                <p>
                <label for="fname" class="label">First Name: </label>
                <input type="text" name="fname" id="fname" size="30" maxlength="30" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
                 </p>
                 <p>
                <label for="lname" class="label">Last Name: </label>
                <input type="text" name="lname" id="lname" size="30" maxlength="40" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>">
                 </p>
                 <p><input type="submit" id="submit" name="submit" value="Search"></p>
            </fieldset>
        </form>
    </div>
    </div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>