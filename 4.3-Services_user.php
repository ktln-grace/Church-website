<?php

    session_start();
        include("connection.php");
        include("functions.php"); 

        $user_data = CheckLogin($con); //checks if logged in before directing to a page
     
?>


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
    <script src="https://kit.fontawesome.com/7d61347327.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Services | City Word Family Church Inc.</title>
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
            <a href="index_user.php"><img src="logo/Logo.png" id="logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index_user.php">Home</a></li>
            <li><a href="2-AboutUs_user.php">About Us</a></li>
            <li><a href="3-Preachings_user.php">Preachings</a></li>
            <li><a href="#">Ministries</a>
                <ul>
                    <li><a href="4.0-Children_user.php">Children</a></li>
                    <li><a href="4.1-Youth_user.php">Youth</a></li>
                    <li><a href="4.3-Services_user.php">Services</a></li>
                    <li><a href="4.4-Events_user.php">Events</a></li>
                </ul>
            </li>
            <li><a href="5-Give_user.php">Give</a></li>
            <li><a href="6-CnnctWthS_user.php">Connect with Us</a></li>
            <li><a href="#">|</a></li>
            <li><img src="profilePictures/<?php echo !empty($user_data['profile_picture']) ? $user_data['profile_picture'] : "placeholder.jpg"; ?>" id="profileDisplay" class="displayProfile">
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>   
        </div>
    </nav> 

    <section class="services">
        <div class="content">
                <h4> Church Services</h4>
                <p> And let us not neglect our meeting together, as some people do,<br> but encourage one another, especially now that the day of his return is drawing near.<br> <br> <b>Hebrew 10:25</b> </p>
        </div>
    </section>

    <section class="sched">
        <div class="left" >
            <div class="content">
                <a href="#"><img src="pictures/s1.png"></a>
                <div class="info">
                <h4>Antipolo Sunday Service</h4>
                <p class="description">Sundays, 7:00 am - 9: 00am</p>
                <p>The Picture on the left shows the service held at City Word Family Church-Mambugan. The attendees in this service is mostly the church leaders, workers, new discples that has a range of 60-80 attendees excluding children.</p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="content">
                <div class="info">
                <h4>Seedling Sunday Service</h4>
                <p class="description">Sundays, 2:00 pm - 4:00 pm</p>
                <p>The picture on the right shows the Sunday service held at Seedling, the outreach church in Antipolo City. We currently have 25-30 regular attendees in this service (children not included in the number).</p>
                </div>
                <a href="#"><img src="pictures/s2.png"></a>
            </div>
        </div>
        <div class="left" >
            <div class="content">
                <a href="#"><img src="pictures/s3.png"></a>
                <div class="info">
                <h4>Ligao Sunday Service</h4>
                <p class="description">Sundays, 7:30 am - 9: 30am</p>
                <p>Worship service starts at 7:30 am at the City Word worship center. Sunday is a day we gathered in one place to worship the Lord. As the year 2021 we are declaring a year of breakthrough in every Sunday service. The flow of the service begins with the praise and worship, testimony and preaching the word of God. The number of attendees during the service is maximum of 80 persons. While in other side Sunday school for children are handled. </p>
                </div>
            </div>
        </div>

    </section>


<!-- Footer -->
<section class="footer">
    <div class="container flex">
        <div class="logo">
            <a href="index_user.php"><img src="logo/foot-logo.png" id="logo"></a>
        </div>
        <div class="foot-links">
            <div>
                <ul>
                    <li><a href="index_user.php">Home</a></li>
                    <li><a href="2-AboutUs_user.php">About Us</a></li>
                    <li><a href="3-Preachings_user.php">Preachings</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Ministries</a></li>
                    <li><a href="5-Give_user.php">Give</a></li>
                    <li><a href="6-CnnctWthS_user.php">Connect with Us</a></li>
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