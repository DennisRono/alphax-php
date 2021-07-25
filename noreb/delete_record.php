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
</head>
<body>
    <div id="container">
    <?php require_once("includes/header-admin.php")?>
        <?php
            $menu='nav.php';
            if(file_exists($menu)&& is_readable($menu))
            {
                include_once($menu);
            }
        ?>
        <div id="content">
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Delete a record</title>
                <link rel="stylesheet" href="includes.css">
            </head>
            <body>
                <div id="container">
                    <h2>Delete a record</h2>
                    <?php
                    if(isset($_GET['id']) && (is_numeric($_GET['id']))){
                        $id = $_GET['id'];
                    } else if ((isset($_POST['id'])) && (is_numeric($_POST['id']))){
                        $id = $_POST['id'];
                    } else {
                        echo '<p class="error>This page has been accessed in error</p>';
                        exit();
                    }
                    require('includes/config.php');
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if($_POST['sure'] == 'Yes'){
                            $q = "DELETE FROM wazalendo WHERE user_id=$id LIMIT 1";
                            $result = @mysqli_query($dbcon, $q);
                            if(mysqli_affected_rows($dbcon) == 1){
                                echo '<h3>The record has been deleted.</h3>';
                            } else {
                                echo '<p class="error">The record could not be deleted.<br>Probably because it does not exist or due to a system error.</p>';
                                echo '<p>'.mysqli_error($dbcon).'<br>Query: '.$q.'</p>';
                            }
                        } else {
                            echo '<h3>The user has NOT been deleted.</h3>';
                        }
                    } else {
                        $q = "SELECT CONCAT(fname, '',lname) FROM wazalendo WHERE user_id=$id";
                        $result = @mysqli_query($dbcon, $q);
                        if(mysqli_num_rows($result) == 1){
                            $row = mysqli_fetch_array($result, MYSQLI_NUM);
                            echo "<h3>Are you sure you want to permanently delete $row[0]?</h3>";
                            echo'<center><form action="delete_record.php" method="POST">
                            <input id="submit-yes" type="submit" name="sure" value="Yes">
                            <input id="submit-no" type="submit" name="sure" value="No">
                            <input type="hidden" name="id" value="'.$id.'">
                            </form></center>';
                    } else {
                        echo '<p class="error">This page has been accessed in error</p>';
                        echo '<p>&nbsp;</p>';
                    }
                }
                mysqli_close($dbcon);
                    ?>
                </div>
            </body>
            </html>
        </div>
    </div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>