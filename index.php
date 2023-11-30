<?php

session_start();
// error_reporting(-1);
// ini_set('display_errors','On');

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/includes.php';

$userId = getCurrentUserId();

setcookie('userId', $userId, strtotime ('+30 days')); 

$days = getAllDays();
require __DIR__.'/templates/main.php';