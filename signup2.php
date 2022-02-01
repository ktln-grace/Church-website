
<?php
    session_start();
        include("connection.php");
        include("functions.php");

        

        //declaration of global variables
        $msg = ""; 
        $css_class = "";

        $current_user_id = $_SESSION['currentuser_id'];
        $qry = "select * from users where user_id = '$current_user_id' limit 1";
        
        $result = mysqli_query($con,$qry);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);

        }


        if(isset($_POST['save'])){ 
            //echo "<pre>", print_r($_POST), "</pre>";
            //echo "<pre>", print_r($_FILES), "</pre>";
            //echo "<pre>", print_r($_FILES['profilepic']), "</pre>";
            $lifeverse = addslashes($_POST['lifeverse']); //stores the input life verse

            $profilepic_name = time() . "_" . $_FILES['profilepic']['name']; //gets the name of the img
            $profilepic_tmp_name = $_FILES['profilepic']['tmp_name']; //gets the temp directory of image
            $target = 'profilePictures/' . $profilepic_name; //the target directory of the image

            if(move_uploaded_file($profilepic_tmp_name, $target)){

                if(!empty($lifeverse)){
                    $query = "update users set profile_picture = '$profilepic_name', lifeverse = '$lifeverse' where user_id = '$current_user_id'";
                }
                else{
                    $lifeverse = "Not indicated";
                    $query = "update users set profile_picture = '$profilepic_name', lifeverse = '$lifeverse' where user_id = '$current_user_id'";
                }
                

                mysqli_query($con, $query);

                $msg = "Image uploaded successfully";
                $css_class = "alert-success";

                header("Location: login.php");
                die;
            }
            else{
                
                $query = "update users set lifeverse = '$lifeverse' where user_id = '$current_user_id'";

                mysqli_query($con, $query);

                $msg = "Failed to upload image";
                $css_class = "alert-danger";

                header("Location: login.php");
                die;
            }

        }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Profile - City Word Family Church Inc.</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="login-style.css">
        <link rel="shortcut icon" type="image/png" href="logo/favicon.png">
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
    </script>

    <body>
        <div class="signup2_box">
            <form action="signup2.php" method="post" enctype="multipart/form-data">
                <p id="welcome_user">Welcome, <?php echo $user_data['nickname'] ?>!</p>
                
                <?php if(!empty($msg)):?>
                    <div class="alert <?php echo $css_class; ?>">
                        <?php echo $msg; ?>
                    </div>
                <?php endif; ?>

                <div id="divpic" class="form-group">
                    <img src="profilePictures/placeholder.jpg" id="profileDisplay" class="displayProfile" onclick="triggerClick()" alt="Click to upload image">
                    <label for="profilepic" id="piclabel">Profile Picture</label>
                    <input id="profilepic" style="display: none;" name="profilepic" type="file" accept="image/*" onchange="previewImage(this)" ><br><br>
                </div>
                
                

                <textarea id="lifeverse" class="inputtext" name="lifeverse" placeholder="Life Verse"></textarea>
                
                
                <button id="signup2_button" name="save" type="submit">Sign Up</button><br><br>
                
                
            </form>
        </div>
    </body>

</html>