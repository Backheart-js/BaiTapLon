<?php
    
    // session_start();// Khởi tạo Session
    // if(!isset($_SESSION['email'])){
    //   // $email=$_POST['txtEmail'];
    //   //  echo $email;     
    //   header("location:../signup.php");
    // }
    
    if(isset($_POST['Email'])){
        //kết nối đến csdl
        // $conn=mysqli_connect('localhost','root','','database_admin');
        // if(!$conn){
        //     die("The connection failed.");
        // }
        require "../db.php";
        $sqlCheckEmail="SELECT * From users where email='".$_POST['Email']."' ";
        //B1: kiểm tra đã tồn tại email người dùng hay chưa
        $resultCheckEmail = mysqli_query($conn,$sqlCheckEmail);
        $response="";
        if(mysqli_num_rows($resultCheckEmail)>0){//kiểm tra xem đã tồn tại email trong csdl chưa
            $response = "Email was exists!";
        }
        else{
            $response="";
        }
        echo $response;
    }
    else{
        // echo 'Message has not been sent1';
        header("location:../signup.php");
    }


?>