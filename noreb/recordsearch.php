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
    <link rel="stylesheet" href="style.css">
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
        <h2>Search Result</h2>
        <?php
            require_once("includes/config.php");
            echo '<center><p>If no record is shown, this is because you had an incorrect or missing entry in the search form. <br>
            Click the back button on the browser and try again</p></center>';

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $lname = mysqli_real_escape_string($dbcon, $lname);

            $q = "SELECT lname,fname,email,DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat,user_id FROM wazalendo WHERE lname='$lname' AND fname='$fname' ORDER BY registration_date ASC";
            $result = @mysqli_query($dbcon, $q);
            if($result){
                echo '<table>
                <tr><td><b>Edit</b></td>
                <td><b>Delete</b></td>
                <td><b>Last Name</b></td>
                <td><b>First Name</b></td>
                <td><b>Email</b></td>
                <td><b>Date Registered</b></td>
                </tr>';

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '
                    <tr>
                    <td><a href="edit_record.php?id='.$row['user_id'].'">Edit</a></td>
                    <td><a href="delete_record.php?id='.$row['user_id'].'">Delete</a></td>
                    <td>'.$row['lname'].'</td>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['regdat'].'</td>
                    </tr>
                    ';
                }
                echo '</table>';
                mysqli_free_result($result);
            } else {
                echo '<p class="error">The current users could not be retrieved. We apologise for any inconveniences</p>';

                echo '<p>'.mysqli_error($dbcon).'<br>Query: '.$q.'</p>';
            }
            $q = "SELECT COUNT(user_id) FROM wazalendo";
            $result = @mysqli_query($dbcon, $q);
            $row = @mysqli_fetch_array($result, MYSQLI_NUM);
            $users = $row[0];
            mysqli_close($dbcon);
            echo '<center><p>Total users: '.$users.'</p></center>';
        ?>
    </div>
    </div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>