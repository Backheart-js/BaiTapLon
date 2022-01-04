<?php
    include "personal-page-user.php";
?>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Date uploaded
            </a>
            <ul class="dropdown-menu fs-4" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Date uploaded</a></li>
                <li><a class="dropdown-item" href="#">Date taken</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Public view
            </a>
            <ul class="dropdown-menu fs-4" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Public view</a></li>
                <li><a class="dropdown-item" href="#">Friend view</a></li>
                <li><a class="dropdown-item" href="#">Family view</a></li>
                <li><a class="dropdown-item" href="#">Friend & family view</a></li>
                <li><a class="dropdown-item" href="#">View all</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>   
    </div>
  </div>
</nav> -->






<div id="photostream-view" class="bg-light mt-2 pt-2 px-5" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <ul class="col-md navbar-nav ms-5 fs-4">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ngày tải lên
                </a>
                <ul class="dropdown-menu fs-4" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Ngày tải lên</a></li>
                    <li><a class="dropdown-item" href="#">Ngày chụp </a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Chế độ xem công khai
                </a>
                <ul class="dropdown-menu fs-4" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Chế độ xem công khai</a></li>
                    <li><a class="dropdown-item" href="#">Chế độ xem bạn bè</a></li>
                    <li><a class="dropdown-item" href="#">Gia đình chế độ xem</a></li>
                    <li><a class="dropdown-item" href="#">Bạn bè và gia đình xem</a></li>
                    <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
                </ul>
                </li>
            
            </ul>
            <i class="col-md bi bi-reply text-end fs-3 me-5"></i>
            </div>
        </div>
    </nav>
    <div class="photo-main m-5">
        <div class="text-center m-5">
            <h2 class="fw-normal">Bạn không có ảnh công khai.</h2>
            <h4 class="fw-normal p-5">Dòng ảnh của bạn là danh mục đầu tư trực tiếp của bạn. Đặt ảnh của bạn ở chế độ công khai bằng Thư viện ảnh để đưa vào dòng ảnh của bạn.</h4>
            <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Go to camera roll</a></button>
          </div>
    </div>
</div>
<?php
    include "personal-page-footer.php";
?>

