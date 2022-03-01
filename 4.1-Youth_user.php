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
    <title>Youth | City Word Family Church</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
    <script src="https://kit.fontawesome.com/7d61347327.js" crossorigin="anonymous"></script>
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
        animation: fadeIn 2s;
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
    .life{
        width: 100%;
        min-height: 100vh;
        animation: fadeIn 2s;
    }
    .life .tagline{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        font-weight: 800;
        letter-spacing: 7px;
        margin-top: -190px;
        margin-bottom: 100px;
        text-transform: uppercase;

    }
    .center{
        display: flex;
        justify-content: center;
        align-items: center;
    }
.card {
    width: 450px;
    height: 250px;
    background-color: #fff;
    background: linear-gradient(#f8f8f8, #fff);
    box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    margin: 1.5rem;
}
.card .additional {
    position: absolute;
    width: 50px;
    height: 100%;
    background: linear-gradient(#8cd9dd, #45868a);
    transition: width 0.6s;
    overflow: hidden;
    z-index: 1;
}
.card .additional2 {
    position: absolute;
    width: 50px;
    height: 100%;
    background: linear-gradient(#9adb98, #4a8a48);
    transition: width 0.6s;
    overflow: hidden;
    z-index: 1;
}
.card:hover .additional {
    width: 100%;
    border-radius: 0 5px 5px 0;
}
.card:hover .additional2 {
    width: 100%;
    border-radius: 0 5px 5px 0;
}
.card .additional .more-info {
    width: 300px;
    float: left;
    position: absolute;
    left: 50px;
}
.card .additional2 .more-info {
    width: 300px;
    float: left;
    position: absolute;
    left: 50px;
}
.card .additional .coords {
    margin: 0 1rem;
    color: #fff;
    font-size: 1rem;
}
.card .additional2 .coords {
    margin: 0 1rem;
    color: #fff;
    font-size: 1rem;
}
.card .additional .coords img{
    width: 350px;
    height: 230px;
    margin: 10px;
}
.card .additional2 .coords img{
    width: 350px;
    height: 230px;
    margin: 10px;
}
.card .general {
    width: 400px;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 0;
    box-sizing: border-box;
    padding: 1rem;
    padding-top: 0;
    margin-top: 20px;
}
.card .general h1{
    padding-bottom: 20px;
}
.card .general .more {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.9em;
    margin-bottom: 10px;
}
.life .img{
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 0;
    display: flex;
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

    <section>
    <div class="banner">
        <video autoplay muted loop>
            <source src="pictures/bg.mp4" type="video/mp4">
        </video>
        <h2>Youth</h2>
    </div>
    </section>

    
    <section class="life">
    <p class="tagline">"Shaking our Generation for Christ"</p>
    <div class="img">
            <a href="#"><img src="pictures/4.2.png"></a>
        </div>
    <div class="center">
        <div class="card">
            <div class="additional">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg1.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Epicenter</h1>
                <p>It was handled now by the ministry head, every Tuesday at 5:00 in the afternoon. We gather in CWFC worship center and talk about God's Word. There are about 15 young people who are consistent attending in this gathering.</p>
                <span class="more">Mouse over the card to see image</span>
            </div>
        </div>

        <div class="card">
            <div class="additional2">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg2.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Intensify</h1>
                <p>This life group started during the ecq season in the initiative of Dejarlo Family. It is held every Monday at 4:00 in the afternoon. We gather in Dejarlo Residence and talk about God's Word. There are about 15 young people who are consistently attending in this gathering.</p>
                <span class="more">Mouse over the card to see image</span>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="card">
            <div class="additional2">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg3.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Magnify</h1>
                <p>The topic as of now is Pre-Encounter Lesson 4: Healthy Spiritual Diet. The number of regular attendees are 4 people. Also little by little a bonding is formed between them, they became more comfortable in each other, no more shyness and all. 
                </p>
                <span class="more">Mouse over the card to see image</span>
            </div>
        </div>

        <div class="card">
            <div class="additional">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg4.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Wave</h1>
                <p>This life group was a newly birthed group. It has started in the first week of April and continuously gather every Tuesday at 4:00 in the afternoon. We gather in the backyard of the church d. We are now currently in the Pre-Encounter topic. There are about 10 young people who are consistent attending in this gathering.</p>
                <span class="more">Mouse over the card to see image</span>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="card">
            <div class="additional">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg5.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Magnitude</h1>
                <p>It was handled now by the ministry head, every Tuesday at 5:00 in the afternoon. We gather in CWFC worship center and talk about God's Word. There are about 15 young people who are consistent attending in this gathering.</p>
                <span class="more">Mouse over the card to see image</span>
            </div>
        </div>

        <div class="card">
            <div class="additional2">
                <div class="more-info">
                        <div class="coords">
                            <a href="#"><img src="pictures/lg6.jpg"></a>
                        </div>
                </div>
            </div>
            <div class="general">
                <h1>Seismic</h1>
                <p>This life group started during the ecq season in the initiative of Dejarlo Family. It is held every Monday at 4:00 in the afternoon. We gather in Dejarlo Residence and talk about God's Word. There are about 15 young people who are consistently attending in this gathering.</p>
                <span class="more">Mouse over the card to see image</span>
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