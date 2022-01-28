<?php
    //checks if logged in before directing to a page
    //optional in our case
    session_start();
        include("connection.php");
        include("functions.php");

        $user_data = CheckLogin($con);
        $email = $user_data['email'];

        if(isset($_POST['save_changes'])){
            $firstname = addslashes($_POST['firstname']);
            $lastname = addslashes($_POST['lastname']);
            $nickname = addslashes($_POST['nickname']);
            $gender = addslashes($_POST['gender']);
            $birthdate = addslashes($_POST['birthdate']);
            $lifestage = addslashes($_POST['lifestage']);
            $occupation = addslashes($_POST['occupation']);
            $contactnumber = addslashes($_POST['contactnumber']);
            $lifeverse = addslashes($_POST['lifeverse']);

            if(!empty($_FILES['profilepic']['name'])){
                $profilepic_name = time() . "_" . $_FILES['profilepic']['name']; //gets the name of the img
                $profilepic_tmp_name = $_FILES['profilepic']['tmp_name']; //gets the temp directory of image
                $target = 'profilePictures/' . $profilepic_name; //the target directory of the image

            
                if(move_uploaded_file($profilepic_tmp_name, $target)){
                    $query = "update users set firstname = '$firstname', lastname = '$lastname', nickname = '$nickname', gender = '$gender', birthdate = '$birthdate', lifestage = '$lifestage', occupation = '$occupation', contactnumber = '$contactnumber', profile_picture = '$profilepic_name', lifeverse = '$lifeverse' where email = '$email'";
                }
            }
            else{
                $query = "update users set firstname = '$firstname', lastname = '$lastname', nickname = '$nickname', gender = '$gender', birthdate = '$birthdate', lifestage = '$lifestage', occupation = '$occupation', contactnumber = '$contactnumber', lifeverse = '$lifeverse' where email = '$email'";
            }   

            mysqli_query($con, $query); //saving
        }
        $user_data = CheckLogin($con); //getting the new values of the user_data from the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./My-Profile.css">
    <title>My Profile - City Word Family Church Inc.</title>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
</head>
<script>
    function triggerClick(){
        document.querySelector('#profilepic').click();

    }

    function previewImage(pic){
        if(pic.files[0]){
            var reader = new FileReader();
            reader.onload = function(pic){
            document.querySelector('#profileDisplay').setAttribute('src', pic.target.result);
            }
            reader.readAsDataURL(pic.files[0]);
        }
    }
    function DisplayLifeVerse() {
        document.getElementById("lifeverse").defaultValue = "<?php echo addslashes($user_data['lifeverse'])?>";
    }
    
</script>
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

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="logo/Logo.png" id="logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index_user.php">Home</a></li>
            <li><a href="2-AboutUs_user.php">About Us</a></li>
            <li><a href="3-Preachings_user.php">Preachings</a></li>
            <li><a href="#">Ministries</a></li>
            <li><a href="5-Give_user.php">Give</a></li>
            <li><a href="6-CnnctWthS_user.php">Connect with Us</a></li>
            <li><a href="#">|</a></li>
            <li><a href="#">Katelene Grace</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>   
        </div>
    </nav> 

<div class="wrapper">
<div class="profile js-profile">
    <form action="profile.php" class="form" method="post" enctype="multipart/form-data">
        <div id="divpic" class="form-group">
            <img src="profilePictures/<?php echo !empty($user_data['profile_picture']) ? $user_data['profile_picture'] : "placeholder.jpg"; ?>" id="profileDisplay" class="displayProfile" onclick="triggerClick()" alt="Click to upload image">
            <input id="profilepic" style="display: none;" name="profilepic" type="file" accept="image/*" onchange="previewImage(this)">
        </div>

    <div class="profile__cnt">

        <div class="form-group1" contentEditable>       
            <textarea id="lifeverse" class="inputtext" name="lifeverse" placeholder="Life Verse"><?php echo $user_data['lifeverse']?></textarea>
        </div><br>

        <table class= "container"> 
            <tr class="row">
                <th colspan="2" class="title" ><p>My Profile</p></th>
            </tr>
            <tr class="row">
                <td class="classification">First Name:</td>
                <td class="details">
                    <input class="input" id="firstname" class="inputtext" type="text" name="firstname" value="<?php echo $user_data['firstname']?>" required>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Last Name:</td>
                <td class="details">
                    <input class="input" id="lastname" class="inputtext" type="text" name="lastname" value="<?php echo $user_data['lastname']?>" required>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Nickname:</td>
                <td class="details">
                    <input class="input" id="nickname" class="inputtext" type="text" name="nickname" value="<?php echo $user_data['nickname']?>" required>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Sex:</td>
                <td class="details">
                    <input id="male" class="radio" type="radio" name="gender" value="Male" <?php echo ($user_data['gender'] == "Male") ? 'checked="checked"' : ''; ?>>
                    <label for="male" class="label">Male</label>
                    <input id="female" class="radio" type="radio" name="gender" value="Female" <?php echo ($user_data['gender'] == "Female") ? 'checked="checked"' : ''; ?>>
                    <label for="female" class="label">Female</label>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Date of Birth:</td>
                <td class="details"><input class="input" id="birthdate" type="date" name="birthdate" value="<?php echo $user_data['birthdate']?>" required></td>
            </tr>
            <tr class="row">
                <td class="classification">Life Stage:</td>
                <td class="details">
                    <select id="lifestage" name="lifestage">
                        <option value=""<?php echo ($user_data['lifestage'] == "") ? 'selected="selected"' : ''; ?>>Select life stage</option>
                        <option value="Single" <?php echo ($user_data['lifestage'] == "Single") ? 'selected="selected"' : ''; ?>>Single</option>
                        <option value="Married" <?php echo ($user_data['lifestage'] == "Married") ? 'selected="selected"' : ''; ?>>Married</option>
                        <option value="Separated" <?php echo ($user_data['lifestage'] == "Separated") ? 'selected="selected"' : ''; ?>>Separated</option>
                        <option value="Widow/Widower" <?php echo ($user_data['lifestage'] == "Widow/Widower") ? 'selected="selected"' : ''; ?>>Widow/Widower</option>
                        <option value="Single Parent" <?php echo ($user_data['lifestage'] == "Single Parent") ? 'selected="selected"' : ''; ?>>Single Parent</option>
                    </select>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Occupation:</td>
                <td class="details">
                    <input class="input" id="occupation" class="inputtext" type="text" name="occupation" value="<?php echo $user_data['occupation']?>">
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Contact Number:</td>
                <td class="details">
                    <input class="input" id="contactnumber" class="inputtext" type="text" name="contactnumber" value="<?php echo $user_data['contactnumber']?>" required>
                </td>
            </tr>
            <tr class="row">
                <td class="classification">Email:</td>
                <td class="details"><?php echo $user_data['email'] ?></td>
            </tr>
            <tr class="row">
                <td class="classification">Password:</td>
                <td class="details">
                    <?php for($i = 0; $i < strlen($user_data['password']); $i++){ //encrypts password
                        echo "●";} 
                    ?>
                </td>
            </tr>
            
        </table><br>
        <div id="savechanges">
            <a class="change1" id="button1" href="changepass.php">Change Password</a><br>
            <input id="button" name="save_changes" type="submit" value="Save Changes" onclick="DisplayLifeVerse()"><br><br>
        </div>
    </div>
    </form>
    <div class="profile-ctr">

        <a class="change" href="logout.php">Logout</a>
    </div>
    <br>
    <br>
</div>
</div>


    <!-- Footer -->
    <section class="footer">
        <div class="container flex">
        <div class="logo">
            <a href="#"><img src="logo/foot-logo.png" id="logo"></a>
        </div>
        <div class="foot-links">
            <div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Preachings</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Ministries</a></li>
                    <li><a href="#">Give</a></li>
                    <li><a href="#">Connect with Us</a></li>
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
</body>
</html>