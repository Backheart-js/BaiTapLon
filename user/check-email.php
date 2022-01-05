<?php
    //login.php  truyền dữ liệu sang: nhận dữ liệu từ login.php  gửi sang
 // Tạo session: Măc định mỗi phiên làm việc có thời hạn 24 phút
 session_start();
if(isset($_POST)){ 
    $email=$_POST['email'];
    $conn = mysqli_connect('localhost','root','12345678','database_BaiTapLon');
    
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "select * FROM login WHERE Email = '$email'";
    
    $result = mysqli_query($conn,$sql);
   
    
    if(mysqli_num_rows($result) > 0){
        echo "Email đã tồn tại trong hệ thống!";
    }else{
        echo "Hợp lệ!";
    }
}