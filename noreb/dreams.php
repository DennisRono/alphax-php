<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stays.css">
    <style type="text/css">
    table { width:860px; border-collapse:collapse; }
    td { padding-left:5px; padding-right:5px; }
    h3 { text-align:center; font-size:130%; font-weight:bold; }
    </style>
</head>
<body>
    <div id="container">
        <?php include_once("includes/header-listing.php"); ?>
        <div id="content">
        <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $errors = array();
                    if(empty($_POST['loctn'])){
                        $errors[] = 'You forgot to select the location';
                    } else {
                        $loctn = trim($_POST['loctn']);
                    }
                    if(empty($_POST['price'])){
                        $errors[] = 'You forgot to select the Price';
                    } else {
                        $price = trim($_POST['price']);
                    }
                    if(empty($_POST['type'])){
                        $errors[] = 'You forgot to select the type of house.';
                    } else {
                        $type = trim($_POST['type']);
                    }
                    if(empty($_POST['b_rooms'])){
                        $errors[] = 'You forgot to select the number of rooms';
                    } else {
                        $rooms = trim($_POST['b_rooms']);
                    }

                    if (empty($errors)){
                        require ('includes/config.php');
                        $q = "SELECT * FROM stays WHERE loctn = '$loctn' AND price = '$price' AND type = '$type' AND b_rooms = '$rooms'";
                        //$r = "INSERT INTO stays(loctn,price,type,mini_descr,b_rooms,thumb,status) VALUES('$loctn','$price','$type','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ','$rooms','images/house2.jpg height="."50"." width="."50"."','Available')";
                        //echo $q . "<br>" . $r;
                        $result = @mysqli_query($dbcon, $q);
                        //$result1 = @mysqli_query($dbcon, $r);
                        echo '<table>
                        <tr>
                        <td><b>Ref-Num</b></td>
                        <td><b>Location</b></td>
                        <td><b>Thumb</b></td>
                        <td><b>Price</b></td>
                        <td><b>Features</b></td>
                        <td><b>Bedrms</b></td>
                        <td><b>Status</b></td>
                        </tr>';
                        // Fetch and print all the records
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo '<tr>
                            <td>' . $row['ref_num'] . '</td>
                            <td>' . $row['loctn'] . '</td>
                            <td> <img src='.$row['thumb'] . '></td>
                            <td>' . $row['price'] . '</td>
                            <td>' . $row['mini_descr'] . '</td>
                            <td>' . $row['b_rooms'] . '</td>
                            <td>' . $row['status'] . '</td>
                            </tr>';
                        }
                        echo '</table>';
                    }
                }
            ?>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>