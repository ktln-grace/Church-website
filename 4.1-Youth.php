<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth | City Word Family Church</title>
    <link rel="stylesheet" href="style.css">
    <style>
    *{
        margin:0;
        padding:0;
        font-family: 'Poppins', sans-serif;
    }
    .banner{
        position: relative;
        width: 100%;
        height: 30vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .banner video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .banner h2{
        position: absolute;
        display: flex;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        font-size: 18vw;
        text-align: center;
        text-transform: uppercase;
        color: #000;
        line-height: 100vh;
        mix-blend-mode: screen;
        justify-content: center;
        align-items: center;
    }
</style>
<script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-120px";
        }
        prevScrollpos = currentScrollPos;
        }
    </script>
</head>
<body>
<header>
        <div class="info">
            <ul class="info-links">
                <li><a href="#"><i class="fas fa-phone-alt">+639398517336</i></a></li>
                <li><a href="#"><i class="fas fa-envelope">cityword20@gmail.com</i></a></li>
            </ul>
        </div>
        <div class="icons">
            <a href="https://www.facebook.com/CovenantWorkersForChrist" target="_blank"><i id="fb" class="fab fa-facebook-square"></i></a>
            <a href="https://www.youtube.com/channel/UCH68AOKb2QyEga571FVBQIw" target="_blank"><i id="yt" class="fab fa-youtube"></i></a>
        </div>
    </header>
    
    <nav class="navbar" id="navbar">
        <div class="logo">
            <a href="index.php"><img src="logo/Logo.png" id="logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="2-AboutUs.php">About Us</a></li>
            <li><a href="3-Preachings.php">Preachings</a></li>
            <li><a href="#">Ministries</a>
                <ul>
                    <li><a href="4.0-Children.php">Children</a></li>
                    <li><a href="4.1-Youth.php">Youth</a></li>
                    <li><a href="#">Lifegroup</a></li>
                    <li><a href="#">Local Outreach</a></li>
                    <li><a href="#">Mission</a></li>
                </ul>
            </li>
            <li><a href="5-Give.php">Give</a></li>
            <li><a href="6-CnnctWthS.php">Connect with Us</a></li>
            <li><a href="#">|</a></li>
            <li><a href="logIn.php">Log-in&nbsp;<i class="fas fa-user"></i></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>   
        </div>
    </nav> 


    <section>
    <div class="banner">
        <video autoplay muted loop>
            <source src="pictures/bg.mp4" type="video/mp4">
        </video>
        <h2>Youth</h2>
    </div>
    </section>
    
  <!-- Footer -->
  <section class="footer">
    <div class="container flex">
        <div class="logo">
            <a href="index.php"><img src="logo/foot-logo.png" id="logo"></a>
        </div>
        <div class="foot-links">
            <div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="2-AboutUs.php">About Us</a></li>
                    <li><a href="3-Preachings.php">Preachings</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Ministries</a></li>
                    <li><a href="5-Give.php">Give</a></li>
                    <li><a href="6-CnnctWthS.php">Connect with Us</a></li>
                </ul>
            </div>
        </div>
        <div class="info">
            <p> 
            <i class="fas fa-map-marker-alt"></i> 10th Swallow Street Francisville subd. Mambugan, Antipolo City PH <br> <br>
            <i class="fas fa-envelope"></i> cityword20@gmail.com <br> <br>
            <i class="fas fa-phone-alt"></i> (+63) 9398517336 </p>   
        </div>
    </div>
    </section>

        <footer class="foot">
            <p> City Word Family Church 2022</p>
        </footer>
        <script src="app.js"></script>
</body>
</html>