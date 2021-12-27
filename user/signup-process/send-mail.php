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
            $mail->Subject = 'Flickr - Verify your account';
            $mail->Body    = '<div>
<<<<<<< HEAD
            <span>
                We are excited you are joined Flickr.</br>
                As soon as you verify your email to confirm this is you, we can get started.</br>
                </br>
                Just click the link below:</br>
                <a href="#">Confirm my Flickr account</a></br>
                Link will expire in 24 hours.</br>
                </br>
                Having trouble? Contact our support heroes <a href="#">here.</a></br>
                </br>
                The Flickr team.
            </span>
=======
            <pre>
                We’re excited you’ve joined Flickr.
                As soon as you verify your email to confirm this is you, we can get started.
                Just click the link below:
                <a>Confirm my Flickr account</a>
                Link will expire in 24 hours.
                Having trouble? Contact our support heroes <a>here.</a>
                The Flickr team.
            </pre>
>>>>>>> 692dc122ff7ed0d254136b107109ac97c2bdd1dd
            </div>';
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
    