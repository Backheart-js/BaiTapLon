<?php
    $username ='huyenpham26112001@gmail.com';
    $password ='cofobqiummotidli';

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


function SendMailRegisterAcount($email)
{
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        global $username;
        global $password;
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $username;                     //SMTP username
            $mail->Password   = $password;                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;  
            $mail->Charset= 'UTF-8';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('huyenpham26112001@gmail.com', 'The Flickr Team');
            $mail->addAddress($email);     //Add a recipient
            

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Step 1: Join Flickr. Step 2: Inside!';
            $mail->Body    = '<div>
            <img src="/BaiTapLon/Assets/data_img/logo_flickr.png">
            <h1>Welcome to the world is largest photo community!Now it is time to choose your own adventure.Whatever your passion, there is a place for you on Flickr. Pick one of the options below to get started.</h1></div>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                // echo 'Message has been sent';
                return true;
            }
               
            
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }    
        // echo 'Message has not been sent';
        return false;
}
?>
    