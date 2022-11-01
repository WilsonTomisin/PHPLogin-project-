<?php

    define("__CONFIG__", true);
    require 'config.php';

    // checkSessionID();
    forceLogin();

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
        body{
            background-color: teal;
            color: white;
        }
        .contain #regContainer{
            /* border: 2px solid red; */
            padding-left: 50px;
            font-size: 15px;  
            /* font-family:'Rammetto One', cursive; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .contain #regContainer label,input{
            display: inline-block;
            margin-bottom:10px;
            
        }
        .contain #regContainer button{
            margin-top: 10px;
            display: block;
        }
        .contain #regContainer input[type= radio]{
            display: inline-block;
            padding: 0px;
            min-width: 0%;
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
        .js-error, .js-success{
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="contain">
        <form id="regContainer">
        <h2>Register</h2>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" required placeholder="enter your firstname">

            <label for="lastname">lastname</label>
            <input type="text2" name="lastname" required placeholder="enter your lastname">

            <label for="email">Email</label>
            <input type="email" name="emailaddress" id="input_email" placeholder="Enter your email address" required = "required">
            
            <label for="password">Password</label>
            <input type="password" name="passcode" id="passwrd" placeholder="Enter your password..." required = "required">

            <label for="confirmpassword">Confirm your password</label>
            <input type="password" name="confirmpasscode" id="confirmpasswrd" placeholder="Enter your password again please..." required = "required">
            
            <p>Select your gender</p>
            <input type="radio" name="gender" id="man" value="male">
            <label for="male" style="display:inline-block;margin-right:10px;">male</label>
            
            <input type="radio" name="gender" id="woman" value="female">
            <label for="female" style="display:inline-block;">female</label>

            <button type="submit" class="reg-btn">register</button>

            <div class="alert alert-danger js-error" style="display:none;">probe</div>
            <div class="alert alert-success js-success" style="display: none ;">probe</div>
        </form>
    </div>
    <?php require_once 'footer.php' ?>
</body>
</html>