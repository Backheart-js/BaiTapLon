<?php
    if(isset($_POST['btnSignup'])){
        //kiểm tra dữ liệu nhập :
        //1: chưa nhập
        header("location:resend-mail.php");
        if(!($_POST['txtFirstName']) || !($_POST['txtLastName']) || !($_POST['txtEmail']) || !($_POST['txtAge']) || !($_POST['txtPassword'])){
            header("location:signup.php");
        }
        else{
            
        }
        //2: Nhập sai yêu cầu
        //3: đã tồn tại email trong csdl
        
        //4: chưa click vào captcha
        





        //sau khi ktra xong nếu đáp ứng hết yếu cầu 
        //1: send mail 
        //2: insert vào bảng dữ liệu
        //3: điều hướng đến trang chủ


        if(isset($_POST['txtEmail']) && ($_POST['txtEmail']) !=''){
            include_once "./send-mail.php";
            if(SendMailRegisterAcount($_POST['txtEmail'])){
                // header("location:signup.php");
                // echo header("location:signup.php");
                echo 'Message has been sent';

            }
            else{
                echo 'Message has not been sent';
            }
        }
    }
    else{
        // echo 'Message has not been sent1';
        header("location:signup.php");
    }


?>