<?php
    include_once "personal-page-user.php";
?>

<div class="border about bg-light mt-2 pt-2 " style="heigth:100vh">
        <div class="main  my-5 bg-white border ">
              <div class="status px-5 container-fluid d-flex">
                  <a href="#" class="d-block col-md-11 text-decoration-none p-5">
                    <i class="pt-5 fs-5">Write a little about yourself</i>
                  </a>
                  <a href="#" class="col-md py-5 text-end">
                    <i class="bi bi-pen-fill fs-3"></i>
                  </a>
              </div>
              <hr>
              <div class="nature px-5 pb-3 container-fluid ">
                <div class="picture py-2 container-fluid d-flex">
                  <h4 class="col-md-2 ps-5 pt-3 d-inline">nature</h4>
                  <a href="#" class="col-md-1  pt-2 text-end">
                    <i class="bi bi-pen-fill fs-3"></i>
                  </a>
                  <a href="" class="col-md text-end">
                    <i class="bi bi-plus fs-1"></i>
                  </a>
                </div>
                <div class="showcase mx-5 d-flex justify-content-center pt-auto pb-auto">
                  <h3 class=" text-center fs-3 mx-5 px-5 mt-auto mb-auto fw-normal">
                      Đây là nơi trưng bày của bạn.Hiển thị tối đa 25 ảnh của bạn.
                      <br>
                      <a href="">Bắt đầu</a>
                  </h3>
                </div>
              </div>
              <hr>
              <div class="info px-5">
                <a href="" class="d-block text-end">
                  <i class="bi bi-pen-fill fs-3"></i>
                </a>
                <div class="month-join">
                  <h4 class="px-5 py-3 fw-normal">Joined</h4>
                  <!-- get month -->
                </div>
                <div class="email-account">
                  <h4 class="px-5 py-3 fw-normal">Email</h4>
                  <!-- get email -->
                </div>
              </div>
              <hr>
              <div class="follow">
                    <!-- sử lý ajax -->
              </div>

        </div>
  </div>

<?php
    include_once "personal-page-footer.php";
?>

