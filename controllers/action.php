<?php

// require_once CONFIG_DIR .'/database.php';

define('DB_DATABASE','Advent2022');
define('DB_USERNAME','root');
define('DB_PASSWORD', 'm2d2023');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET','utf8');

$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",DB_HOST, DB_DATABASE,DB_CHARSET);

$connect = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->action == 'fetchall')
{
    $query = 
    "SELECT dayId, beschreibung, elfPic, easy, hard FROM day";

    $statement = $connect->prepare($query);
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $data[] = $row;
    }
    echo json_encode($data);
}