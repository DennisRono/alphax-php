<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>natsort function</title>
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
    <?php
        $array1 = $array2 = array("cat12.jpg","cat10.jpg","cat2.jpg","cat1.jpg");
        asort($array1);
        echo "Standard sorting \n";
        print_r($array1);
        echo "<hr>";
        echo "<br>";
        natsort($array2);
        echo "\nNatural order sorting in a human being would\n";
        echo "<hr>";
        print_r($array2);
        echo "<hr>";
    ?>
</body>
</html>