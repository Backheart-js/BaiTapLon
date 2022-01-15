<?php 
    // Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
        header('Location: login.php');   //Đi ra
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ | Flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assets/Css/base.css"/>
    <link rel="stylesheet" href="../Assets/Css/main.css" /> 
    <link rel="stylesheet" href="../Assets/Css/search.css"/>
    <link rel="stylesheet" href="../Assets/Css/navbar.css">
    <link rel="stylesheet" href="../Assets/Css/responsive.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php 
      require_once("./link-navbar.php");
    ?>
  
    <div class="container-fluid content-wrapper" style="margin-top: 50px">
      <div class="container">
        <div class="row">
          <div class="content__activity col-md-8">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <li class="nav-item dropdown col-md-10">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Tất cả Hoạt động
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                    <a class="dropdown-item" href="#">Tất cả Hoạt động</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Mọi người</a></li>
                    <li><a class="dropdown-item" href="#">Nhóm</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Bạn bè và gia đình</a>
                    </li>
                  </ul>
                </li>
                
                <div class="col-md-2">
                  <a href="" style="color: #898989"
                    ><i class="fas fa-th"></i
                  ></a>
                  <a href="" class="" style="color: #898989"
                    ><i class="fab fa-gripfire ms-3"></i
                  ></a>
                  <a href="" class="" style="color: #006dac"
                    ><i class="fas fa-square ms-3"></i
                  ></a>
                </div>
              </div>
            </nav>
            <div class="container-head" style="justify-content: center">
              <h4 style="margin: 40px 126px 20px 126px; font-weight: 250">
                Hiện tại không có hoạt động nào để hiển thị
              </h4>
              <p style="margin: 0 20px ;text-align:center ;">
                Hãy xem thông tin về các nhiếp ảnh gia được khuyến nghị bên dưới
                và bắt đầu theo dõi những người này để xem nội dung của họ ở
                đây.
              </p>
            </div>
          </div>
          <div class="col-md-4 content__poster" >
            <h5 class="content__poster-title" style="margin-top: 30px;font-size: 1rem">
              <str> Khám phá ảnh phổ biến </str>
            </h5>
            <div class="content__poster-img-wrap">
              <div class="row">
                <div class="card-group col-md-10">
                  <div class="card">
                    <a href="">
                      <img
                        src="../Assets/data_img/forest.jpeg"
                        class="card-img-top"
                        alt="..."
                      />
                    </a>
                  </div>
                  <div class="card">
                    <a href="" class="">
                      <img
                        src="../Assets/data_img/snow.jpeg"
                        class="card-img-top"
                        alt="..."
                      />
                    </a>
                  </div>
                  <div class="card">
                    <a href="" class="">
                      <img
                        src="../Assets/data_img/moutanin-2.jpeg"
                        class="card-img-top"
                        alt="..."
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card-group col-md-10">
                <div class="card col-md-6">
                  <a href="">
                    <img
                      src="../Assets/data_img/river.jpeg"
                      class="card-img-top"
                      alt="..."
                    />
                  </a>
                </div>
                <div class="card col-md-6">
                  <a href="">
                    <img
                      src="../Assets/data_img/sky.jpeg"
                      class="card-img-top"
                      alt="..."
                    />
                  </a>
                </div>
                <div class="card col-md-6">
                  <a href="" class="">
                    <img
                      src="../Assets/data_img/mountains_hero.jpeg"
                      class="card-img-top"
                      alt="..."
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content__subribe-list col-md-8">
            <div class="row">
              <strong>
                <h5 style="font-size: 1rem">
                  Những người bạn có thể muốn theo dõi
                </h5>
              </strong>
              <div class=" col-md-6">
                <img
                  src="../Assets/data_img/field.jpeg"
                  class="card-img-top-subribe"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Tina Sosna</h5>
                  <a href="#" class="btn btn-primary stretched-link card-button">
                    <i class="far fa-plus"></i>
                    Theo dõi</a
                  >
                </div>
              </div>
              <div class=" col-md-6">
                <img
                  src="../Assets/data_img/snow.jpeg"
                  class="card-img-top-subribe"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title" >Crodd Chin</h5>

                  <a href="#" class="btn btn-primary stretched-link card-button">
                    <i class="far fa-plus"></i>
                    Theo dõi
                  </a>
                </div>
              </div>
              <div class=" col-md-6">
                <img
                  src="../Assets/data_img/village.jpeg"
                  class="card-img-top-subribe"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Pascal Michaile</h5>

                  <a href="#" class="btn btn-primary stretched-link card-button">
                    <i class="far fa-plus"></i>
                    Theo dõi
                  </a>
                </div>
              </div>
              <div class=" col-md-6">
                <img
                  src="../Assets/data_img/forest.jpeg"
                  class="card-img-top-subribe"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Newspaper guy</h5>
                  <a href="#" class="btn btn-primary stretched-link card-button">
                    <i class="far fa-plus"></i>
                    Theo dõi
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          <div class="content__group col-md ">
            <strong>
              <h5 style="font-size: 1rem;">Các nhóm dành cho bạn</h5>
            </strong>
            <div>
            <div class="content__group-list  ">
              <img src="../Assets/data_img/flickr_icon.jpeg" style="border-radius: 40rem; margin-left: 20px;"alt="" />
             <button ..type="button" class="btn btn-primary content__group-btn "style="width: 120px;height: 40px;border-radius: 4px;">Tham gia</button> 
            </div>
            <div>
              <div class="card-group col-md-10">
                <div class="card">
                  <img src="../Assets/data_img/img-sea.jpeg" class="card-img-top" alt="...">
                  
                </div>
                <div class="card">
                  <img src="../Assets/data_img/img-tree.jpeg" class="card-img-top" alt="...">
                  
                </div>
                <div class="card">
                  <img src="../Assets/data_img/sunshine.jpeg" class="card-img-top" alt="...">
                 
                </div>
              </div>
            </div>
            </div>
           
            <div class="content__group-list">
              <img src="../Assets/data_img/image-user.jpeg" alt="" style="width:40px;height: 40px;border-radius: 40px;margin-left: 20px;" />
             <button ..type="button " class="btn btn-primary content__group-btn" style="width: 120px;height: 40px;border-radius: 4px;">Tham gia</button> 
            </div>
            <div class="card-group col-md-10">
              <div class="card">
                <img src="../Assets/data_img/dog-stupdi.jpeg" class="card-img-top" alt="...">
                
              </div>
              <div class="card">
                <img src="../Assets/data_img/img-dog.jpeg" class="card-img-top" alt="...">
                
              </div>
              <div class="card">
                <img src="../Assets/data_img/cat.jpeg" class="card-img-top" alt="...">
               
              </div>
            </div>
            
           
          </div>
          <div class="content__Blog ">
            <div class="col-md-8">
              <strong>
                <h5 class="col-md-12 mt-5" style="font-size: 1rem;">Blog Flickr</h5>
              </strong>
              <img
                src="../Assets/data_img/flickr short best.jpeg"
                alt=""
                class="col-md-12"
              />
              <a href="" class="content__Blog-link" style="color: #212124"
                >NOW OPEN -Your Best Shot 2021</a
              >
              <p style="font-size: 0.8rem">
                Share your best shot of the year with the Flickr community in
                Your Best Shot 2021! Stay for the discussions, critique, and a
                chance to win some great prizes.
              </p>
              <a href="" class="content__Blog-link" style="color: #006dac"
                >ĐỌC THÊM</a
              >
            </div>
          </div>
          </div>
        
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Assets/JavaScript/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="../Assets/JavaScript/link-navbar.js"></script>
  </body>
</html>
