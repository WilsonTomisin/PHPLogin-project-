<?php

    function checkSessionID(){
        if (!isset($_SESSION['user_id'])) {
            // if user id is not set force to login page.
            header("Location: login.php");
            die();
        } else {

        }
    };

    function forceLogin(){
        if (isset($_SESSION['user_id'])) {
            # force to dashboard...
            header("Location: Dashboard.php");
            die();
        }
    }

?>