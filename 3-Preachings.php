<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Fira+Sans&family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
    <script src="https://kit.fontawesome.com/7d61347327.js" crossorigin="anonymous"></script>
    <title>Preaching | City Word Family Church Inc.</title>
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
                    <li><a href="4.3-Services.php">Services</a></li>
                    <li><a href="4.4-Events.php">Events</a></li>
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

    <!-- 1 -->
    <section class="preach">
        <div class="content">
                <h4> watch</h4>
                <iframe width="760" height="400"   
                    src="https://www.youtube.com/embed/GwZvq5fhqqE" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
        </div>
    </section>
    
    <!-- 2 -->
    <section class="channel">
        <div class="title">
            <h1>Our Broadcast Channels</h1>
        <div class="channel-links">
                <a class = "" href="https://www.facebook.com/CovenantWorkersForChrist" target="_blank">
                <i class="fab fa-facebook-square"></i>
                <p class ="">/CovenantWorkersForChrist</p>
                </a>
        </div>
        <div class="channel-links">
                <a class = "" href="https://www.youtube.com/channel/UCH68AOKb2QyEga571FVBQIw" target="_blank">
                <i class="fab fa-youtube"></i>
                <p class ="">City Word Family Church</p>
                </a>
        </div>
        <div class="channel-links">
            <a class = "" href="https://www.youtube.com/channel/UCH68AOKb2QyEga571FVBQIw" target="_blank">
            <i class="fab fa-spotify"></i>
            <p class ="">City Word Family Church</p>
            </a>
        </div>
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
            <p> <i class="far fa-copyright"></i>&nbsp; City Word Family Church 2022</p>
        </footer>

    <script src="app.js"></script>
</body>
</html>