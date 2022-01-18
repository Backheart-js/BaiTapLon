<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['adLoginOK'])){
        header("location:ad-login.php");
    }
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $filename = $_GET['file_name'];

    // Bước 01: Kết nối Database Server
    require('../config/connect_db.php');
    // Bước 02: Thực hiện truy vấn

    // $sql1 = "SELECT email From data_images where file_name='$filename'"
    // $result1 = mysqli_query($conn,$sql1);
    // if(mysqli_num_rows($result1)){
    //     $row=mysqli_fetch_assoc($result);
    //     $email_user = $row['email'];
    // }

    $sql = "DELETE FROM data_images where file_name='$filename'";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: index.php"); //Chuyển hướng về Trang quản trị
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>