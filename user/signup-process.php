<?php
    if(isset($_POST['btnSignUp'])){
        //kiểm tra dữ liệu nhập :
        //1: chưa nhập
        //2: Nhập sai yêu cầu
        //3: đã tồn tại email trong csdl
        //4: chưa click vào captcha








        //sau khi ktra xong nếu đáp ứng hết yếu cầu 
        //1: send mail 
        //2: insert vào bảng dữ liệu
        //3: điều hướng đến trang chủ


        if(isset($_POST['txtEmail']) && ($_POST['txtEmail']) !=''){
            include_once "./signup-process/send-mail.php";
            if(SendMailRegisterAcount($_POST['txtEmail'])){
                // header("location:signup.php");
                // echo header("location:signup.php");
            }
            else{
                echo 'Message has not been sent';
            }
        }
    }
    else{
        header("location:signup.php");
    }


?>