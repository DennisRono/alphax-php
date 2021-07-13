<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singleton</title>
    <style>
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
    <h3>Using a singleton Config object</h3>
    <?php
        //Load a class definition:
        require('config.php');

        //Create the object
        $CONFIG = Config::getInstance();

        //Set some value:
        $CONFIG->set('live', 'true');

        // confirm the current value:
        echo '<p>$CONFIG["live"]:'.$CONFIG->get('live').'</p>';

        //create a second object to confirm:
        $TEST = config::getInstance();
        echo '<p>$TEST["live"]:'.$TEST->get('live').'</p>';

        //Delete the objects:
        unset($CONFIG, $TEST);
    ?>
</body>
</html>