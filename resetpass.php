<?php 
    session_start();
        include("connection.php");
        include("functions.php");

        $msg = "";
        $css_class = "";

        if(isset($_POST['email'])){
            $email = addslashes($_POST['email']); //gets and stores na input email
        }
        

        if(isset($_POST['send_otp'])){ 
            if(!empty($email)){

                //reading information from the database
                $query = "select * from users where email = '$email' limit 1"; //gets the data

                $result = mysqli_query($con, $query); //stores the data

                if($result){ //checks if there's a result

                    if($result && mysqli_num_rows($result) > 0){
                        //writing data in the database
                        $user_otp = GenerateOTP();
                        $queryOTP = "update users set user_otp = '$user_otp' where email = '$email'";
                        mysqli_query($con, $queryOTP);
                        //reading data from the database
                        $query = "select * from users where email = '$email' limit 1";
                        $user_data = mysqli_fetch_assoc(mysqli_query($con, $query));

                        $_SESSION['user_otp'] = $user_data['user_otp'];
                        $_SESSION['email'] = $user_data['email'];
                        
                        SendOTP($email, $user_otp);

                        header("Location: enterOTP.php"); //directing to index page
                        die;
                        

                    }
                    else{
                        $msg = "It looks like you're not yet a member. Sign up now!";
                        $css_class = "alert-danger";
                    }
                }
            }
            else{
                $msg = "You have entered wrong email or password!";
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
    <title>Reset Password - City Word Family Church Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>


<body>
    <div class="resetpass_box">
		<form method="post" action="resetpass.php">
			<h1 id="reset">Reset Password</h1>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

			<input class="inputtext" type="email" name="email" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''; ?>"placeholder="Enter your email" required>

            
            <button class="resetpass" type="submit" formmethod="post" name="send_otp" >Get OTP</button>
			
		</form>
	</div>
</body>
</html>