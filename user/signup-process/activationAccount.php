<?php
    
    if($_GET['email'] && $_GET['token'])
    {
        require "../db.php";
        $email = $_GET['email'];
        $token = $_GET['token'];
        $sql="SELECT * FROM users WHERE email_verification_link='$token' and email='$email'";
        $query = mysqli_query($conn,$sql);
        $d = date('Y-m-d H:i:s');//lấy ngày giờ hiện tại khi ng dùng click vào link
        if (mysqli_num_rows($query) > 0) {
            $row= mysqli_fetch_array($query);
            if($row['email_verified_at'] == NULL){
                mysqli_query($conn,"UPDATE users set email_verified_at ='$d',status=1 WHERE email='$email'");
                $msg = "Congratulations! Your email has been verified.";
                header("location:./login.php");
            }else{
            $msg = "You have already verified your account with us";
            }
        } else {
            $msg = "This email has been not registered with us";
        }
    }
    else
    {
        $msg = "Danger! Your something goes to wrong.";
    }
?>