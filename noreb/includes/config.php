<?php
// This file provides the information for accessing the database and connecting to MySQL. It also sets the language coding to utf-8

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cojomds');

$dbcon = @mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME)

OR die ('Could not connect to MySQL: ' . mysqli_connect_error () ); 

mysqli_set_charset($dbcon, 'utf8');

?>