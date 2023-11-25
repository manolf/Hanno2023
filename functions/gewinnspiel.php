<?php

function saveFavoTabatas($userId,$wod1, $wod2, $wod3)
{
    $sql = "INSERT INTO gewinnspiel (userId, wod1, wod2, wod3 ) VALUES
    (" . $userId . ", ". $wod1 .",". $wod2 .", " . $wod3. ");";


    $statement = getDB()->exec($sql);
    if(!$statement)
    {
        echo printDBErrorMessage();
    }

}

function checkTeilnehmer($userId)
{
  $sql = "SELECT COUNT(userId) FROM gewinnspiel WHERE userId = " . $userId;

   $resultUser = getDB()->query($sql);

   if($resultUser === false)
   {
       //print_r(printDBErrorMessage());
       return 0;
   }

   $countUser = $resultUser->fetchColumn();

    return $countUser;
}

function ListTabatas()
{
  $sql = "SELECT dayId, tabataName, performedBy, tabataId
            FROM `tabata`
            Join day on (easy = tabataId)
            Order by dayId";

    $result = getDB()->query($sql);

    if(!$result)
    {
        return [];
    }
    $tabatas= [];
    while($row = $result->fetch())
    {
        $tabatas[] = $row;
    }

    return $tabatas;

}