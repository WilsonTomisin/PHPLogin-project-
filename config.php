<?php

    if (! defined("__CONFIG__")) {
        die('There is no config file');
        // professionally we can redirect or thrown in a server error.
    }

    require_once 'databaseconnect.php';

    $conn  = DB::getconnect();

?>