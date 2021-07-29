<?php
$a = function(){
    include('class.definitions.php');
};
spl_autoload_register($a);
$abc = new Star;
$xyz = new Sky;