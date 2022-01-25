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
    <title>Connect with us | City Word Family Church Inc.</title>
</head>
<body>
    <header>
        <div class="info">
            <ul class="info-links">
                <li><a href="#">+639398517336</a></li>
                <li><a href="#">cityword20@gmail.com</a></li>
            </ul>
        </div>
        <div class="icons">
            <a href="https://www.facebook.com/CovenantWorkersForChrist"><i id="fb" class="fab fa-facebook-square"></i></a>
            <a href="https://www.youtube.com/channel/UCH68AOKb2QyEga571FVBQIw"><i id="yt" class="fab fa-youtube"></i></a>
        </div>
    </header>

    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="logo/Logo.png" id="logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index_user.php">Home</a></li>
            <li><a href="2-AboutUs_user.php">About Us</a></li>
            <li><a href="3-Preachings_user.php">Preachings</a></li>
            <li><a href="#">Ministries</a>
                <ul>
                    <li><a href="4.0-Children_user.php">Children</a></li>
                    <li><a href="4.1-Youth_user.php">Youth</a></li>
                    <li><a href="#">Lifegroup</a></li>
                    <li><a href="#">Local Outreach</a></li>
                    <li><a href="#">Mission</a></li>
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
    <section class="connect">
        <div class="content">
                <h3> Connect with us</h3>
                <p> We'd love to hear from you </p>
        </div>
    </section>


    <section class="fill-form">
        <form action ="" method ="">
        <div class ="content">
            <div>
                <h1>Need Prayer and Councelling?</h1>
            </div>
            <div>
                <h3>Fill in this Form.</h3>
            </div>
            <div>
                <label for ="fullname">Name:</label>
                <input class ="input-box" type ="text" name="fullname" required>
            </div>
            <div>
                <label class ="" for ="age">Age:</label>
                <input class ="input-box" type ="text" name="age" required>
            </div>
            <div>
                <label class ="" for ="email">Email:</label>
                <input class ="input-box" type ="email" name="email" required>
            </div>
            <div>
                <label class ="" for ="contact">Contanct Number:</label>
                <input class ="input-box" type ="text" name="contact" required>
            </div>
                <label class ="" for ="place">City/Province:</label>
                <input class ="input-box" type ="text" name="place" required>
            <div>
                <label class ="" for ="concerns">
                Share your prayer request or concerns you want to address
                </label>
                <div>
                <input class ="input-box" type ="text" name="concerns" required>
                </div>
            </div>
            <div>
                <input class ="" type ="submit" name ="" value ="Submit">
            </div>
        </div>
        </form>

    </section>

    <section class="infos">
    <div class="container">
            <ul class="content">
                <li>
                    <p class = "label">Visit us at:</p>
                    <p class = "">8th Swallow Street Francisville subdivision Mambugan, Antipolo City PH</p>
                </li>
                <li>
                    <p class = "label">Call us at:</p>
                    <p class = "">09059078620,</br> 09073191252</p>
                </li>
                <li>
                    <p class = "label">Email us at: </p>
                    <p class = "">cityword20@gmail.com</p>
                </li>
                <li>
                    <p class = "label">Message us via Facebook at: </p>
                    <a class = "value" href="https://www.facebook.com/CovenantWorkersForChrist" target="_blank"> https://www.facebook.com/CovenantWorkersForChrist</a>
                </li>

            </ul>
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
            <p> 10th Swallow Street Francisville subd. Mambugan, Antipolo City PH <br> <br>
            cityword20@gmail.com <br> <br>
            (+63) 9398517336 </p>   
        </div>
    </div>
    </section>

        <footer class="foot">
            <p> City Word Family Church 2022</p>
        </footer>

    <script src="app.js"></script>
</body>
</html>