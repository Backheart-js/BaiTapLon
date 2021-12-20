
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Assets/Css/base.css"/>
    <link rel="stylesheet" href="Assets/Css/style.css"/>
    <link rel="stylesheet" href="Assets/Css/responsive.css"/>
</head>
<body>
    <div class="Main">
        <header>
            <div class="container-fluid" id="navbar">
                <div class="row ps-4 pe-4 h-100">
                    <div class="navbar__logo-wrap col-md-2 d-flex">
                        <img class="navbar__logo-img" src="./Assets/data_img/flickr_demo.svg" alt="">
                    </div>
                    <div class="container-fluid col-md-10">
                        <div class="row h-100">
                            <div class="navbar__search-wrap col-md-9 d-flex">
                                <div class="navbar__input-wrap">
                                    <span class="navbar__input-icon">
                                        <i class="fas fa-search" style="font-size: 17px; transform: translateY(3px); color: #999;"></i>
                                    </span>
                                    <span>
                                        <input class="navbar__search-input" type="text" placeholder="Ảnh, mọi người hoặc nhóm">
                                    </span>
                                </div>
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
                        <a href="" class="content__text-btn btn btn-light">
                            <p>
                                Bắt đầu miễn phí
                            </p>
                        </a>
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
</body>
</html>