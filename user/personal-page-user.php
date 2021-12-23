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
  <link rel="stylesheet" href="/BTL_Test/BaiTapLon/Assets/Css/personal_page_user.css?v=<?php echo time(); ?>">
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid me-5">
        <img src="/BTL_Test/BaiTapLon/assets/data_img/flickr_demo.svg" alt="" class="d-inline-block align-text-top ps-5 ms-5" style="height:30px">
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
  <div class="slider">
    <div class="item_slider"></div>
  </div>
  <nav class="navbar navbar-light bg-light pt-0">
    <div class="container-fluid text-center mx-5">
      <ul class="container-fluid d-flex mx-5 " type="none">
        <li> <a class="subnav navbar-brand px-5 fs-4" href="#">About</a></li>
        <li><a class="subnav navbar-brand px-5 fs-4" href="#">Photostream</a></li>
        <li><a class="subnav navbar-brand px-5 fs-4" href="#">Albums</a></li>
        <li><a class="subnav navbar-brand px-5 fs-4" href="#">Faves</a></li>
        <li><a class="subnav navbar-brand px-5 fs-4" href="#">Galleries</a></li>
        <li><a class="navbar-brand px-5 fs-3 " href="#"><i class="bi bi-three-dots text-end"></i></a></li>
      </ul>
     
    </div>
  </nav>
</body>

</html>