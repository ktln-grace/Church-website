<?php 
    session_start();
    include("connection.php");
    include("functions.php");
    
    $msg = $_SESSION['notice'];
    $css_class = "alert-success";

    if(!empty($_POST['otp'])){
        $otp = addslashes($_POST['otp']);  //receives the otp entered by the user
    }

    if(isset($_POST['verify_otp'])){ 

        if ($otp == $_SESSION['user_otp']) 
        {
            $msg = "Your Email is verified!";
            $css_class = "alert-success";

            header("Location: newpass.php");
            die;
        } 
        else{
            $msg = "Email verification failed";
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
    <title>OTP Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>

<body>
    <div class="resetpass_box">
		<form method="post" action="enterOTP.php">
			<h1 id="reset">OTP Verification - City Word Family Church Inc.</h1>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

			<input id="otp" class="inputtext" type="text" name="otp" placeholder="Enter OTP" required>

            
            <button class="resetpass" name="verify_otp" type="submit">Verify</button>
            
			
		</form>
	</div>
</body>
</html>