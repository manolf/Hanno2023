<?php

function getCurrentUserId()
{
    $userId = random_int(0, time());

    if(isset($_COOKIE['userId']))
        $userId = (int) $_COOKIE['userId'];
    if(isset($_SESSION['userId']))
        $userId = (int) $_SESSION['userId'];

    return $userId;
}

function checkUser($userId)
{
  $sql = "SELECT COUNT(userId) FROM users WHERE userId = " . $userId;

   $resultUser = getDB()->query($sql);

   if($resultUser === false)
   {
       //print_r(printDBErrorMessage());
       return 0;
   }

   $countUser = $resultUser->fetchColumn();

return $countUser;

}

function saveUserinDB($userId)
{
    $sql = "INSERT INTO users SET userId = $userId";

    $statement = getDB()->exec($sql);
    if(!$statement)
    {
        echo printDBErrorMessage();
    }

}

function getStatus($userId)
{
    $sql = "SELECT status from users WHERE userId = " . $userId;

    $statusUser = getDB()->query($sql);

    if($statusUser === false)
    {
        print_r(printDBErrorMessage());
        return 0;
    }

    return $statusUser->fetchColumn();

}

function saveDataUser($userId, $name, $email)
{
    $sql = "UPDATE users 
    SET userName ='" . $name . "',  
    userEmail = '" . $email . "' WHERE userId =" . $userId;

    $statement = getDB()->exec($sql);
    if(!$statement)
    {
        echo printDBErrorMessage();
    }
}