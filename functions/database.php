<?php

function getDB()
{  
    static $db;
    if($db instanceof PDO)
    {
        return $db;
    }

    require_once CONFIG_DIR .'/database.php';
    $dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",DB_HOST, DB_DATABASE,DB_CHARSET);

    $db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

    return $db;
}

function printDBErrorMessage()
{
    $info = getDB()->errorInfo();
    if(isset($info[2]))
        return $info[2];
    return '';
}

// function getCountdown($endTime)
// {
//     //Anzeige Countdown vor dem 1.12.
//     //$endTime = mktime(00, 00, 0, 12, 01, 2022); //Stunde, Minute, Sekunde, Monat, Tag, Jahr;

//     //Aktuellezeit des microtimestamps nach PHP5, für PHP4 muss eine andere Form genutzt werden.
//     $timeNow = microtime(true);

//     //Berechnet differenz von der Endzeit vom jetzigen Zeitpunkt aus.
//     $diffTime = $endTime - $timeNow;

//     //Zerlegt $diffTime am Dezimalpunkt, rundet vorher auf 2 Stellen nach dem Dezimalpunkt und gibt diese zurück.
//     $milli = explode(".", round($diffTime, 2));
//     //$millisec = round($milli[1]);

//     //Berechnung für Tage, Stunden, Minuten
//     $day = floor($diffTime / (24 * 3600));
//     $diffTime = $diffTime % (24 * 3600);
//     $houre = floor($diffTime / (60 * 60));
//     $diffTime = $diffTime % (60 * 60);
//     $min = floor($diffTime / 60);
//    // $sec = $diffTime % 60;

//     $countdownString = "";

//     if($timeNow < $endTime)
//     {
//         //Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden)
//         $countDownString = "...noch " .  $day . " Tag(e) ". $houre . " Stunde(n) und  ". $min . " Minute(n)";

//         // . "--------------------- xxxx --------------------- xxxx ---------------------
//         //  (*Seite neu laden, um Zeit zu aktualisieren)";
//         echo $countDownString;
//     }

//     return $countdownString;
// }