<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Assets/Css/base.css"/>
    <link rel="stylesheet" href="Assets/Css/style.css"/>
    <link rel="stylesheet" href="Assets/Css/main.css"/>
    <link rel="stylesheet" href="Assets/Css/responsive.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="Main">
        <header>
            <div class="container-fluid" id="navbar">
                <div class="row ps-4 pe-4 h-100">
                    <div class="navbar__logo-wrap col-md-2 d-flex">
                        <a href="#" class="d-flex">
                            <img class="navbar__logo-img" src="./Assets/data_img/flickr_demo.svg" alt="">
                        </a>
                    </div>
                    <div class="container-fluid col-md-10">
                        <div class="row h-100">
                            <div class="navbar__search-wrap col-md-9 d-flex">
                                <form action="search-guest.php" method="POST" class="navbar__input-wrap">
                                    <span class="navbar__input-icon">
                                        <i class="fas fa-search" style="font-size: 17px; transform: translateY(3px); color: #999;"></i>
                                    </span>
                                    <span>
                                        <input class="navbar__search-input" name="textInput" type="text" placeholder="Ảnh, mọi người hoặc nhóm">
                                    </span>
                                    <div class="navbar__select-wrap">
                                        <ul class="navbar__select-list">
                                            <li class="navbar__select-item">
                                                <div class="navbar__item-wrap d-flex">
                                                    <i class="navbar__select-icon bi bi-image"></i>
                                                    <input type="submit" value="Tìm ảnh" class="navbar__select-link btn" id="submit-search-img">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="navbar__select-item">
                                                <div class="navbar__item-wrap d-flex">
                                                    <i class="navbar__select-icon bi bi-people-fill"></i>                                                      
                                                    <input type="submit" value="Tìm người" class="navbar__select-link btn">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="navbar__select-item">
                                                <div class="navbar__item-wrap d-flex">
                                                    <i class="navbar__select-icon fas fa-users"></i>                                                
                                                    <input type="submit" value="Tìm nhóm" class="navbar__select-link btn">
                                                    </input>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
    
                            <div class="navbar__user-wrap d-flex col-md-3">
                                <div class="navbar__login-wrap">
                                    <button class="navbar__login-btn btn">
                                        Đăng nhập
                                    </button>
                                </div>
                                <div class="navbar__signup-wrap">
                                    <button class="navbar__signup-btn btn btn-light">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
        </header>
        <div class="content__home-guest">
            <!-- Slider -->
            <div class="slider-wrap">
                <div id="carouselExampleFade" class="bg-slider-guest carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="Assets/data_img/bg-home-guest-4.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="Assets/data_img/bg-home-guess-2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="Assets/data_img/bg-home-guess-3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <!-- Text on slider -->
                    <div class="container content__text">
                        <h1 class="content__text-title">
                            Tìm nguồn cảm hứng của bạn
                        </h1>
                        <h3 class="content__text-sub">
                            Hãy tham gia cộng đồng Flickr, ngôi nhà của hàng chục tỷ bức ảnh và 2 triệu nhóm.
                        </h3>
                        <button href="" class="content__text-btn btn btn-light">
                            <p>
                                Bắt đầu miễn phí
                            </p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer__home-guest container-fluid">
            <ul class="footer__home-guest-list">
                <div class="row" style="justify-content: space-around;">
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Giới thiệu</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Việc làm</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Blog</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Nhà phát triển</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Quy tắc</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Trợ giúp</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Diễn đàn</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Sự riêng tư</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Điều khoản</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">Cookie</a>
                    </li>
                    <li class="footer__home-guest-item">
                        <a href="" class="footer__home-guest-link">
                            Tiếng Việt
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </li>
                    <li class="footer__home-guest-item">
                        <div class="footer__guest-icon">
                            <a href="" class="footer__home-guest-link">
                                <i class="footer__home-guest-icon fab fa-facebook-square"></i>
                            </a>
                        </div>
                        <div class="footer__guest-icon">
                            <a href="" class="footer__home-guest-link">
                                <i class="footer__home-guest-icon fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="footer__guest-icon">
                            <a href="" class="footer__home-guest-link">
                                <i class="footer__home-guest-icon fab fa-instagram"></i>
                            </a>
                            
                        </div>
                        
                    </li>
                </div>
            </ul>
        </footer>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./Assets/JavaScript/main-interface.js"></script>
    <!-- <script src="./Assets/JavaScript/search-img.js"></script> -->
</body>
</html>