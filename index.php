
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Heebo:wght@200&family=Rubik+Bubbles&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assests/css/indexstyling.css" type="text/css">
        <title>Document</title>
        <style></style> 
    
    </head>
    <body>
        <div class="nav-section">
            <nav>
                <h1 id="logo">Wilson's <span> Project</span></h1>
                <?php
                    #$msg = '<h1>Hello World</h1> <br /> ';
                    $msg = "Today's Date is: ". date('D d M Y');
                    echo $msg;
                ?>
                <input type="checkbox" id="check">
                <label for="check">
                    <i class="fa-solid fa-bars"></i>
                </label>
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
                    <h2 id="services">Services</h2>
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
                    <h2 id="about">About</h2>
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
                <div class="quote">
                    <h2>Quote of the day</h2>
                    <div class="text2">
                        "A man who procastinates in his own choosing will inenvitably 
                        have his choice made for him by circumstance" <span>-Hunter S. Thompson</span>
                    </div>
                </div>
            </div>
            <div class="white-section"></div>
        </main>
        <footer>
            <div class="footer-container">
                <div class="social-links">
                    <a href="https://instagram.com/southpaw542" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://twitter.com/wilsontomisin" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                    <a href="https://github.com/wilsontomisin" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
                <div class="internal-links">
                    <a href="#services">.Services</a>
                    <a href="#about">.about</a>
                    <a href="">.Sign up</a>
                </div>
                <div class="footer-text">
                    &copy;2022 Wilson Tomisin
                </div>
            </div>
        </footer>
    </body>
</html>