<?php

    if (! defined("__CONFIG__")) {
        die('There is no config file');
        // professionally we can redirect or thrown in a server error.
    }

    // START  SESSION
    if (!isset($_SESSION)) {
        session_start();
    }

    // DISPLAY ERRORS
    error_reporting(-1);
    ini_set('display_errors', 'on');



    require_once 'databaseconnect.php';
    require_once "filter.php";
    require "functions/func1.php";

    $conn  = DB::getconnect();

?>