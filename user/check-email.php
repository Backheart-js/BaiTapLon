<?php
    //login.php  truyền dữ liệu sang: nhận dữ liệu từ login.php  gửi sang
 // Tạo session: Măc định mỗi phiên làm việc có thời hạn 24 phút
    session_start();
    require "../config/connect_db.php";
    $sql = "select * FROM login WHERE Email = '$email'";
    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        echo "Email đã tồn tại trong hệ thống!";
    }else{
        echo "Hợp lệ!";
    }
