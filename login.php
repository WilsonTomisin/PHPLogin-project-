<?php

    define("__CONFIG__", true);
    require_once 'config.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
    <style>

        .container{
            border: 2px solid red;
            padding-left: 50px;
            font-size: 30px;  
            font-family:'Rammetto One', cursive;
        }
        .container label,input,button{
            display: block;
            margin-bottom: 10px;
        }

        input{
            padding: 10px 25px;
            min-width: 30%;
        }
        .login-btn{
            font-size: 15px;
            padding: 5px 25px;
            background-color: rgb(32, 96, 150);
        }

    </style>
</head>
<body>
    <div class="container">

        <h2>Login</h2>
        <label for="email">Email</label>
        <input type="email" name="emailaddress" id="input_email" placeholder="Enter your email address" required = "required">

        <label for="password">Password</label>
        <input type="password" name="passcode" id="passwrd" placeholder="Enter your password..." required = "required">

        <button type="submit" class="login-btn">Login</button>



    </div>
</body>
</html>