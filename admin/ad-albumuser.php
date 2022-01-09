<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
        header('Location: ad-login.php');   //Đi ra
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id_user = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM db_nhanvien WHERE ma_nhanvien = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $ma_donvi = $row['ma_donvi'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);
?>
