<?php

    define("__CONFIG__", true);
    require_once 'config.php';

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
            background-image:url("../uploads/") ;
            /* background-color: turquoise; */
            color: darkblue;
        }
        .contain{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #fff;
            padding: 25px;
            box-shadow: 0px 0px 59px grey;
            border-radius: 10px;
        
            /* background-color: grey; */
        }

        #logContainer{
    
            /* border: 2px solid red; */
            /* padding-left: 50px; */
            font-size: 15px;  
            /* font-family:'Rammetto One', cursive; */
        }
        #logContainer label,input,button{
            all: unset;
            display: block;
            margin-bottom: 10px;
        }
        #logContainer button{
            min-width: 70%;
            background-color: darkblue;
            color: white;
            border-radius: 7px;
            text-align: center;
            transition: all 1s ease-in-out;
        }
        #logContainer button:hover{
            background-color:gainsboro;
            color: darkblue;
            box-shadow: 5px 10px 20px grey;
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
    <div class="contain">
        <form  id="logContainer">
        <h2>Login</h2>
        <label for="email">Email</label>
        <input type="email" name="emailaddress" id="input_email" placeholder="Enter your email address" required = "required">

        <label for="password">Password</label>
        <input type="password" name="passcode" id="passwrd" placeholder="Enter your password..." required = "required">

        <button type="submit" class="login-btn">Login</button>
        <span><small>create an account: </small><a href="register.php">register now</a></span>

        <div class="alert alert-danger js-error" style="display:none;">probe</div>
        <div class="alert alert-success js-success" style="display:none;">probe</div>

        </form>
    </div>

    <?php require_once 'footer.php'?>
</body>
</html>