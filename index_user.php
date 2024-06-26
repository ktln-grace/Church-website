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
    <script>src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
    <script src="https://kit.fontawesome.com/7d61347327.js" crossorigin="anonymous"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"></script>
    <title>Home - City Word Family Church Inc.</title>
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
        <!-- Messenger Chat Plugin Code -->
        <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1870164516593474");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
    FB.init({
        xfbml            : true,
        version          : 'v13.0'
    });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

    <!-- Header -->
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

    <!-- Navigation Bar -->
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

    <section class="home">
        <div class="content">
                <h4> Reaching the unreached,</h4>
                <h3> Saving the unsaved</h3>
                <p> "Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit,<br> and teaching them to obey everything I have commanded you. And surely I am with you always, to the very end of the age." <br> <br> <b>Matthew 28:19-20</b> </p>
                <a href="#More info"> Read More </a>
        </div>
    </section>

    <div class="intro">
        <div class="intro-text">
            <h1 class="hide">
            <span class="text">Hello There,</span>
            </h1>

            <h1 class="hide">
            <span class="text">Friend.</span>
            </h1>

            <h1 class="hide">
            <span class="text">Welcome to Church</span>
            </h1>
        </div>
    </div>
    <div class="slider"></div>

    <!-- 2 -->
    <section class="about" id="More info">
        <h3> Welcome to </h3>
        <h1> City Word Family Church </h1>
        <p> City Word Family Church Incorporated was founded in 2017 by Pastor Roland Paloma. From a single church in Antipolo, churches in Ligao City, and Baras, Rizal was born.
            City Word Family Church has been continuously growing since then because of different life groups opened in different barangays. It has established 2 churches with 2 satellites with more than 300 members excluding children.   
        </p>
        <a href="2-AboutUs.php">Read More</a>
    </section>

    <!-- 2.1 -->
    <section class="announcement">
        <div class="container">
            <div class="box">
                <div class="icon">01</div>
                <div class="content">
                    <h3>Sunday Service</h3>
                    <p>7:00 am - 9:00 am <br> Antipolo <br> <br> 7:30 am - 9:30 am <br>Ligao City <br><br> 2:00 pm - 4:00 pm <br> Baras, Rizal </p>
                    <a href="4.3-Services_user.php">Read More</a>
                </div>
            </div>
            <div class="container">
            <div class="box">
                <div class="icon">02</div>
                <div class="content">
                    <h3>Water Baptism</h3>
                    <p class="content2">Baptism, which corresponds to this, now saves you, not as a removal of dirt from the body but as an appeal to God for a good conscience, through the resurrection of Jesus Christ,</p>
                    <a href="4.4-Events_user.php" >Read More</a>
                </div>
            </div>
            <div class="container">
            <div class="box">
                <div class="icon">03</div>
                <div class="content">
                    <h3>EGR</h3>
                    <p class="content3">EGR or Encountering God's Retreat <br> is a 2 days and 1 night retreat where we will talk about God's word and different aspects of life DEEPER. This is also the time where you will be able to have a genuine encounter with Him.</p>
                    <a href="4.4-Events_user.php">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 -->
    <section class="lifegroup">
        <div class="row">
        <div>
            <a href="#"><img src="pictures/lg.jpg" class="image"></a>
        </div>
        <div class="content">
            <h3> Join a </h3>
            <h1> Life group </h1>
            <p> Our life journey as followers and believers of Christ is not meant to take alone. <br> Instead, we must keep living our journey with people who are taking the same track <br> as ours. Let’s build a Christ-centered community where we can provide fun, casual <br> atmosphere, and authentic relationships with one another. <br>
                <br> Join a life group now where you can study God’s word, share your life experiences, <br> share testimonies and triumphs altogether and grow more and deeper <br> in Christ. <br>
                <br> Don’t worry if you are a mom, or a dad, or a college student, or a teen, we have a <br> suitable group for you.</p>
        </div>
        </div>
    </section>

    <!-- 4 -->
    <section class="give">
        <div class="container">
            <div class="content"> 
                <h1> Give? </h1>
                <p>Each of you should give what you have decided in your heart to give, <br> not reluctantly or under compulsion, for God loves a cheerful giver. <br> 2 Corinthians 9:7</p>
                <div class="button">
                    <a href="5-Give.php">Give</a>
                </div>
            </div>
            <div class="content">
                <div class="photo">
                    <a href="#"><img src="pictures/1.4.png"></a>
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
