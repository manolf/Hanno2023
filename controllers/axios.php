<?php

// define('DB_DATABASE','Advent2022');
// define('DB_USERNAME','root');
// define('DB_PASSWORD', 'm2d2023');
// define('DB_HOST', '127.0.0.1');
// define('DB_CHARSET','utf8');

// define('DB_DATABASE','Advent2022');
// define('DB_USERNAME','root');
// define('DB_PASSWORD', '3');
// define('DB_HOST', '127.0.0.1');
// define('DB_CHARSET','utf8');

$host = "127.0.0.1";
$user = "root";
$password = "m2d2023";
$dbname = "Advent2022";

$con = mysqli_connect($host, $user, $password, $dbname);

if(!$con){
    die('keine Verbindung Axios: ' . mysqli_connect_error());
}