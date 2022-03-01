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

    //Include required PHPMailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    //Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function SendOTP($email, $otp){
        
        /*$message = "Your one time email verification code is " . $otp;  //embed the otp into message.
        $subject = "Email verification from City Word Family Church Inc.";
        $headers = "From: cityword20@gmail.com";
        
            //$retval = mail($email, $sub, $message, $headers);
        if (mail($email, $subject, $message, $headers)){
            $_SESSION['notice'] = "Email successfully sent to " . "$email";
        }
        else{
            $_SESSION['notice'] = "Email sending failed";
        }*/

    //Create instance of PHPMailer
        $mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    //Set gmail username
        $mail->Username = "cityword20@gmail.com";
    //Set gmail password
        $mail->Password = "zzqwqbnwqbqlcbxe";
    //Email subject
        $mail->Subject = "Email verification from City Word Family Church Inc.";
    //Set sender email
        $mail->setFrom('cityword20@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        $mail->addAttachment('logo/logo_for_email.jpg');
    //Email body
        $mail->Body = "<p>Your one time email verification code is</p></br><h1>" . $otp . "</h1>";
    //Add recipient
        $mail->addAddress($email);
    //Finally send email
        if ( $mail->send() ) {
            //echo "Email Sent..!";
            $_SESSION['notice'] = "Email successfully sent to " . "$email";
        }
        else{
            //echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
            $_SESSION['notice'] = "Email sending failed";
        }
    //Closing smtp connection
        $mail->smtpClose();
            
    }

    function CalculateAge($bday){

        $birthDate = $bday;
        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($birthDate), date_create($currentDate));
        return $age->format("%y");

    }
    
                    
        

    
    

    
    
?>