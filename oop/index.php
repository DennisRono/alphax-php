<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swahili Translation (Hujambo) in Native languages</title>
    <style type="text/css">
        <!--
            body{
                font-family: Arial, Helvetica, sans-serif;
                font-weight: normal;
                background-color: #dddddd;
            }
        -->
    </style>
</head>
<body>
    <?php
        // Include the class definition:
        require('Hujambo.php');
        //Create the object:
        $obj = new hujambo();
        //call the hujambo() method:
        $obj->hujambo();
        //Say hujambo in different languages:
        $obj->hujambo('Luhya');
        $obj->hujambo('Kikuyu');
        $obj->hujambo('Kisii');
        //Delete the object:
        unset($obj);
    ?>
</body>
</html>