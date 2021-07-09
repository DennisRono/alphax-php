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
        //include the first class definition using autoload.
        function __autoload($class){
            require_once("classes/$class.php");
        }

        //Create the square class.
        class Square extends Triangle {
            // Constructor takes one argument. This value is assigned to the Reactangle width and height attributes.
            function __construct($side=0){
                $this->width = $side;
                $this->height = $side;
            }

        } // End of Square class
         //Rectangle dimensions:
         $width = 20;
         $height = 45;

         echo  "<h2> With a width of $width and a height of $ height...</h2>";

         //Create new rectangle
         $r = new Rectangle($width, $height);

         //Print the area.
         echo '<p> The area of the rectangle is '.$r->getArea().'</p>';

         //Print the perimeter.
         echo '<p> The perimeter of the rectangle is '.$r->getPerimeter().'</p>';
         //Square dimensions:
         $side = 60;
         echo "<h2> With each side being $side...</h2>";

         //Create new object:
         $s = new Square($side);
         //Print the area
         echo '<p> The area of the square is '.$s->getArea().'</p>';
         //Print the perimeter.
         echo '<p> The perimeter of the square is '.$s->getPerimeter().'</p>';
         //Delete the objects
         unset($r,$s);
    ?>
</body>
</html>