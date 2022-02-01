<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $msg = "Your Email is verified!";
    $css_class = "alert-success";
    
    $email = $_SESSION['email'];

    if(isset($_POST['submit'])){

        if(!empty($_POST['newpassword']) && !empty($_POST['confirmpassword'])){
            
            $newpassword = addslashes($_POST['newpassword']);
            $confirmpassword = addslashes($_POST['confirmpassword']);

            if($newpassword === $confirmpassword){
                $query = "update users set password = '$confirmpassword' where email = '$email'";
                mysqli_query($con, $query);

                header("Location: login.php");
                die;
            }
            else{
                $msg = "Passwords did not match!";
                $css_class = "alert-danger";
            }
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>

<body>
    <div class="newpass_box">
		<form method="post" action="newpass.php">
			<h1 id="reset">Create New Password - City Word Family Church Inc.</h1>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

			<input id="newpassword" class="inputtext" type="password" name="newpassword" placeholder="Create new password" required>
            
            <input id="confirmpassword" class="inputtext" type="password" name="confirmpassword" placeholder="Confirm your password" required>

            <button class="resetpass" type="submit" formmethod="post" name="submit">Submit</button>
			
		</form>
	</div>
</body>
</html>