<?php
    session_start();
        include("connection.php");
        include("functions.php");
    
    $msg = ""; 
    $css_class = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['nickname']) && !empty($_POST['gender']) && !empty($_POST['birthdate']) && !empty($_POST['lifestage']) && !empty($_POST['contactnumber']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])){

            $firstname = addslashes($_POST['firstname']);
            $lastname = addslashes($_POST['lastname']);
            $nickname = addslashes($_POST['nickname']);
            $gender = addslashes($_POST['gender']);
            $birthdate = addslashes($_POST['birthdate']);
            $lifestage = addslashes($_POST['lifestage']);
            $occupation = addslashes($_POST['occupation']);
            $contactnumber = addslashes($_POST['contactnumber']);
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            $confirmpassword = addslashes($_POST['confirmpassword']);

        }
        

        if($occupation == ""){

            $occupation = "Not indicated";

        }

         //checking if infos are appropriate
        if(!empty($email) && !empty($password) && !empty($confirmpassword) && !is_numeric($firstname) && !is_numeric($lastname) && !is_numeric($nickname) && !is_numeric($occupation)){

            
            if($password === $confirmpassword){

                $query = "select * from users where email = '$email'";
                $result = mysqli_query($con, $query); //locates if there's already user with the same email
    
                if(mysqli_num_rows($result) > 0){ //checks the database if the email already exists
                    
                    $msg = "Email already exists";
                    $css_class = "alert-danger";
    
                }
                else{
                    //saving information to the database
                    $user_id = GetRandomNumber(20);
                    $_SESSION['currentuser_id'] = $user_id;
                    
                    $query = "insert into users (user_id, firstname, lastname, nickname, gender, birthdate, lifestage, occupation, contactnumber, email, password) values ('$user_id', '$firstname', '$lastname', '$nickname', '$gender', '$birthdate', '$lifestage', '$occupation', '$contactnumber', '$email', '$password')";
    
                    mysqli_query($con, $query); //saving
    
                    header("Location: signup2.php");
                    die;
                }
    
            }
            else{
                
                $msg = "Passwords do not match!";
                $css_class = "alert-danger";

            }
            
        }
        else{

            $msg = "Please enter valid information!";
            $css_class = "alert-danger";

        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - City Word Family Church Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>

<body>
    <div class="signup_box">
        <form method="post">
            <h1>Sign Up</h1>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

            <input id="firstname" class="inputtext" type="text" name="firstname" placeholder="First Name" required value="<?php echo !empty($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
            
            <input id="lastname" class="inputtext" type="text" name="lastname" placeholder="Last Name" value="<?php echo !empty($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" required>
            
            <input id="nickname" class="inputtext" type="text" name="nickname" placeholder="Nickname" required value="<?php echo !empty($_POST['nickname']) ? $_POST['nickname'] : ''; ?>">

            <div id="gender">
                <p class="sex">Sex:</p>
                <input id="male" class="radio" type="radio" name="gender" value="Male" required>
                <label for="male" class="gender_label">Male</label>
                <input id="female" class="radio" type="radio" name="gender" value="Female">
                <label for="female" class="gender_label">Female</label>
            </div>

            <label for="birthdate" class="label">Date of Birth:</label>
            <input id="birthdate" type="date" name="birthdate" value="<?php echo !empty($_POST['birthdate']) ? $_POST['birthdate'] : ''; ?>" required>

            <label for="lifestage" class="label">Life Stage:</label>
            <select id="lifestage" name="lifestage" required>
                <option value="">Select life stage</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separated">Separated</option>
                <option value="Widow/Widower">Widow/Widower</option>
                <option value="Single Parent">Single Parent</option>
            </select>

            <input id="occupation" class="inputtext" type="text" name="occupation" placeholder="Occupation(Optional)" value="<?php echo !empty($_POST['occupation']) ? $_POST['occupation'] : ''; ?>">
            
            <input id="contactnumber" class="inputtext" type="text" name="contactnumber" placeholder="Contact Number" value="<?php echo !empty($_POST['contactnumber']) ? $_POST['contactnumber'] : ''; ?>" required>

            <input id="email" class="inputtext" type="email" name="email" placeholder="Email" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''; ?>" required>
            
            <input id="password" class="inputtext" type="password" name="password" placeholder="Create Password" required>

            <input id="confirmpassword" class="inputtext" type="password" name="confirmpassword" placeholder="Confirm Password" required>

            
            <button id="button" type="submit">Next</button>
            <p>Already a member? <br><a href="login.php">Login</a></p>
            
            
        </form>
    </div>
</body>

</html>