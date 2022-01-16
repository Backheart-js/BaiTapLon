<?php
    
     include_once "personal-page-user.php";
?>

  <!-- about -->
  <div id="about-view" class=" border bg-light subnav-view mt-2 pt-2 js-about-view" style="heigth:100vh">
          <div class="main  my-5 bg-white border ">
                <div class="status px-5 container-fluid d-flex position-relative">
                    <p href="" id="aboutyou" class="d-block col-md-11 p-5">
                      <i class="fs-5 js-aboutyou">Hãy giới thiệu đôi điều về bạn</i>
                    </p>
                      <i class="col-md py-5 text-end bi bi-pen-fill fs-3 js-about-write"></i>
                </div>
                <div class="container-fluid text-end write-about ">
                      <textarea name="" id="textarea"  rows="5" class=" fs-5 container-fluid js-write-area"></textarea>
                      <button id="save" class="btn bg-primary d-inline p-2 m-2 px-3 js-about-save">Lưu  </button>
                      <button id="cancel" class="btn bg-secondary d-inline p-2 m-2 px-3 js-about-cancel">Hủy</button>                 
                </div>
                <hr>
                <div class="nature px-5 pb-3 container-fluid ">
                  <div class="picture py-2 container-fluid d-flex">
                    <h4 class="col-md-2 ps-5 pt-3 d-inline">nature</h4>
                    <a href="" class="col-md-1  pt-2 ">
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
                  <div class="month-join d-flex">
                    <h4 class="px-5 py-3 fw-normal">Đã tham gia</h4>
                      <?php
                        echo "<span class='px-5 py-3 fs-5' >Đã tham gia ".$month."/".$year."</span>";
                        //  echo "<span class=''>/".$year."</span>";
                      ?>
                    <!-- get month -->
                  </div>
                  <div class="email-account d-flex">
                    <h4 class="px-5 py-3 fw-normal">Email</h4>
                    <?php 
                      echo "<span class='navbar__link px-5 py-3 fs-5'>".$_SESSION['isLoginOK']."</span>";
                    ?>
                    <!-- get email -->
                  </div>
                </div>
                <hr>
                <div class="follow">
                      <!-- sử lý ajax -->
                </div>

          </div>
  </div>

  <!-- end about -->
  <!-- photostream -->
  <div id="photostream-view" class="bg-light mt-2 pt-2 px-5 subnav-view js-photostream-view" >
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

      <div class="mx-5 px-5 mb-5 pb-5">
        <?php
          // require "../../uploads/show.php";
          
          require "../../config/connect_db.php";
          $sql="SELECT * FROM avt_images ORDER BY uploaded_on DESC";
          $result = mysqli_query($conn,$sql);
          ?>
              <?php
                  // echo(mysqli_num_rows($result));
                  if(mysqli_num_rows($result)){       
                      while($row=mysqli_fetch_assoc($result)){
                          $imageURL = './upload-avt/data_upload/'.$row["file_name"];
                          // $imageURL = ('./../data_upload/') . '/'.$row["file_name"];
              ?>
              <img src="<?php echo $imageURL; ?>" alt="" style="height:150px" class="m-2"/>
                  <?php }
                      }else{ 
                  ?>
                      <div class="photo-main m-5">
                        <div class="text-center m-5">
                            <h2 class="fw-normal">Bạn không có ảnh công khai.</h2>
                            <h4 class="fw-normal p-5">Dòng ảnh của bạn là danh mục đầu tư trực tiếp của bạn. Đặt ảnh của bạn ở chế độ công khai bằng Thư viện ảnh để đưa vào dòng ảnh của bạn.</h4>
                            <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Go to camera roll</a></button>
                        </div>
                      </div>
                        <div class="subnav-view-bg mx-5">
                      </div>
                  <?php } 
                  ?>     
        
      </div>
  </div>
  <!--end photostream -->

  <!-- album -->
  <div id="album-view" class="bg-light mt-2 pt-2 px-5 subnav-view js-album-view" >
      <div class="photo-main m-5">
          <div class="text-center m-5 px-5">
              <h2 class="fw-normal">Hãy làm một album.</h2>
              <h4 class="fw-normal p-5 mx-5">Dễ dàng sắp xếp tất cả ảnh của bạn thành các album đẹp mắt để chia sẻ với bạn bè, gia đình hoặc thậm chí các thành viên Flickr khác.</h4>
              <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Go to camera roll</a></button>
            </div>
      </div>
      <div class="subnav-view-bg-bg mx-5">
      </div>
  </div>
  <!--end album -->

  <!-- faves -->
  <div id="faves-view" class="bg-light mt-2 pt-2 px-5 subnav-view js-faves-view" >
      <div class="photo-main m-5">
          <div class="text-center m-5 px-5">
              <h2 class="fw-normal">Bắt đầu chọn ảnh yêu thích của bạn. Chỉ cần nhấn vào dấu sao.</h2>
              <h4 class="fw-normal p-5 mx-5">Thích điều bạn nhìn thấy? Hãy cho nhiếp ảnh gia biết bằng cách nhấn vào biểu tượng ngôi sao.</h4>
              <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Bắt đầu khám phá Flickr</a></button>
            </div>
      </div>
      <div class="subnav-view-bg mx-5">

      </div>
  </div>
  <!--end faves -->

  <!-- galleries -->
  <div id="galleries-view" class="bg-light mt-2 pt-2 p-5 mb-5 subnav-view js-galleries-view" >
      <div class="photo-main m-5">
          <div class="text-center m-5 px-5">
              <h2 class="fw-normal">Các bức tường trong phòng trưng bày của bạn trông trống trải quá.</h2>
              <h4 class="fw-normal p-5 mx-5">Thư viện là một cách để trưng bày ảnh và video công khai của các nhiếp ảnh gia khác. Khi bạn thấy nội dung yêu thích trên Flickr, hãy nhấn vào biểu tượng [+] để lưu lại trong phòng trưng bày của mình.</h4>
              <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Tạo phòng trưng bày</a></button>
            </div>
      </div>
      <div class="galleries-view-bg mx-5 pb-5">

      </div>
  </div>
  <!--end galleries -->

  <!-- group -->
  <div id="group-view" class="bg-light mt-2 pt-2 p-5 mb-5 subnav-view js-group-view" >
      <div class="photo-main m-5">
          <div class="text-center m-5 px-5">
              <h4 class="fw-normal p-5 mx-5">Các Nhóm trên Flickr là cách tuyệt vời để chia sẻ ảnh, đăng bình luận và tổ chức thảo luận về các chủ đề chung.
  Bắt đầu với những Nhóm sau trên Flickr</h4>
            </div>
      </div>
  </div>
  <!--end group -->

  <!-- stat -->
  <div id="stat-view" class="bg-light mt-2 pt-2 p-5 mb-5 subnav-view js-stat-view" >
      <div class="photo-main m-5">
          <div class="text-center m-5 px-5">
              <h2 class="fw-normal">Giới thiệu thống kê hoàn toàn mới cho Pro</h2>
              <h4 class="fw-normal p-5 mx-5">Hiểu về cách mọi người khám phá những hình ảnh trên Flickr của bạn. Xem ảnh nào của bạn hiện đang có xu hướng và ảnh nào hoạt động tốt nhất trong toàn bộ thời gian hoạt động của tài khoản Flickr.</h4>
              <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Tìm hiểu thêm về Pro</a></button>
            </div>
      </div>
  </div>
  <!--end stat -->

  <!-- camera-roll -->
  <div id="cameraroll-view" class="bg-light mt-2 pt-2 p-5 mb-5 subnav-view js-cameraroll-view" >
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
                </ul>
                <i class="col-md bi bi-reply text-end fs-3 me-5"></i>
                </div>
            </div>
      </nav>
    
    <div class="mx-5 px-5 mb-5 pb-5">
        <?php
          // require "../../uploads/show.php";
          
          require "../../config/connect_db.php";
          $sql="SELECT * FROM avt_images ORDER BY uploaded_on DESC";
          $result = mysqli_query($conn,$sql);
          ?>
              <?php
                  if(mysqli_num_rows($result)){       
                      while($row=mysqli_fetch_assoc($result)){
                          $imageURL = './upload-avt/data_upload/'.$row["file_name"];
                          // $imageURL = ('./../data_upload/') . '/'.$row["file_name"];
              ?>
              <img src="<?php echo $imageURL; ?>" alt="" style="height:150px" class="m-2"/>
                  <?php }
                      }else{ 
                  ?>
                      <div class="photo-main m-5">
                        <div class="text-center m-5 px-5">
                              <h2 class="fw-normal">Bạn có rất nhiều ảnh? Chúng tôi có rất nhiều không gian lưu trữ.</h2>
                              <h4 class="fw-normal p-5 mx-5">Bạn có thể kéo và thả ảnh bất kỳ đâu trên trang này
                                hoặc</h4>
                              <button class="p-2 bg-primary mb-5"><a href="" class="text-decoration-none">Chọn tập tin để tải lên</a></button>
                            </div>
                        </div>
                      <div class="cameraroll-bg mx-5 pb-5">
                      </div>
                  <?php } 
                  ?>     
        
      </div>

  </div>
  <!--end camera-roll -->



</div>

<?php
    include_once "personal-page-footer.php";
?>

