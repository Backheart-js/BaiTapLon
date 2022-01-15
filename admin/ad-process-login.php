<?php
    session_start();

    if (isset($_POST['btnLogin'])){ //Kiểm tra xem admin có truy cập vào từ nút đăng nhập không
        $admin = $_POST['textAdmin'];
        $password = $_POST['textPassword'];

        // Kết nối với mySQL
        // $conn = mysqli_connect('localhost','root','','database_baitaplon');
        // if(!$conn){
        //     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        // }
        require_once('../config/connect_db.php');
        
        

        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_admin WHERE tendangnhap = '$admin' AND matkhau='$password'"; //Lấy bản ghi có email và mật khẩu từ trong database
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $admin;
            header("location: index.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }
    else {  //Vào qua đường dẫn thì sẽ bị quay lại trang login
        header('Location:ad-login.php');
    }
?>