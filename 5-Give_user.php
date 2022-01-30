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
    <title>Give | - City Word Family Church Inc.</title>
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
                <ul>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>   
        </div>
    </nav>
    
    <!-- 1 -->
    <section class="giving">
        <div class="content">
                <p> Tithes, Offering and Pledges </p>
        </div>
    </section>

    <!-- 2 -->
    <section class="question">
        <div class="container">
        <div class="why">
            <p class="title">WHY GIVE?</p>
            <p class="content1"> 
                a. Giving is pleasing to God. <br/>
                b. It also shows out obedience to Him. <br/>
                c. It keeps us humble and grate ful for little things. <br/>
                d. We give to be a blessing to others. <br/>
                e. God loves a cheerful giver. <br/>
            </p>
        </div>
        <div class="how">
            <p class="title">HOW TO GIVE?</p>
            <p class="content2">
                a. Bank Transfer <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can deposit it through our BDO bank account.<br/>
                b. G-cash <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can send it by scanning our QR code or by typing our G-cash. <br/>
                c. Cash <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can personally give it to us at out physical church location.
            </p>
        </div>
        </div>
    </section>

    <!-- 3 -->
    <section class="bank">
        <div class="title">
        <p>3 Ways to Give<p>
        </div>
        <div class="container">
            <div class="details">
                <p class ="label"><b>CASH</b></p>
                <p class ="value">
                    Location: <br/>
                    8th Swallow st. Francisvulle Subd. <br> Mambugan Antipolo City, PH
                </p>
                <a href="#"><img src="pictures/loc.png"></a>
            </div>
            <div class="details">
                <p class ="label"><b>G-CASH</b></p>
                <p class ="value3">
                    Gcash Number: <br/>
                    09xxxxxx
                </p>
                <a href="#"><img src="pictures/qr.png"></a>
            </div>
            <div class="details">
                <p class ="label"><b>BANK TRANSER</b></p>
                <p class ="value3">
                    Account Number: <br/>
                    00xxxxxxx
                </p>
                <a href="#"><img src="pictures/bdo.png"></a>
            </div>
        </div>
        <div class="pic">
            <a href="#"><img src="pictures/cp.png" id="phone"></a>
        </div>
    </section>

    <!-- 4 -->
    <section class="thanks">
        <div class="up">
                <p class ="">Thank you for your</p>
                <p class ="title">GENEROUS HEART</p>
                <p class ="">for inqueries and concerns:</p>
        </div>
        <div class="content">
            <ul class="info">
                <li>
                    <p class = "label">Visit us at:</p>
                    <p class = "detail">8th Swallow Street Francisville Subd. Mambugan, Antipolo City Philippines</p>
                </li>
                <li>
                    <p class = "label">Call us at:</p>
                    <p class = "detail2">09059078620,</br> 09073191252</p>
                </li>
                <li>
                    <p class = "label">Email us at: </p>
                    <p class = "detail3">cityword20@gmail.com</p>
                </li>
                <li>
                    <p class = "label">Message us via Facebook at: </p>
                    <a class = "detail4" href="https://www.facebook.com/CovenantWorkersForChrist" target="_blank"> https://www.facebook.com/CovenantWorkersForChrist</a>
                </li>

            </ul>
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