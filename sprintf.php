<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbuilt function</title>
</head>
<body>
    <?php
        $num = 20000;
        $ppe = 'Frontline healthcare workers';
        $format = 'We have received %d protective Personal equipment from Jack Ma Foundation for %s in the country to combat Covid-19 pandemic';
        echo sprintf($format, $num, $ppe);
    ?>
</body>
</html>