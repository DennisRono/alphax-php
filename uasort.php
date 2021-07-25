<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting multidimensional arrays</title>
    <style type="text/css">
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
        //Create the array and structure
        //studentID => array('name'=>'Name','grade'=>XX.X)
        $students = array(
            001 => array('name' => 'Nafula','grade' => 98.5),
            002 => array('name' => 'Wanjiku','grade' => 81.5),
            003 => array('name' => 'Adeku','grade' => 94.0),
            004 => array('name' => 'Olama','grade' => 85.1),
            005 => array('name' => 'Wangoi','grade' => 74.6)
        );

        //Name sorting function
        function name_sort($x, $y){
            return strcasecmp($x['name'], $y['name']);
        }
        //Sort the grade function in descending order
        function grade_sort($x, $y){
            return ($x['grade']<$y['grade']);
        }
        //Print the array as it is:
        echo '<h3> The Array in its Original structure: </h3><pre>'.print_r($students, 1). '</pre>';
        //sort by name:
        uasort($students, 'grade_sort');
        echo '<h3> Array Sorted By Grade </h3> <pre>'. print_r($students, 1). '</pre>';
    ?>
</body>
</html>