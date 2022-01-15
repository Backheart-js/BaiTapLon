<?php
// import cấu hình bước 1
require '../../db.php';
$statusMsg = '';//tạo ra 1 biến để lưu lại trang thái upload nhằm phản hồi cho người dùng

// Những động tác về thiết lập cho việc chuẩn bị upload
$targetDir = "data_upload/";//Thư mục chỉ định để lưu trữ tệp tải lên;
// echo $targetDir;
$fileName = basename($_FILES["fileupload"]["name"]);//$_file biến siêu toàn cục

$targetFilePath = $targetDir . $fileName;//đây là tên đầy đủ+đường dẫn tệp tin lưu trữ toàn bộ phần tử
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//đang bắt định dạng tệp tin
// echo $targetFilePath;
// echo $fileType;



//Bước 2: Kiểm tra người dùng đã bấm submit và file đã được chọn chưa
if(isset($_POST["submitUpload"]) && !empty($_FILES["fileupload"]["name"])){
     
    if (file_exists($targetFilePath)) {
        echo "Tệp tin đã tồn tại";
    }
    else{
    // Khai báo biến mảng lưu trữ các định dạng mà bạn cho phép upload lên
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){//Kiểm tra 1 giá trị có thuộc mảng không
        //xử lí upload đang lưu ở thư mục tạm


        $tagetFile = "data_upload/" . $fileName;
        var_dump($tagetFile);
        copy($_FILES["fileupload"]["tmp_name"], $tagetFile);
        // echo "<img src='".$tagetFile."'>";
        if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $tagetFile)){//Lấy từ nơi tạm đẩy vào nơi chính
            // Lưu đường dẫn vào cơ sở dữ liệu
        //   echo"1"; die;
            $sql = "INSERT into avt_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"; 
            echo $sql;
            $insert=mysqli_query($conn,$sql);
            if($insert){ //kiểm tra việc query thành công
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                // header("location:show.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }
        else{     
            var_dump($_FILES["fileupload"]["error"]);  
            echo"2"; die;
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
    }     
    }
   
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
