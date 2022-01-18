<?php
session_start();
if(!isset($_SESSION['isLoginOK'])){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP upload file to sever and storage in Database</title>
    <link rel="stylesheet" href="/css/upload_form.css" />
  </head>
  <body style="margin:0;">
    <header class="" style="height:40px;">
    <img src="../Assets/data_img/logo_flickr.png" alt="" style=" width: 98px;height: 22px;margin-left:40px;  padding-top: 10px;">
  
  </header>
    <div class="  "style="background-color: #313131;">
      <form
        action="upload.php"
        method="post"
        enctype="multipart/form-data"
        class="form_upload"
        style="height :100vh;margin=0;"
      >
        <h2 class=""style="color:#fefefe;margin:0 404px 0 404px;padding-top:120px">Bạn có thể tải thêm 1000 ảnh và video lên</h2>
        <h4 style="color:#fefefe;margin:0 480px 0 480px;padding-top:40px">Kéo & thả ảnh và video ở đây hoặc</h4>
        <div style ="margin:0 440px 0 440px;padding-top:40px;  background-color: #0062db">
              <input type="file" name="myfile" class="btn btn-primary" />
        <input type="submit" name="sbmUpload" value="Upload" />
        </div>
    
      </form>
    </div>
  </body>
</html>