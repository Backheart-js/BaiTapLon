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
    <header class="">biểu tượng</header>
    <div class="  "style="background-color: #313131;">
      <form
        action="upload.php"
        method="post"
        enctype="multipart/form-data"
        class="form_upload"
        style="height :100vh;margin=0;"
      >
        <h3 class=""style="color:#fefefe">Bạn có thể tải thêm 1000 ảnh và video lên</h3>
        <h5 style="color:#fefefe">Kéo & thả ảnh và video ở đây hoặc</h5>
        <input type="file" name="myfile" class="btn btn-primary" />
        <input type="submit" name="sbmUpload" value="Upload" />
      </form>
    </div>
  </body>
</html>
