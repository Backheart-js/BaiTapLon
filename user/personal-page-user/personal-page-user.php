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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="/BaiTapLon/Assets/Javascript/personal-page-user.js"></script>
</head>

<body>
  <header class="header ">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid me-5">
        <img src="/BaiTapLon/Assets/data_img/flickr_demo.svg" alt="" class="d-inline-block align-text-top ps-5 ms-5" style="height:30px">
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3 fs-5">
              <a class="nav-link" aria-current="page" href="#">You</a>
            </li>
            <li class="nav-item mx-3 fs-5">
              <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item dropdown mx-3 fs-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prints</a>
            </li>
            <li class="nav-item mx-3 fs-5">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Get Pro</a>
            </li>
          </ul>
          
          <div class="d-flex position-relative">
            <button class="position-absolute btn " type="submit" style="height:40px"><i class="bi bi-search fs-5"></i></button>
            <input class="form-control me-2 ps-5" type="search" placeholder="Photos,people,or groups" aria-label="Search">
          </div>
          <div class="d-flex me-5">
            <a href=""><i class="icon bi bi-cloud-arrow-up-fill mx-2 fs-3"></i></a>
            <a href=""><i class="icon bi bi-bell-fill mx-2 fs-3"></i></a>
            <a href=""> <i class="icon bi bi-person-circle mx-2 fs-3"></i></a>
          </div>
        </div> 
      </div>
  </nav>
  </header>

  

  <div class="container-fluid slider position-relative">
    <div class="row my-5 position-absolute mb-3 bottom-0 text-center ms-5">
      <div id="p-avatar" class="col-md edit m-5 d-inline rounded-circle p-4">
        <!-- <img id="avatar" src="/BaiTapLon/Assets/data_img/icon_edit.png" class="rounded-circle " style="width: 100px;" alt="Avatar" /> -->
        <i id="pen" class="bi bi-pen-fill fs-3 text-center"></i>
      </div>
      <div class="edit col-md edit my-5 text-center d-flex">
        <h1 class="text-center my-4">PhamHuyen</h1>
        <button class="text-center ms-5 py-2 m-auto fs- bg-transparent border border-white"><i class="bi bi-three-dots p-3"></i></button>
      </div>
    </div>
  </div> 
  <nav class="container-fluid navbar navbar-light bg-white pt-0 ">
    <div class="container-fluid text-center ms-5 pb-1">
      <ul class=" d-flex mx-5" type="none">
        <li> <a class="col-md subnav navbar-brand px-3 fs-4 " id="about" href="index.php">Giới thiệu</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="photostream" href="">Kho ảnh</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="albums" href="Albums.php">Album</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="faves" href="Faves.php">Yêu thích</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="galleries" href="Galleries.php">Thư viện</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="group" href="Group.php">Nhóm</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="stats" href="Stats.php">Thống kê</a></li>
        <li><a class="col-md subnav navbar-brand px-3 fs-4" id="cameraRoll" href="Camera_roll.php">Cuộn camera</a></li>
      </ul>
    </div>
  </nav>

  <div class="modal container-fluid">
        <div class="modal-container">
          <header class="container-fluid modal-header navbar navbar-light  d-flex ">
                <ul class="col-md text-center d-flex d-inline " type="none">
                  <li class="pb-3"> <a class="col-fm subnav navbar-brand px-5  " id="about" href="index.php">Kho ảnh</a></li>
                  <li class="pb-3"><a class="col-fm subnav navbar-brand px-5 " id="photostream" href="">Album</a></li>
                  <li class="pb-3"><a class="col-fm subnav navbar-brand px-5 " id="albums" href="Albums.php">Tải lên</a></li>
                </ul>
                <input id="search" class="col-md mb-4 p-2" type="search" placeholder="Search" aria-label="Search">
                <i class="col-md-1 bi bi-x-lg fs-4 pb-4 text-end"></i> 
                <hr>
          </header>
          
        <div class="modal-body text-center fs-4 p-5 m-5">
              <img src="/BaiTapLon/Assets/data_img/cloud-arrow-up.png" alt="">
              <p class="p-5">Kéo và thả ảnh của bạn để tải lên hoặc <a href="" ><input type="file" id="files" visbility="hidden" style="display:none" />duyệt xem.</label></a>
              
              Ảnh được tải lên ở đây sẽ được thêm vào <a href="">Kho ảnh</a> của bạn ở chế độ riêng tư.</p>
        </div>
        </div>
  </div>

  

  
  
  

  
 