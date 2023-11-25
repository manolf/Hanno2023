<?php

//Mail verschickent


function sendMail()
{
   $sql = "SELECT dayId, beschreibung, elfPic, easy, hard FROM day";
    $result = getDB()->query($sql);
    if(!$result)
    {
        return [];
    }

    $days = [];
    while($row = $result->fetch())
    {
        $days[] = $row;
    }

    return $days;
}


$sql = "INSERT into messages (vorname, nachname, email, subject, message) 
 values ('$vorname', '$nachname','$email', '$subject','$message')";