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
            background-color: #fff;
            color: white;
        }
        
        .contain #regContainer{
            border-radius: 10px;
            box-shadow: 0px 0px 100px gray;    
            background-color:white;
            color: darkblue;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
            font-size: 15px;  
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .contain #regContainer label,input{
            display: inline-block;
            margin-bottom:10px;
            border: none;
            
        }
        .contain #regContainer button{
            all: unset;
            color: white;
            outline: none;
            padding: 7px 30px;
            background-color: darkblue;
            margin-top: 10px;
            display: block; 
            border-radius: 7px;

        }
        input{
            padding: 10px 25px;
            min-width: 30%;
        }
        .contain #regContainer .reg-btn{
            font-size: 15px;
            padding: 5px 25px;
            background-color: darkblue;
            transition: 1s all ease-in-out;
        }
        .contain #regContainer .reg-btn:hover{
            color: darkblue;
            box-shadow: 0px 0px 10px grey;
            background-color: gainsboro;
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
                <select name="gender">
                    <option value="" selected disabled>select gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="others">others</option>
                </select>
    

            <button type="submit" class="reg-btn">register</button>
            <span><small>Or you have an account already?</small><a href="login.php">login</a></span>

            <div class="alert alert-danger js-error" style="display:none;">probe</div>
            <div class="alert alert-success js-success" style="display: none ;">probe</div>
        </form>
    </div>
    <?php require_once 'footer.php' ?>
</body>
</html>