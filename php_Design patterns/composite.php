<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composite</title>
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
    require('WorkUnit.php');

    $alpha = new Team('Alpha');
    $john = new Employee('John');
    $cynthia = new Employee('Cynthia');
    $rashid = new Employee('Rashid');

    $alpha->add($john);
    $alpha->add($rashid);

    $alpha->assignTask('Do something great.');
    $cynthia->assignTask('Do somethinng grand.');

    $alpha->completeTask('Do something great.');

    $alpha->remove($john);

    unset($alpha, $john, $cynthia, $rashid);
?>

</body>
</html>