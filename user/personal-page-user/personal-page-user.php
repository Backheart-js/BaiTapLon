<?php
  session_start();
  if(!isset($_SESSION['isLoginOK'])) { 
      header('Location:../login.php');
  }
  require "../../config/connect_db.php";
  $sql = "SELECT firstname,lastname, month(email_verified_at) as month, year(email_verified_at) as year FROM users WHERE Email = '{$_SESSION['isLoginOK']}'";
  $result = mysqli_query($conn,$sql);
  $row= mysqli_fetch_array($result);
  $email=$_SESSION['isLoginOK'];
  $month=$row['month'];
  $year=$row['year'];
  $name=$row['firstname'].''.$row['lastname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Page | Flickr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="/BTL/css/signup.css"> -->
  <link rel="stylesheet" href="/BaiTapLon/Assets/Css/personal_page_user.css">
    <link rel="stylesheet" href="../../Assets/Css/search.css"/>
    <link rel="stylesheet" href="../../Assets/Css/navbar.css">
    <link rel="stylesheet" href="../../Assets/Css/responsive.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="/BaiTapLon/Assets/Javascript/personal-page-user.js"></script>
</head>

<body class="container-fluid-lg container-fluid-sm">
  
  <?php 
      require_once("../link-navbar.php");
    ?>
  
<div class="container-fluid-lg container-fluid-sm body-personal">
  <div class="container-fluid slider position-relative ">
    <div class="row position-absolute  bottom-0 text-center ms-5 bt-avt">
      <?php
         
            // $avteURL = './upload-avt/data_upload/'.$_GET['avt'];
            $sql="SELECT * FROM `avt_images` WHERE email='$email' ORDER BY uploaded_on DESC LIMIT 1";
            // $sql="SELECT * FROM avt_images where email='$email' ORDER BY uploaded_on DESC";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){       
              $row=mysqli_fetch_assoc($result);
              $avtURL = './upload-avt/data_upload/'.$row["file_name"];
              // echo $avtURL;
      ?>
           <div id="p-avatar" class="col-md-lg edit m-5 d-inline rounded-circle p-4 js-change-avt" style="background-image: url(<?php echo $avtURL ?>);">
      <?php
          }else{
        ?>
            <div id="p-avatar" class="col-md-lg edit m-5 d-inline rounded-circle p-4 js-change-avt" style="background-image: url(/BaiTapLon/Assets/data_img/icon_edit.png);">
           
        <?php
        }
        ?>
      <!-- <img id="avatar" src="/BaiTapLon/Assets/data_img/icon_edit.png" class="rounded-circle " style="width: 100px;" alt="Avatar" /> -->
      <i id="pen" class="bi bi-pen-fill fs-3 text-center "></i>
           </div>
      <div class="edit col-md edit my-5 text-center d-flex">
        <h2 class="text-center my-4">
          <?php
             echo "<span >".$name."</span>";
          ?>
        </h2>
        <button class="text-center ms-5 py-2 m-auto fs- bg-transparent border border-white"><i class="bi bi-three-dots p-3"></i></button>
      </div>
      
    </div>
    <div class="position-absolute bottom-0  d-flex" id="bt-date" style="color: white">
        <?php
            echo "<span class='navbar__link ms-5 px-5'>".$_SESSION['isLoginOK']."</span>"; 
            echo "<span >Đã tham gia ".$month."/".$year."</span>";
            // echo "<span >Đã tham gia ".$month."</span>";
            // echo "<span >/".$year."</span>";
        ?> 
    </div>
  </div> 
  <nav class="container-fluid navbar navbar-light bg-white pt-0 ">
    <div class="container-fluid text-center ms-5 pb-1 nav-about">
      <ul class=" d-flex mx-5" type="none">
        <li> <a class="col-md subnav navbar-brand px-3 fs-4 " id="about" href="#about-view" active>Giới thiệu</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="photostream" href="#photostream-view" >Kho ảnh</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="albums" href="#albums-view">Album</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="faves" href="#faves-view">Yêu thích</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="galleries" href="#galleries-view">Thư viện</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="group" href="#group-view">Nhóm</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="stats" href="#stat-view">Thống kê</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="cameraRoll" href="#cameraroll-view">Cuộn camera</a></li>
      </ul>
    </div>
  </nav>


  <div class="modal container-fluid mt-2">
        <div class="modal-container">
          <header class="container-fluid modal-header navbar navbar-light  d-flex bt-modal">
                <i class="bi bi-list bt-menu p-2 fs-3 mb-3">
                  <ul class="row col-md text-center bt-subnav-modal" type="none">
                    <li class="col-md-4 bt-subnav pb-3" id="js-modal-photostream"> <a class="col-fm subnav navbar-brand px-5"  href="#js-photostream" active>Kho ảnh</a></li>
                    <li class="col-md-4 bt-subnav pb-3" id="js-modal-album"><a class="col-fm subnav navbar-brand px-5 "  href="#js-album">Album</a></li>
                    <li class="col-md-4 bt-subnav pb-3" id="js-modal-update"><a class="col-fm subnav navbar-brand px-5 "  href="#js-update">Tải lên</a></li>
                  </ul>
                </i>
                <!-- <input id="search" class="col-md mb-4 p-2" type="search" placeholder="Search" aria-label="Search"> -->
                <div class="col-md d-flex position-relative mb-4 p-2">
                  <button class="position-absolute btn " type="submit" style="height:40px"><i class="bi bi-search fs-5"></i></button>
                  <input id="search-avt" class="form-control me-2 ps-5" type="search" placeholder="Search" aria-label="Search">
              </div>
                <i class="col-md-1 bi bi-x-lg fs-4 pb-4 text-end js-modal-close"></i> 
                <hr>
          </header>
         
        <div class="modal-body fs-4 p-0 m-3 text-start" id="js-photostream" >
            <?php   
            require "../../config/connect_db.php";
            $sql="SELECT * FROM avt_images where Email='$email' ORDER BY uploaded_on DESC";
            $result = mysqli_query($conn,$sql);
            ?>
                <?php
                    if(mysqli_num_rows($result)){       
                        while($row=mysqli_fetch_assoc($result)){
                            $imageURL = './upload-avt/data_upload/'.$row["file_name"];
                            // $imageURL = ('./../data_upload/') . '/'.$row["file_name"];
                ?>
                <img src="<?php echo $imageURL; ?>" alt="" style="height:20%;width:20%" class="ms-2"/>
                    <?php }
                        }else{ 
                    ?>
                          <div class="modal-body text-center fs-4 p-5 m-3" >
                          <img src="/BaiTapLon/Assets/data_img/cloud-arrow-up.png" alt="">
                          <p class="p-5">Kéo và thả ảnh của bạn để tải lên hoặc <a href="" >duyệt xem.</label></a>
                          
                          Ảnh được tải lên ở đây sẽ được thêm vào <a href="Photostream.php">Kho ảnh</a> của bạn ở chế độ riêng tư.</p>
                          <form action="upload-avt/upload-avt-process.php" method="post" enctype="multipart/form-data">
                              <input type="file" id="files" name="fileupload"/>
                              <input type="submit" name="submitUpload" value="Upload">
                          </form>
                          </div>
                        
                    <?php } 
                    ?>             
        </div>

        <div class="modal-body text-center fs-4 p-5 m-3" id="js-album" >
              <p>Không có album.</p>
        </div>
        
        <div class="modal-body text-center fs-4 p-5 m-3" id="js-update">
              <img src="/BaiTapLon/Assets/data_img/cloud-arrow-up.png" alt="">
              <p class="p-5">Kéo và thả ảnh của bạn để tải lên hoặc <a href="" >duyệt xem.</label></a>
              
              Ảnh được tải lên ở đây sẽ được thêm vào <a href="Photostream.php">Kho ảnh</a> của bạn ở chế độ riêng tư.</p>
              <form action="upload-avt/upload-avt-process.php" method="post" enctype="multipart/form-data">
                  <input type="file" id="files" name="fileupload"/>
                  <input type="submit" name="submitUpload" value="Upload">
              </form>

        </div>





        </div>
  </div>

  

  
  
  

  
 