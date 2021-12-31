<?php
    // global $email;
    // echo $email;
    if(isset($_POST['btnResendMail']) && $_POST["g-recaptcha-response"]!= ''){
        include_once "./send-mail.php";
        //khi sang file khác muốn sử dụng lại session??
        session_start();// Khởi tạo Session
        echo $_SESSION['ReEmail']; // in biến ra trang Web
        if(SendMailRegisterAcount($_SESSION['ReEmail'])){
            header("location:resend-mail.php");
            echo '<p>Message has been resent</p>';
        }
        else{
            // echo 'Message has not been sent';
            // echo $email;
            header("location:resend-mail.php");
            echo '<p>Message has not been resent</p>';
        }
        
    }
    else{
        header("location:/signup.php");
    }
?>