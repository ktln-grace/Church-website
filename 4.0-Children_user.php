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
    <title>Children | City Word Family Church Inc.</title>
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

    <!-- 4.1 
    <section class="min">
    <div id="slider">
		<figure>
			<img src="pictures/img1.png">
			<img src="pictures/img2.png">
			<img src="pictures/img3.png">
			<img src="pictures/img4.png">
			<img src="pictures/img5.png">
		</figure>
	</div>
    </section>
-->
    <!-- 4.2 -->
    <section class="children">
        <div class="container">
            <h1>Children Ministry</h1>
            <p>Train up a child in the way he should go: and when he is old, he will not depart from it. <br> <b>Proverbs 22:6</b> </p>

            <div class="wrapper">
                <div class="card">
                    <img src="pictures/ch1.png">
                <div class="info">
                    <h1>Ilawod Outreach</h1>
                    <p>Layon (Ilawod) Outreach started on August 7, 2020, with 15 children but now, they are 40 and more kids coming every Saturday School (8:30 to 10:00 in the morning). Together, they sing, read Bible Stories, and many more. The teachers continue to pray for them that they may all accept Jesus as their Lord and Savior and become the future leaders & workers of the Church. </p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch2.png">
                <div class="info">
                    <h1>Sta. Ana Outreach</h1>
                    <p>The outreach was started again on June 2019. We have a total attendance of 30 kids. Most of them are indigents and belong to a broken families. Our mission is to help them build a deep relationship in Jesus and teach them to grow with a Godly character. We are also seeing them that one day they will become successful and spiritually effective in the ministry that God has prepared for them. </p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch3.png">
                <div class="info">
                    <h1>Paulog Outreach</h1>
                    <p>The attendance of students still maintains its number from the previous year. The number of students is raging from 20-25. The session every Friday is held in the house of the teacher, since there is no other available area for now. </p>
                </div>
            </div>
        </div>

        
        <div class="wrapper">
                <div class="card">
                    <img src="pictures/ch4.png">
                <div class="info">
                    <h1>Sunday School</h1>
                    <p>And He Himself gave some to be apostles, some prophets, some evangelists, and some pastors and teachers, for the equipping of the saints for the work of ministry, for the [a]edifying of the body of Christ, <br><br> Ephesians 4:11-12</p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch5.png">
                <div class="info">
                    <h1>Tinampo Outreach</h1>
                    <p>Tinampo Outreach is the most distanced Barangay from the Church; It takes 10-15 minutes to get there. As of now, they are teaching almost 20 kids once a week, although the status of some of the children’s life is difficult, it does not hinder them from learning the word of God.</p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch6.png">
                <div class="info">
                    <h1>Seedling Outreach</h1>
                    <p>Held at Upper Kilingan, Seedling Antipolo Rizal. These children gathers every sunday and exicitingly go to church to hear bible stories and do some activities. there are around 25 - 35 children attendees.</p>
                </div>
            </div>
        </div>

        <div class="wrapper">
                <div class="card">
                    <img src="pictures/ch7.png">
                <div class="info">
                    <h1>Ruhat A Outreach</h1>
                    <p>Children's Bible study every friday 12:30 to 1:30. We teach children to encourage them to learn more about Jesus.</p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch8.png">
                <div class="info">
                    <h1>Iraya Outreach</h1>
                    <p>Layon Iraya outreach started on October 9, 2020 with 30 kids. The outreach is formed because of the children's thirst for the word of God, a willingness that is rare to find in kids nowadays. the It is held every Saturday at 3 pm.</p>
                </div>
            </div>

            <div class="card">
                <img src="pictures/ch9.png">
                <div class="info">
                    <h1>Pinit Outreach</h1>
                    <p>Pinit outreach started last august 2020. It has a total of 25 active kids. The goal of this outreach is to teach, guide, empower and train the children with the word of God so that when the time comes they will be able to pass the Word to the younger generations.</p>
                </div>
            </div>
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
            <p> City Word Family Church 2022</p>
        </footer>
        <script src="app.js"></script>
</body>
</html>