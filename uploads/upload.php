<?php
<<<<<<< HEAD

session_start();// Khởi tạo Session
if(!isset($_SESSION['isLoginOK'])){
}

=======
session_start();
if(!isset($_SESSION['isLoginOK'])){
  header("location: login.php");
}
>>>>>>> 7495715627a358583c3fd364c4b6a2242a848556
// import cấu hình bước 1
require 'dbConfig.php';
$statusMsg = '';//tạo ra 1 biến để lưu lại trang thái upload nhằm phản hồi cho người dùng
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
// Những động tác về thiết lập cho việc chuẩn bị upload
$targetDir = ('./../uploads/') . '/';//Thư mục chỉ định để lưu trữ tệp tải lên;
$fileName = basename($_FILES["myfile"]["name"]);//$_file biến siêu toàn cục
$targetFilePath = $targetDir . $fileName;//đây là tên đầy đủ+đường dẫn tệp tin lưu trữ toàn bộ phần tử
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//đang bắt định dạng tệp tin
//Bước 2: Kiểm tra người dùng đã bấm submit và file đã được chọn chưa
if(isset($_POST["sbmUpload"]) && !empty($_FILES["myfile"]["name"])){
     if (file_exists($targetFilePath)) {
        echo "Tệp tin đã tồn tại";
    }
    else{
    // Khai báo biến mảng lưu trữ các định dạng mà bạn cho phép upload lên
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){//Kiểm tra 1 giá trị có thuộc mảng không
        //xử lí upload đang lưu ở thư mục tạm
<<<<<<< HEAD
        $tagetFile = "/uploads/" . $fileName;
        var_dump($tagetFile);
        copy($_FILES["myfile"]["tmp_name"], $tagetFile);
        echo "<img src='".$tagetFile."'>";
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $tagetFile)){//Lấy từ nơi tạm đẩy vào nơi chính
            // Lưu đường dẫn vào cơ sở dữ liệu
          echo"1"; die;
            $sql = "INSERT into db_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"; 
            echo $sql;
            $insert=mysqli_query($db,$sql);
            if($insert){ //kiểm tra việc query thành công
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("location:../index.php#js-update");
                // http://localhost/BaiTapLon/user/personal-page-user/#js-update
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
=======
        $tagetFile = $targetDir . $fileName;
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $tagetFile)){//Lấy từ nơi tạm đẩy vào nơi chính
            // Lưu đường dẫn vào cơ sở dữ liệu
            //echo $fileName;die;
           
            try{
                $sql = "INSERT into data_images (email,file_name, uploaded_on) VALUES ('".$_SESSION['isLoginOK']."','".$fileName."', NOW())"; 
                // echo $sql;die;
                
                $insert=mysqli_query($db,$sql);
               
                if($insert){ //kiểm tra việc query thành công
                    $statusMsg = " ".$fileName. " has been uploaded successfully.";
                    
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }catch(\Exception $e){
            }
>>>>>>> 7495715627a358583c3fd364c4b6a2242a848556
        }
        else{      
            echo"<br>error"; die;
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }     
    }
   
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>