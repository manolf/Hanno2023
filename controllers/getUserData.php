<?php

include "axios.php";

$data = mysqli_query($con, "SELECT dayId, beschreibung, elfPic, easy, hard FROM day");
//var_dump($data);

$response = array();

while($row=mysqli_fetch_assoc($data)){
    $response[] = $row;
}

echo json_encode($response);
exit;

