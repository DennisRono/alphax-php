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

<?php
    //load the class definition using autoload:
    function __autoload($class){
        require_once("class/$class.php");
    }

    // Minimal validation
    if (isset($_GET['shape'], $_GET['dimensions'])){


        //Create the new object
        $obj = shapeFactory::create($_GET['shape'],
        $_GET['dimensions']);

        //print a little introduction
        echo "<h2>Creating a {$_GET['shape']}...";

        //Print the area
        echo '<p> The area is '.$obj->getArea(). '</p>';

        //Print the Perimeter
        echo"<p>The perimeter is ".$obj->getPerimeter() . "</p>";
    } else {
        echo '<p class="error">Please provide a shape type and size. </p>';
    }

    //Delete the object:
    unset($obj);
?>

</body>
</html>