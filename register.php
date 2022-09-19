<?php

    define("__CONFIG__", true);
    require 'config.php';



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        .reg-btn{
            font-size: 15px;
            padding: 5px 25px;
            background-color: rgb(32, 96, 150);
        }

    </style>
</head>
<body>
    <div class="container">

        <h2>Register</h2>
        <label for="firstname">Firstname</label>
        <input type="text" placeholder="enter firstname" name="firstname" id="fn">

        <label for="firstname">Lastname</label>
        <input type="text" placeholder="enter lastname" name="lastname" id="ln">

        <label for="firstname">Other names</label>
        <input type="text" placeholder="other-names..." name="othername" id="on">

        <label for="email">Email</label>
        <input type="email" name="emailaddress" id="input_email" placeholder="Enter your email address" required = "required">

        <label for="password">Password</label>
        <input type="password" name="passcode" id="passwrd1" placeholder="Enter your password..." required = "required">

        <label for="password">confirm password</label>
        <input type="password" name="passcode" id="passwrd2" placeholder="confirm your password..." required = "required">

        <button type="submit" class="reg-btn">Register</button>



    </div>
    <?php require_once 'footer.php' ?>
</body>
</html>