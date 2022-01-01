<?php
// import cấu hình bước 1
require 'dbConfig.php';
$statusMsg = '';//tạo ra 1 biến để lưu lại trang thái upload nhằm phản hồi cho người dùng

// Những động tác về thiết lập cho việc chuẩn bị upload
$targetDir = "uploads/";//Thư mục chỉ định để lưu trữ tệp tải lên;
$fileName = basename($_FILES["myfile"]["name"]);//$_file biến siêu toàn cục
 echo $fileName;
$targetFilePath = $targetDir . $fileName;//đây là tên đày đủ+đường dẫn tệp tin lưu trữ toàn bộ phần tử
echo  $targetFilePath ;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//đang bắt định dạng tệp tin

//Bước 2: Kiểm tra người dùng đã bấm submit và file đã được chọn chưa
if(isset($_POST["submit"]) && !empty($_FILES["myfile"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){ //
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
