<?php

    session_start();
        include("connection.php");
        include("functions.php"); 

        $user_data = CheckLogin($con); //checks if logged in before directing to a page

        $msg = ""; 
        $css_class = "";
    
        if(isset($_POST['submit'])){
    
            if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['place']) && !empty($_POST['concerns'])){
                
                $name = addslashes($_POST['name']);
                $age = addslashes($_POST['age']);
                $email = addslashes($_POST['email']);
                $contact = addslashes($_POST['contact']);
                $place = addslashes($_POST['place']);
                $concerns = addslashes($_POST['concerns']);
    
                $query = "insert into cwu_form (name, age, email, contact, place, concerns) values ('$name', '$age', '$email', '$contact', '$place', '$concerns')";
    
                mysqli_query($con, $query);
    
                $msg = "Submitted successfully!";
                $css_class = "alert-success";
    
            }
            
            
        }
    
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
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
    <title>Connect with us | City Word Family Church Inc.</title>
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
    
    <!-- 1 -->
    <section class="connect">
        <div class="content">
                <h3> Connect with us</h3>
                <p> We'd love to hear from you </p>
        </div>
    </section>


    <section class="fill-form">
        <div class ="content">
            <div>
                <h1>Need Prayer and Councelling?</h1>
            </div>
            <div>
                <p id="description">Fill in this Form.</p>
            </div>

        <form action ="6-CnnctWthS_user.php" method ="post">
            <div class="form-control">
                <label for ="fullname">Name:</label>
                <input class ="input-box" type ="text" name="name" value="<?php echo $user_data['firstname'] . " " . $user_data['lastname']?>" readonly required>
            </div>
            <div class="form-control">
                <label class ="" for ="age">Age:</label>
                <input class ="input-box" type ="text" name="age" value="<?php echo CalculateAge($user_data['birthdate']); ?>" readonly required>
            </div>
            <div class="form-control">
                <label class ="" for ="email">Email:</label>
                <input class ="input-box" type ="email" name="email" value="<?php echo $user_data['email']; ?>" readonly required>
            </div>
            <div class="form-control">
                <label class ="" for ="contact">Contanct Number:</label>
                <input class ="input-box" type ="text" name="contact" value="<?php echo $user_data['contactnumber']; ?>" readonly required>
            </div>
            <div class="form-control">
                <label class ="" for ="place">City/Province:</label>
                <input class ="input-box" type ="text" name="place" required>
            </div>
            <div class="form-control">
                <label class ="" for ="concerns">
                Share your prayer request or concerns you want to address
                </label>
                <textarea name="concerns" id="concerns" placeholder="Enter your prayer or concern here"></textarea>
            </div>
            <div>
                <button id="submit" type ="submit" name ="submit">Submit</button>
            </div>
            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
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