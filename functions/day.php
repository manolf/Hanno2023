<?php

//alle Funktionen zu den Tagen des Advents
//entspricht den Produkten des Warenkorbs

function getAllDays()
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

function getDay($dayId)
{
   $sql = "SELECT dayId, beschreibung, elfPic, easy, hard
   FROM day 
   WHERE dayId = $dayId";

    $dayResult = getDB()->query($sql);

    if($dayResult === false)
    {
        return null;
    }
  
    $result = $dayResult->fetch();

    return $result;
}

function getWod($easyId)
{
   $sql = "SELECT tabataId, tabataName, description, link, linkShort,
                music, performedBy
                FROM tabata
                WHERE tabataId = $easyId";

    $tabataResult = getDB()->query($sql);

    if($tabataResult === false)
    {
        return null;
    }
  
    $result = $tabataResult->fetch();

    return $result;
}

function isItTimeYet()
{
    $datumHeute = mktime(0,0,0,$datumHeute = date("m"), $datumHeute = date("d"),$datumHeute = date("Y"));
 
    $startDatum = mktime(0,0,0,12,01,2022);


    if ($datumHeute >= $startDatum)
        return true;
    else    
        return false;
}

function islastDayYet()
{
    $datumHeute = mktime(0,0,0,$datumHeute = date("m"), $datumHeute = date("d"),$datumHeute = date("Y"));
 
    $startDatum = mktime(0,0,0,12,24,2022);


    if ($datumHeute >= $startDatum)
        return true;
    else    
        return false;
}