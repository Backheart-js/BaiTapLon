<?php
    //login.php  truyền dữ liệu sang: nhận dữ liệu từ login.php  gửi sang
 // Tạo session: Măc định mỗi phiên làm việc có thời hạn 24 phút
session_start();
if(isset($_POST['btnloginone'])){ 
    $email=$_POST['txtEmail'];
    $password=$_POST['txtPass1'];
    //ở đây còn phải ktra người dùng có nhập không
    require "../config/connect_db.php";

    // Bước 02: Thực hiện truy vấn
    $sql = "select * FROM login WHERE Email = '$email' AND status = 1";
    
    $result = mysqli_query($conn,$sql);
   
    
    if(mysqli_num_rows($result) > 0){
        
        $row=mysqli_fetch_assoc($result);

        //var_dump(password_hash('12345678', PASSWORD_DEFAULT));die;
        

        if(password_verify($password, $row['Password']))// so sánh kiểm chứng mật khẩu 
        {   
            $_SESSION['isLoginOK']=$email;
            header("location: Home.php");//Chuyển hướng về Trang quản trị
        }
        else
        {
            $error="Email hoặc mật khẩu không chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

    } else {
        $error="Tài khoản chưa xác thực";
        header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}

else {
    header("location:login.php");
}

   
?>