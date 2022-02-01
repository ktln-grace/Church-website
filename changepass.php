<?php
    //checks if logged in before directing to a page
    //optional in our case
    session_start();
        include("connection.php");
        include("functions.php");

    $msg = ""; 
    $css_class = "";

    $user_data = CheckLogin($con);
    

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $currentpassword = addslashes($_POST["currentpassowrd"]);
        $newpassword = addslashes($_POST["newpassword"]);
        $confirmnewpassword = addslashes($_POST["confirmnewpassword"]);

        if($currentpassword === $user_data['password']){
            
            if($newpassword === $confirmnewpassword){

                $email = $user_data['email'];
                $query = "update users set password = '$newpassword' where email = '$email'";
                mysqli_query($con, $query);
                
                header("Location: login.php");
                die;

            }
            else{

                $msg = "Passwords do not match!";
                $css_class = "alert-danger";
            }

        }
        else{

            $msg = "Password is incorrect!";
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
    <title>Change Password - City Word Family Church Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
</head>

<body>
    <div class="changepass_box">
		<form method="post">
			<p id="reset">Change Password</p>

            <?php if(!empty($msg)):?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

			<input id="currentpassword" class="inputtext" type="password" name="currentpassowrd" placeholder="Current Password" required>

			<input id="newpassword" class="inputtext" type="password" name="newpassword" placeholder="New Password" required>
            
            <input id="confirmnewpassword" class="inputtext" type="password" name="confirmnewpassword" placeholder="Confirm New Password" required>

            
            <button id="button" type="submit">Save</button>
			
		</form>
	</div>
</body>
</html>