<?php
    session_start();
    if(isset($_POST['btnSignup'])){
        require "../../config/connect_db.php";
        $FirstName=$_POST['txtFirstName'];
        $LasName=$_POST['txtLastName'];
        $Age=$_POST['txtAge'];
        $Email=$_POST['txtEmail'];
        $Password=$_POST['txtPassword'];

        //thực hiện chèn thông tin đăng ký tài khoản của người dùng vào csdl
        

        //kết nối đến csdl
        // $conn=mysqli_connect('localhost','root','','database_admin');
        // if(!$conn){
        //     die("The connection failed.");
        // }
        

        $sqlCheckEmail="SELECT * From users where email='$Email' ";
        //B1: kiểm tra đã tồn tại email người dùng hay chưa
        //B2: insert vào csdl, mật khẩu phải encoded
        $resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);
        if(mysqli_num_rows($resultCheckEmail)<=0){//kiểm tra xem đã tồn tại email trong csdl chưa
            $token = md5($_POST['txtEmail']).rand(10,9999);
            // echo $token;
            $password_hash=password_hash($Password,PASSWORD_DEFAULT);
            $sqlInsert="INSERT into users (firstname,lastname,age,email,password,email_verification_link) Values ('$FirstName','$LasName','$Age','$Email','$password_hash','$token')";
            $resultIsert = mysqli_query($conn,$sqlInsert);
            if($sqlInsert == true){
                
                echo "success";
                include_once "./send-mail.php";
                $link="<a href='http://localhost/BaiTapLon/user/signup-process/activationAccount.php?email=".$Email."&token=".$token."'>Confirm my Flickr account</a>";
                if(SendMailRegisterAcount($Email,$link)){
                    // $email=$Email;
                    $resultSelectID = mysqli_query($conn,"SELECT id from users where email='$Email'");
                    $row=mysqli_fetch_assoc($resultSelectID);
                    $_SESSION['email']=$Email;
                    header("location:resend-mail.php");
                    // echo '<p>Message has been resent</p>';
                }
            }
            else{
                echo "falied";
            }
        }

        // if(mysqli_num_rows($resultCheckEmail)<=0){//kiểm tra xem đã tồn tại email trong csdl chưa
            
            
        //     include_once "./send-mail.php";
        //     $link="<a href='http://localhost/BaiTapLon/user/login.php?email=".$Email."&token=".$token."'>Confirm my Flickr account</a>";
        //     if(SendMailRegisterAcount($Email,$link)){
        //             // $email=$Email;
        //         $token = md5($_POST['txtEmail']).rand(10,9999);
        //         // echo $token;
        //         $password_hash=password_hash($Password,PASSWORD_DEFAULT);
        //         $sqlInsert="INSERT into users (firstname,lastname,age,email,password,email_verification_link) Values ('$FirstName','$LasName','$Age','$Email','$password_hash','$token')";
        //         $resultIsert = mysqli_query($conn,$sqlInsert);
        //         if($sqlInsert == true){
                    
        //             header("location:resend-mail.php?email=$Email");
        //         }
        //             // echo '<p>Message has been resent</p>';
            
        //     }
        //     else{
        //         echo "falied send mail";
        //     }
        // }
        else{
            echo "Email was exists!";
            // $error="Email was exists!";
            header("location:signup.php");
        }
    }
    else{
        // echo 'Message has not been sent1';
        header("location:signup.php");
    }


?>