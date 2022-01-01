<?php
    if(isset($_POST['btnSignup'])){
        $FirstName=$_POST['txtFirstName'];
        $LasName=$_POST['txtLastName'];
        $Age=$_POST['txtAge'];
        $Email=$_POST['txtEmail'];
        $Password=$_POST['txtPassword'];

        //thực hiện chèn thông tin đăng ký tài khoản của người dùng vào csdl
        

        //kết nối đến csdl
        $conn=mysqli_connect('localhost','root','','database_admin');
        if(!$conn){
            die("The connection failed.");
        }
        $sqlCheckEmail="SELECT * From users where email='$Email' ";
        //B1: kiểm tra đã tồn tại email người dùng hay chưa
        //B2: insert vào csdl, mật khẩu phải encoded
        $resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);
        if(mysqli_num_rows($resultCheckEmail)<=0){//kiểm tra xem đã tồn tại email trong csdl chưa
            $password_hash=password_hash($Password,PASSWORD_DEFAULT);
            $sqlInsert="INSERT into users (firstname,lastname,age,email,password) Values ('$FirstName','$LasName','$Age','$Email','$password_hash')";
            $resultIsert = mysqli_query($conn,$sqlInsert);
            if($sqlInsert == true){
                echo "success";
                include_once "./send-mail.php";
                $link="<a href='http://localhost/BaiTapLon/user/signup-process/resend-mail.php'>Confirm my Flickr account</a>";
                if(SendMailRegisterAcount($Email,$link)){
                    $email=$Email;
                    header("location:resend-mail.php?email=$Email");
                    // echo '<p>Message has been resent</p>';
                }
            }
            else{
                echo "falied";
            }
        }
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