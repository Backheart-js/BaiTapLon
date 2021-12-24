<?php

 // Taoj session: Măc định mỗi phiên làm việc có thời hạn 24 phút
 session_strart();

if(!isset($_POST['btnLogin']))
{
$email=$_POST['txtEmail'];
$password=$_POST['txtPass1'];
}
else
{
    header("location:login.php");
}


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','12345678','project6');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "select * FROM db_nguoidung WHERE email = '$email' and tendangnhap='$email'";

    $result = mysqli_query($conn,$sql);
    
     if(mysqli_num_rows($result) > 0){
        
        $row=mysqli_fetch_assoc($result);
        $pass_hash=$row['matkhau'];//lấy các chuỗi mật khẩu băm trong bảng
        if(password_verify($password,$pass_hash))// so sánh kiểm chứng mật khẩu thô với mật khẩu băm
        {
        $_SESSION['isLoginOK']=$email;
        header("location: admin.php");//Chuyển hướng về Trang quản trị
        }
        else
        {
        $error="Email hoặc mật khẩu không chính xác";
        header("location: login.php>error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

    }else{
        $error="Email hoặc mật khẩu không chính xác";
        header("location: login.php>error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>



