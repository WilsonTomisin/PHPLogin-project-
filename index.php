
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&family=Rubik+Bubbles&display=swap" rel="stylesheet">
        <title>Document</title>
        <style>
            body{
                margin: 0px;
            }
            .nav-section{
                /* padding: 30px 20px 30px 20px; */
            }
            .nav-section nav{
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: gainsboro;
                padding: 30px 20px 30px 20px;
                
            }
            .nav-section nav .links a{
                display: inline-block;
                text-decoration: none;
                background-color: darkblue;
                color: white;
                padding: 7px 25px;
                border-radius: 10px;
            }
            body main .top-container{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 30px 20px 30px 20px;
                font-family: 'Rubik Bubbles', cursive;
            }
            body main .top-container .left-col .text h3{
                
                font-size: 30px;
                margin-bottom: -20px;
            }
            body main .top-container .left-col .text h1{
                color: darkblue;
                font-size: 40px;
                margin-bottom: 35px;
            }
            body main .top-container .left-col .text a{
                text-decoration: none;
                background-color: darkblue;
                color: white;
                padding: 7px 25px;
                border-radius: 7px;
            }
            body main .middle-container{
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                padding: 30px 20px 30px 20px;

            }
            body main .middle-container .cards{
                height: 300px;
                background-color: whitesmoke;
                margin-right: 10px;
                border-radius: 10px;
                padding: 10px 10px 10px 10px;
                text-align: center;
                box-shadow: 5px 5px 10px grey;
                font-size: 15px;
                font-family: 'Heebo', sans-serif;
            }
            body main .bottom-container{
                background: linear-gradient(90deg,darkblue,turquoise);
                color: white;
                height: 200px;
                width: 100%;
            }

        
        </style>
    
    </head>
    <body>
        <div class="nav-section">
            <nav>
                <h1 id="logo">Wilson's prj</h1>
                <?php
                    #$msg = '<h1>Hello World</h1> <br /> ';
                    #$msg .= "Today's Date is: ". date('D d M Y').'<hr>';
                    #echo $msg;
                ?>
                <div class="links">
                <a href="login.php">Login</a> 
                <a href="register.php">Sign up</a>
                </div>
            </nav>
        </div>
        <main>
            <div class="top-container">
                <div class="left-col">
                    <div class="text">
                        <h3>Turn your big idea</h3>
                        <h1>Into something bigger</h1>
                        <h4>bring your ideas into life</h4>
                        <a href="register.php">Get Started</a>
                    </div>
                </div>
                <div class="right-col">
                    <img src="assests/images/undrawimg.png" alt="sample image">
                </div>
            </div>
            <div class="middle-container">
                <div class="cards card1">
                    <i class="fa-solid fa-phone"></i>
                    <h2>Services</h2>
                    <span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Adipisci quia, ad tempore iusto sunt dolor doloribus! 
                        Sapiente expedita fugiat optio nam minus quo deleniti, 
                        molestias,voluptates rerum totam culpa autem deserunt! 
                        Voluptate quos cum debitis vel quas laboriosam quod aut.
                    </span>
                </div>
                <div class="cards card2">
                    <i class="fa-solid fa-address-card"></i>
                    <h2>About</h2>
                    <span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Adipisci quia, ad tempore iusto sunt dolor doloribus! 
                        Sapiente expedita fugiat optio nam minus quo deleniti, 
                        molestias,voluptates rerum totam culpa autem deserunt! 
                        Voluptate quos cum debitis vel quas laboriosam quod aut.
                    </span>
                </div>
                <div class="cards card3">
                    <i class="fa-solid fa-bars"></i>
                    <h2>Skills</h2>
                    <span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Adipisci quia, ad tempore iusto sunt dolor doloribus! 
                        Sapiente expedita fugiat optio nam minus quo deleniti, 
                        molestias,voluptates rerum totam culpa autem deserunt! 
                        Voluptate quos cum debitis vel quas laboriosam quod aut.
                    </span>
                </div>
                <div class="cards card4">
                    <i class="fa-solid fa-bell"></i>
                    <h2>Web development</h2>
                    <span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Adipisci quia, ad tempore iusto sunt dolor doloribus! 
                        Sapiente expedita fugiat optio nam minus quo deleniti, 
                        molestias,voluptates rerum totam culpa autem deserunt! 
                        Voluptate quos cum debitis vel quas laboriosam quod aut.
                    </span>
                </div>
            </div>
            <div class="bottom-container">
                <h2>Quote</h2>
                <div class="text2">
                    "A man who procastinates in his own choosing will inenvitably 
                    have his choice made for him by circumstance" <span>-still looking</span>
                </div>
            </div>
        </main>
        <footer>
            <!-- <div class="left">
                <h2>Social links</h2>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="right">
                Lorem ipsum dolor, sit amet consectetur 
                adipisicing elit. Velit, veniam. Optio 
                tempora alias tenetur libero ad, molestiae 
                repudiandae dignissimos ut enim assumenda ipsa 
                nostrum delectus quidem? Libero soluta aut 
                consequuntur suscipit sequi, minus ipsam voluptates 
                modi? Facere eum repudiandae delectus?
                <input type="email" placeholder="subscribe to our newsletter">
                <input type="submit">
            </div> -->
        </footer>
    </body>
</html>