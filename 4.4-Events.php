<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Events | City Word Family Church</title>

    <style>
.title{
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 0;
    padding: 0;
}
.title h1{
    margin-top: 100px;
    font-size: 60px;
    font-weight: 800;
    text-transform: uppercase;
}
.title p{
    font-size: 20px;
    letter-spacing: 7px;
}
.events{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content:center;
    align-items: center;
    min-height: 100vh;
    font-family: sans-serif;
}
.box{
    width: 90%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
}
.box .card{
    position: relative;
    width: 400px;
    height: 450px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
}
.box .card:before,
.box .card:after
{
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
}
.box .card:hover:before{
    transform: rotate(20deg);
    box-shadow: 0 2px 20px rgba(0,0,0,.2);
}
.box .card:hover:after{
    transform: rotate(10deg);
    box-shadow: 0 2px 20px rgba(0,0,0,.2);
}
.box .card .imgBx{
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    background: #222;
    transition: 0.5s;
    z-index: 1;
}
.box .card:hover .imgBx
{
    bottom: 80px;
}
.box .card .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.box .card .details{
    position: absolute;
    left: 10px;
    right: 10px;
    bottom: 10px;
    height: 60px;
    text-align: center;
}

.box .card .details h2{
    margin: 0;
    padding: 0;
    font-weight: 600;
    font-size: 20px;
    color: black;
    text-transform: uppercase;
} 
.box .card .details h2 span{
    font-weight: 500;
    font-size: 15px;
    color: black;
    display: block;
    margin-top: 5px;
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
                    <li><a href="4.2-Lifegroup.php">Lifegroup</a></li>
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

    <div class="title">
        <h1> Announcements </h1>
        <p>Events and Church Activities</p>
    </div>

    <section class="events">
    <div class="box">
        <div class="card">
            <div class="imgBx">
                <img src="pictures/e1.png" alt="images">
        </div>
        <div class="details">
            <h2>Water Baptism<br><span>TBA</span></h2>
        </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="pictures/e2.png" alt="images">
            </div>
            <div class="details">
                <h2>Encountering God's Retreat<br><span>TBA</span></h2>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="pictures/e3.png" alt="images">
        </div>
        <div class="details">
            <h2>Prayer Morning<br><span>Tueday-Saturday | 5:00am</span></h2>
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