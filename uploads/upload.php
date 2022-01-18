<?php
session_start();
if(!isset($_SESSION['isLoginOK'])){
  header("location: login.php");
}
// import cấu hình bước 1
require 'dbConfig.php';
$statusMsg = '';//tạo ra 1 biến để lưu lại trang thái upload nhằm phản hồi cho người dùng
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
// Những động tác về thiết lập cho việc chuẩn bị upload
$targetDir = ('containerUploads/');//Thư mục chỉ định để lưu trữ tệp tải lên;
$fileName = basename($_FILES["myfile"]["name"]);//$_file biến siêu toàn cục
$targetFilePath = $targetDir . $fileName;//đây là tên đầy đủ+đường dẫn tệp tin lưu trữ toàn bộ phần tử
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//đang bắt định dạng tệp tin
//Bước 2: Kiểm tra người dùng đã bấm submit và file đã được chọn chưa
if(isset($_POST["sbmUpload"]) && !empty($_FILES["myfile"]["name"])){
     if (file_exists($targetFilePath)) {
        
    }
    else{
    // Khai báo biến mảng lưu trữ các định dạng mà bạn cho phép upload lên
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){//Kiểm tra 1 giá trị có thuộc mảng không
        //xử lí upload đang lưu ở thư mục tạm
        //var_dump($_FILES["myfile"]["tmp_name"]);
        //echo $targetFilePath;
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){//Lấy từ nơi tạm đẩy vào nơi chính
            // Lưu đường dẫn vào cơ sở dữ liệu
            // echo $fileName;die;
         
            try{
                $sql = "INSERT into data_images (email,file_name, uploaded_on) VALUES ('".$_SESSION['isLoginOK']."','".$fileName."', NOW())"; 
                // echo $sql;die;
                // where
                $insert=mysqli_query($conn,$sql);
               
                if($insert){ //kiểm tra việc query thành công
                    $statusMsg = "successfully";
                    
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }catch(\Exception $e){
            }
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        if($statusMsg=="successfully"){
            $srcVideo = "Check  Mark  2sec Video.mp4";
            
        }
        else {
            $srcVideo = "404 Animation Logo.mp4";
        }
    ?>
    <video playsinline="" muted="" autoplay="" loop="" src="../Assets/video/<?php echo $srcVideo; ?>" class="attachment-video" data-silent="true" style="width:100%;margin-top: -110px; position: relative;">
    </video>
    <a href="../user/Home.php" class="btn btn-primary" style="position: fixed; top:40px; left:110px;">Go back Home</a>


</body>
</html>