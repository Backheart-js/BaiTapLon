<?php
    if(isset($_POST['btnResendMail']) && isset($_GET['email']) ){
        // echo "đã đến đây";
        require "send-mail.php";
        //khi sang file khác muốn sử dụng lại session??
        // session_start();// Khởi tạo Session
        // echo $_SESSION['ReEmail']; // in biến ra trang Web
        //$Email= $_POST[$email];
        $Email= $_GET['email'];
        $token = md5($_POST[$Email]).rand(10,9999);
        $link="<a href='http://localhost/BaiTapLon/user/signup-process/activationAccount.php?email=".$Email."&token=".$token."'>Confirm my Flickr account</a>";
        if(SendMailRegisterAcount($Email,$link)){
            $error= '<p style="color:green;">Message has been resent</p>';
            header("location:resend-mail.php?email=$Email&error=$error");
        }
        else{
            // echo 'Message has not been sent';
            // echo $email;
            $error= '<p style="color:red;">Message has not been resent</p>';
            header("location:resend-mail.php?email=$Email&error=$error");
        }
        
    }
    else{
        header("location:../signup.php");
    }
?>