<?php

define ('DB_SERVER', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'login');

$mysqli = new mysqli (DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($mysqli === false){
    die("ERROR: could not connect ". $mysqli->connect_error);
}