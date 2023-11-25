<?php

$url = $_SERVER['REQUEST_URI'];
// echo $url;
// echo "<hr>";

$indexPHPPosition = strpos($url, 'index.php');
$baseUrl = substr($url,0,$indexPHPPosition);

//echo $baseUrl;

$route = null;
if (false !== $indexPHPPosition)
{
    $route = substr($url, $indexPHPPosition);
    $route = str_replace('index.php', '', $route);
}



//var_dump($route);

$userId = getCurrentUserId();
$countOffeneKacheln = countOffeneKacheln($userId);


// $days = getAllDays();
// require __DIR__.'/templates/main.php';

// //wenn keine route, dann soll logik von index.php greifen
//geht bei mir aber auch so...

//$endTime = mktime(00, 00, 0, 11, 01, 2022);
// $endTime = mktime(00, 00, 0, 12, 01, 2022); //Stunde, Minute, Sekunde, Monat, Tag, Jahr;
// $countDown = getCountdown($endTime);
// echo $countDown;

if(strpos($route, '/tabata/add') !== false)
{
    $routeParts = explode ("/", $route);
    echo $tabataId = (int)$routeParts[3];
    echo $dayId = (int)$routeParts[4];
    echo $userId = getCurrentUserId();

    $output = checkUser($userId);
    if ($output == 0)
    {
        saveUserinDB($userId);
    }

    addTabataToCalendar($userId, $tabataId, $dayId);

    header("Location: ".$baseUrl."index.php");
    exit();

}

// if(!$route )
// {
//     $days = getAllDays();
//     require __DIR__.'/templates/main.php';
// }

// if(strpos($route,'/day') !== false)
// {

// }

// if(!$route && $today )

// if(strpos($route,'/home') !== false)
// {
//   // header("Location: ".$baseUrl);
//     require __DIR__.'/templates/home.php';
// }


//das geht net mit diesen routes...
//die Url bläst sich auf und die nachladenden files werden deswegen nicht gefunden
// if(strpos($route,'/tabata') !== false)
// {

//    header("Location: "."tabata.php");
//     require __DIR__.'/templates/tabata.php';

// }

// if(strpos($route,'/team') !== false)
// {
//    // header("Location: ".$baseUrl."home.php");
//     require __DIR__.'/templates/team.php';
// }

// if(strpos($route,'/contact') !== false)
// {
//    // header("Location: ".$baseUrl."home.php");
//     require __DIR__.'/templates/kontakt.php';
// }


//  if(strpos($route, '/day/goto') !== false)
// {
//     $routeParts = explode ("/", $route);
//     $dayId = (int)$routeParts[3];

//     $data = getDay($dayId);

//     header("Location: ".$baseUrl."day.php?dayId=".$data);
//     exit();

// }


// if(strpos($route, '/cart/add') !== false)
// {
//     $routeParts = explode ("/", $route);
//     $productId = (int)$routeParts[3];

//     addProductToCart($userId, $productId);

//     header("Location: ".$baseUrl."index.php");
//     exit();

// }

// if(strpos($route,'/cart') !== false)
// {
//     $cartItems = getCartItemsForUserId($userId);
//     print_r($cartItems);
//     require __DIR__.'/templates/cartPage.php';
//     header("Location: ".$baseUrl."index.php");
//     exit();
// }