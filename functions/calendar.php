<?php
//entspricht dem Cart/Einkaufwagen

function addTabataToCalendar(int $userId, int $tabataId, int $dayId)
{
    $sql = "INSERT INTO calendar SET userId = $userId, tabataId = $tabataId, dayId = $dayId";

    $statement = getDB()->exec($sql);
    if(!$statement)
    {
        echo printDBErrorMessage();
    }


 // $sql = "INSERT INTO calendar SET userId = :userId, tabataId =:tabataId, dayId = :dayId";

    //prepared Statement um sql injections zu vermeiden
    // $statement = getDB()->prepare($sql);
    // var_dump($statement);
    // $statement->execute([
    //     ':userId' => $userId,
    //     ':tabataId' => $tabataId,
    //     ':dayId' => $dayId
    // ]);
}

function countOffeneKacheln(int $userId)
{
   $sql = "SELECT COUNT(calendarId) FROM calendar WHERE userId = " . $userId;
    $resultKachel = getDB()->query($sql);

    if($resultKachel === false)
    {
        //print_r(printDBErrorMessage());
        return 0;
    }

    $countKachel = $resultKachel->fetchColumn();

    return $countKachel;
}

function getOffeneKachelnByUserId(int $userId):array
{
    $sql = "SELECT dayId, tabata.tabataId, tabata.linkShort, tabata.tabataName
            FROM calendar
            JOIN tabata ON (tabata.tabataId = calendar.tabataId)
            WHERE userId = ". $userId;

    $results = getDB()->query($sql);
    if($results === false)
    {
        return [];
    }
    $found= [];
    while($row = $results->fetch())
    {
        $found[]= $row;
    }

    return $found;

}