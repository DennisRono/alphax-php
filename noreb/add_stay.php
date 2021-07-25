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
        <?php require_once("includes/header-listing.php"); ?>
        <div id="content">
            <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $errors = array();

                    if(empty($_POST['loctn'])){
                        $errors[] = 'You forgot to select the location';
                    } else {
                        $loctn = trim($_POST['loctn']);
                    }
                    if(!empty($_POST['price'])){
                        $price = preg_replace('/\D+/', '', ($_POST['price']));
                    }
                    if(empty($_POST['type'])){
                        $errors[] = 'You forgot to select the type of stay.';
                    } else {
                        $type = trim($_POST['type']);
                    }

                    if (empty($_POST['mini_descr'])){
                        $errors[] = 'You forgot to enter the brief description'; 
                    } else {
                        $mini_descr = strip_tags(($_POST['mini_descr']));
                    }

                    if(empty($_POST['b_rooms'])){
                        $errors[] = 'You forgot to select the number of bedrooms';
                    } else {
                        $b_rooms = ($_POST['b_rooms']);
                    }

                    if(empty($_POST['thumb'])){
                        $errors[] = 'You forgot to enter the thumbnail url';
                    } else {
                        $thumb = ($_POST['thumb']);
                    }

                    if(empty($_POST['status'])){
                        $errors[] = 'You forgot to select the status of the stay under consideration';
                    } else {
                        $status = ($_POST['status']);
                    }

                    if (empty($errors)){
                        require ('includes/config.php');
                        $q = "INSERT INTO stays(ref_num,loctn,price, type, mini_descr, b_rooms, thumb, status) VALUES(' ', '$loctn', '$price', '$type', '$mini_descr', '$b_rooms', '$thumb', '$status')";
                        $result = @mysqli_query($dbcon, $q);
                        if($result){
                            echo '<h2> The house was successfully registered</h2><br>';
                        } else {
                            echo '<h2>System Error</h2>
                            <p class="error">The house could not be added due to a system error. We appologise for any inconveniences</p>
                            ';
                            echo '<p>'.mysqli_error($dbcon).'<br>Query: '.$q.'</p>';
                        }
                        mysqli_close($dbcon);
                    } else{
                        echo '<h2>Error!</h2>
                        <p class="error">The following error(s) occurred: <br>
                        ';
                        foreach ($errors as $msg){
                            echo " $msg<br>\n";
                        }
                        echo '</p><h3>Please try again.</h3><p><br></p>';
                    }
                }
            ?>
            <form action="add_stay.php" method="post">
                <fieldset>
                    <legend>Add a stay</legend>
                    <p>
                        <label for="" class="label"><b>Location:</b></label><br>
                        <select name="loctn" id="">
                            <option value="">-select-</option>
                            <option value="Uasingishu">Uasin Gishu</option>
                            <option value="Marakwet">Marakwet</option>
                            <option value="Nandi">Nandi</option>
                        </select><br>
                    </p>
                    <p>
                        <label for="price" class="label"><b>Price: </b></label><br>
                        <input type="text" id="price" name="price" size="9" maxlength="9" value="<?php if(isset($_POST['price'])) echo $_POSt['price']; ?>">
                    </p>
                <p>
                    <label for="" class="label"><b>Type:</b></label><br>
                    <select name="type" id="">
                        <option value="">-select-</option>
                        <option value="houses">Bungalow House</option>
                        <option value="apartment">Detached apartments</option>
                        <option value="cottages">Exclusive cottages</option>
                    </select><br>
                </p>
                <p>
                    <label for="thumb" class="label"><b>Thumbnail:</b></label><br>
                    <input type="text" id="thumb" name="thumb" size="45" maxlength="45" value="<?php if(isset($_POST['thumb'])) echo $_POSt['thumb']; ?>">
                </p>
                <p>
                    <label for="" class="label"><b>Brief description:</b></label><br>
                    <textarea name="mini_descr" id="" cols="40" rows="3"></textarea>
                </p>
            <p>
                <label for="" class="label"><b>bedrooms:</b></label><br>
                <select name="b_rooms" id="">
                    <option value="">-select-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br>
            </p>
            <p>
                <label for="" class="label"><b>URL for FULL Description:</b></label><br>
                <input type="text" id="full_spec" name="full_spec" size="60" maxlength="60" value="<?php if(isset($_POST['full_spec'])) echo $_POSt['full_spec']; ?>">
            </p>
            <p>
                <label for="" class="label"><b>Status:</b></label><br>
                <select name="status" id="">
                    <option value="">-select-</option>
                    <option value="Available">Available</option>
                    <option value="Booked">Booked</option>
                </select>
            </p>
            <p>
                <input type="submit" id="submit" name="submit" value="Add">
            </p>
                </fieldset>
            </form>
        </div>
    </div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>