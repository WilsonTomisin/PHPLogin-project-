
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Document</title>
        <style>
        body{
            margin: 0px;
            color: black;
            background: linear-gradient(white,gainsboro);
        }
        body nav a{
            background-color: darkblue;
            color: white;
            padding: 7px 25px;
            border-radius: 7px;
            float: right;
            text-decoration: none;
            margin-right: 5px;
            position: relative;
            bottom: 80px;
            transition: all .5s ease-in-out;
        }
        body nav a:hover{
            background-color: gainsboro;
            color: darkblue;
            box-shadow: 0px 0px 40px grey;
        }
        body nav a[href='register.php']{
            position: relative;
            bottom: 98px;
        }
        main{
            min-height: 60%;
            background: url(assests/images/sampleimg.jpg);
        }
        body footer{
            margin: 0px;
            background-color: darkblue;
            min-height: 20%;
        }
    </style>
    
    </head>
    <body>
        <nav>
            <?php
                $msg = '<h1>Hello World</h1> <br /> <hr>';
                $msg .= "Today's Date is: ". date('D d M Y');
                echo $msg;
            ?>
            <a href="login.php">Login</a><br> 
            <a href="register.php">Sign up</a>
        </nav>
        <main></main>
        <footer>
            <div>
                <h2>Social links</h2>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
            <div>
                Lorem ipsum dolor, sit amet consectetur 
                adipisicing elit. Velit, veniam. Optio 
                tempora alias tenetur libero ad, molestiae 
                repudiandae dignissimos ut enim assumenda ipsa 
                nostrum delectus quidem? Libero soluta aut 
                consequuntur suscipit sequi, minus ipsam voluptates 
                modi? Facere eum repudiandae delectus?
                <input type="email" placeholder="subscribe to our newsletter">
                <input type="submit">
            </div>
        </footer>
    </body>
</html>