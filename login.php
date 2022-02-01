<?php
    session_start();
        include("connection.php");
        include("functions.php");
    
    $msg = ""; 
    $css_class = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        //checking if infos are appropriate
        if(!empty($email) && !empty($password)){

            //reading information from the database
            $query = "select * from users where email = '$email' limit 1"; //gets the data

            $result = mysqli_query($con, $query); //stores the data

            if($result){ //checks if there's a result

                if($result && mysqli_num_rows($result) > 0){
    
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password){
                        //$user_data contains the info of the user
                        
                        $_SESSION['user_id'] = $user_data['user_id']; //checks if the user is logged in
                        header("Location: index_user.php"); //directing to index page
                        die;

                    }

                }
    
            }
        
            $msg = "You have entered wrong email or password!";
            $css_class = "alert-danger";
            
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
    <title>Login - City Word Family Church Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>

<body>
    <div id="box">
		<form method="post">
			<h1>Login</h1>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

			<input id="email" class="inputtext" type="email" name="email" placeholder="Email" required>

			<input id="password" class="inputtext" type="password" name="password" placeholder="Password" required>

            <a class="forgot" href="resetpass.php">Forgot Password?</a>
                
            <button id="login_button" type="submit">Login</button>
            <p>Not yet a member? <br><a href="signup.php">Sign Up</a></p>
			
		</form>
	</div>
</body>
</html>