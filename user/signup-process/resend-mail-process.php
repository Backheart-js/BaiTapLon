<?php
    // global $email;
    // echo $email;
    if(isset($_POST['btnResendMail'])){
        include_once "./send-mail.php";
        echo $_POST['ReEmail'];
        // if(SendMailRegisterAcount($_POST['email'])){
        //     // header("location:signup.php");
        //     // echo header("location:signup.php");
        //     // echo 'Message has been sent';
        //     //  echo '$email';
        //     header("location:resend-mail.php");
        // }
        // else{
        //     // echo 'Message has not been sent';
        //     // echo $email;
        //     echo "đây";
        // }
        
    }
?>