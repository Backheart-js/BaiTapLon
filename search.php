<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Assets/Css/css-navbar.css">
    <link rel="stylesheet" href="Assets/Css/search.css"/>
    <link rel="stylesheet" href="Assets/Css/base.css"/>
    <link rel="stylesheet" href="Assets/Css/responsive.css"/>
</head>
<body>
        <div class="container-fluid navbar-search-wrap">
            <div class="container navbar-search-content">
                <div class="row ps-4 pe-4 h-100">
                    <div class="navbar-search__logo-wrap col-md-5 col-sm-5 row">
                        <a href="#" class="col-md-3 col-sm-8 d-flex">
                            <img class="navbar-search__logo-img" src="./Assets/data_img/flickr_demo.svg" alt="">
                        </a>
                        <div class="navbar__cate-wrap col-md-9">
                            <ul class="navbar__cate-list">
                                <li class="navbar__cate-item">
                                    <a href="" class="navbar__cate-link">Khám phá</a>
                                    <ul class="navbar__subcate-list">
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Ảnh gần đây</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Xu hướng</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Sự kiện</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">The Common</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Phòng trưng bày trên Flickr</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Bản đồ thế giới</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Tìm máy ảnh</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Flickr Blogs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__cate-item">
                                    <a href="" class="navbar__cate-link">In</a>
                                    <ul class="navbar__subcate-list">
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">In và hình ảnh nghệ thuật</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Phóng sự ảnh</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__cate-item">
                                    <a href="" class="navbar__cate-link">Dùng Pro</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="navbar-search__input-login col-md-7">
                        <div class="row h-100">
                            <div class="navbar-search__input-wrapper col-md-7 d-flex">
                                <div class="navbar-search__input-wrap">
                                    <span class="navbar-search__input-icon">
                                        <i class="fas fa-search" style="font-size: 17px; transform: translateY(3px); color: #999;"></i>
                                    </span>
                                    <span>
                                        <input class="navbar-search__input" type="text" placeholder="Ảnh, mọi người hoặc nhóm">
                                    </span>
                                    <div class="navbar-search__select-wrap">
                                        <ul class="navbar-search__select-list">
                                            <li class="navbar-search__select-item">
                                                <a href="search.html" class="navbar-search__select-link">
                                                    <i class="navbar-search__select-icon bi bi-image"></i>
                                                    Tìm ảnh
                                                </a>
                                            </li>
                                            <li class="navbar-search__select-item">
                                                <a href="" class="navbar-search__select-link">
                                                    <i class="navbar-search__select-icon bi bi-people-fill"></i>                                                      
                                                    Tìm người
                                                </a>
                                            </li>
                                            <li class="navbar-search__select-item">
                                                <a href="" class="navbar-search__select-link">
                                                    <i class="navbar-search__select-icon fas fa-users"></i>                                                
                                                    Tìm nhóm
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="navbar-search__user-wrap d-flex col-md-5">
                                <div class="navbar-search__upload">
                                    <a href="" class="navbar-search__upload-link">
                                        <i class="navbar-search__upload-icon fas fa-cloud-upload-alt"></i>
                                    </a>
                                </div>
                                <div class="navbar-search__login-wrap">
                                    <button class="navbar-search__login-btn btn">
                                        Đăng nhập
                                    </button>
                                </div>
                                <div class="navbar-search__signup-wrap">
                                    <button class="navbar-search__signup-btn btn btn-primary">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid category-search-wrap">
                <div class="container category-search-content ps-4 pe-4">
                    <div class="container-fluid category-search__select">
                            <ul class="row category-search__select-list">
                                <li class="category-search__select-item">
                                    <a href="" class="category-search__select-link">
                                        <span>Hình ảnh</span>
                                    </a>
                                </li>
                                <li class="category-search__select-item">
                                    <a href="" class="category-search__select-link">
                                        <span>Mọi người</span>
                                    </a>
                                </li>
                                <li class="category-search__select-item">
                                    <a href="" class="category-search__select-link">
                                        <span>Nhóm</span>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="container-fluid category-search__filer">
    
                    </div>
                </div>
                <div class="container category-search-content ps-4 pe-4" style="height: 40px;">
                    <div class="row" style="height: 100%; justify-content: space-between;">
                        <div class="category-dropdown col-md-4">
                            <div class="category-dropdown__wrap">
                                <h5 class="dropdown__content">
                                    Mọi giấy phép <i class="fas fa-angle-down dropdown__icon"></i>
                                </h5>
                            
                                <ul class="navbar__subcate-list">
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Mọi giấy phép Creative</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Cho phép sử dụng thương mại</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Cho phép sửa đổi</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Không có hạn chế bản quyền</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Tác phẩm của chính phủ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-dropdown__wrap">
                                <h5 class="dropdown__content">
                                    Bật Tìm kiếm an toàn  <i class="fas fa-angle-down"></i>
                                </h5>
                                
                                <ul class="navbar__subcate-list">
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Tìm kiếm an toàn vừa phải</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Tắt tìm kiếm an toàn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="category-filter col-md-4">
                            <div class="category-filter__wrap">
                                <h5 class="category-filter__content">
                                    <i class="fas fa-share"></i>
                                    Chia sẻ
                                </h5>
                            </div>
                            <div class="category-filter__wrap">
                                <h5 class="category-filter__content">
                                    Liên quan <i class="fas fa-angle-down dropdown__icon"></i>
                                </h5>
                            </div>
                            <div class="category-filter__wrap">
                                <h5 class="category-filter__content">
                                    <i class="category-filter__icon bi bi-grid-fill"></i>
                                    <i class="category-filter__icon bi bi-grid-1x2-fill"></i>
                                    <i class="category-filter__icon fas fa-folder-open"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid body-search-wrap">
            <div class="container body-search-content">
                <div class="row">
                    <div class="body-search__img-wrap col-md-3"></div>
                    <div class="body-search__img-wrap col-md-3"></div>
                    <div class="body-search__img-wrap col-md-3"></div>
                    <div class="body-search__img-wrap col-md-3"></div>
                </div>
            </div>
        </div>

        
    
        <script src="./Assets/JavaScript/app.js"></script>
</body>
</html>