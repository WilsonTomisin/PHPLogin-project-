<?php
    define("__CONFIG__", true);
    require "config.php";

    echo "Your user id is registered as ".$_SESSION['user_id'].' ==>> '.$_SESSION['email'];

    checkSessionID();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard|Welcome </title>
</head>
<body>
    <div>
        <h1>Welcome User... </h1>
        <hr>
        <h4>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Reprehenderit quis accusantium error iure, aspernatur 
            ex esse porro qui neque doloribus.
        </h4>
        <a href="##" target="_blank">logOut</a>
    </div>
</body>
</html>