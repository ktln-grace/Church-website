<?php
    function CheckLogin($con)
    {
    

        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
    
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
    
                $user_data = mysqli_fetch_assoc($result);
                
                return $user_data;
            }
        }
    
        //redirect to login
        header("Location: login.php");
        die;
    
    }


    function GetRandomNumber($maxNumLength){ //creates random number for user_id
        
        $text = "";
        if($maxNumLength < 5){
            $maxNumLength = 5;
        }

        $numRange = rand(4, $maxNumLength);
        for ($i=0; $i < $numRange; $i++) {

            $text .= rand(0, 9);
        }
        return $text; 

    }

    function GenerateOTP(){
        $randomNumber = rand(100000, 999999);
        
        return $randomNumber;
    }

    function SendOTP($email, $otp){
        
        $message = "Your one time email verification code is " . $otp;  //embed the otp into message.
        $subject = "Email verification from City Word Family Church Inc.";
        $headers = "From: cityword20@gmail.com";
        
            //$retval = mail($email, $sub, $message, $headers);
        if (mail($email, $subject, $message, $headers)){
            $_SESSION['notice'] = "Email successfully sent to " . "$email";
        }
        else{
            $_SESSION['notice'] = "Email sending failed";
        }
            
    }
                    
        

    
    

    
    
?>