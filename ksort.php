<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksort function</title>
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
        echo "Best IT Jobs 2021 in no particular order";
        echo"<p>";

        $IT_Proffessions = array("5"=>"Mobile application developer","3"=>"Information Security Analyst","6"=>"Web Developer","2"=>"Cloud Solutions Architect","1"=>"Data Scientist","4"=>"Data Scientist","7"=>"Network Engineer");
    ksort($IT_Proffessions);
    foreach($IT_Proffessions as $key => $val){
        echo "$key = $val\n";
        echo "<br>";
    }
    ?>
    <p>
    <?php
    echo "Fruits likely to be found in a grocery";
    echo "<p>";
    $fruits = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
    ksort($fruits);
    foreach ($fruits as $key=> $val){
        echo "$key = $val\n";
        echo "<br>";
    }
    ?>
    </p>
</body>
</html>