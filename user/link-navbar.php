<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assets/Css/base.css"/>
    <link rel="stylesheet" href="../Assets/Css/search.css"/>
    <link rel="stylesheet" href="../Assets/Css/navbar.css">
    <link rel="stylesheet" href="../Assets/Css/responsive.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body> -->
    <div class="container-fluid navbar-search-wrap">
        <div class="container navbar-search-content">
            <div class="row ps-4 pe-4 h-100">
                <div class="navbar-search__logo-wrap col-lg-5 col-sm-5 col-6 row">
                    <label for="sub-cate-mobile-tab" class="navbar-search__menu-on-mb col-md-3 col-4 hide-on-pc">
                        <i class="navbar-search__menu-on-mb-icon bi bi-list"></i>
                    </label>

                    <a href="/BaiTapLon/user/Home.php" class="col-lg-3 col-md-6 col-8 d-flex">
                        <img class="navbar-search__logo-img" src="/BaiTapLon/Assets/data_img/flickr_demo.svg" alt="">
                    </a>
                    <div class="navbar__cate-wrap col-lg-9 hide-on-tab-mobile">
                        <ul class="navbar__cate-list">
                            <li class="navbar__cate-item">
                                <a href="" class="navbar__cate-link">Bạn</a>
                                <ul class="navbar__subcate-list">
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#about-view" class="navbar__subcate-link">Giới thiệu</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#photostream-view" class="navbar__subcate-link">Kho ảnh</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#albums-view" class="navbar__subcate-link">Album</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#faves-view" class="navbar__subcate-link">Yêu thích</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#galleries-view" class="navbar__subcate-link">Thư viện</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#group-view" class="navbar__subcate-link">Nhóm</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#stat-view" class="navbar__subcate-link">Thống kê</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="/BaiTapLon/user/personal-page-user/#cameraroll-view" class="navbar__subcate-link">Cuộn camera</a>
                                    </li>
                                </ul>
                            </li>
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

                <div class="navbar-search__input-login col-lg-7 col-md-7 col-sm-7 col-6">
                    <div class="row h-100 navbar-search_user-login">
                        <div class="navbar-search__input-wrapper col-lg-9 col-md-7 col-3 d-flex">
                            <label for="search-mb-checkbox" class="navbar-search__wrap-on-mb hide-on-pc">
                                <i class="bi bi-search navbar-search__icon-on-mb"></i>
                            </label>

                            <input type="checkbox" hidden id="search-mb-checkbox" class="navbar-search__search-checkbox">

                            <form action="/BaiTapLon/user/search-user.php" method="POST" class="navbar-search__input-wrap">
                                <span class="navbar-search__input-icon">
                                    <i class="fas fa-search" style="font-size: 17px; transform: translateY(3px); color: #999;"></i>
                                </span>
                                <span>
                                    <input class="navbar-search__input" name="textInput" type="text" placeholder="Ảnh, mọi người hoặc nhóm">
                                </span>
                                <div class="navbar-search__select-wrap">
                                    <ul class="navbar-search__select-list">
                                        <li class="navbar-search__select-item">
                                            <div class="navbar-search__item-wrap d-flex">
                                                <i class="navbar-search__select-icon bi bi-image"></i>
                                                <input type="submit" value="Tìm ảnh" class="navbar-search__select-link btn" id="submit-search-img">
                                                </input>
                                            </div>
                                        </li>
                                        <li class="navbar-search__select-item">
                                            <div class="navbar-search__item-wrap d-flex">
                                                <i class="navbar-search__select-icon bi bi-people-fill"></i>                                                      
                                                <input type="submit" value="Tìm người" class="navbar-search__select-link btn">
                                                </input>
                                            </div>
                                        </li>
                                        <li class="navbar-search__select-item">
                                            <div class="navbar-search__item-wrap d-flex">
                                                <i class="navbar-search__select-icon fas fa-users"></i>                                                
                                                <input type="submit" value="Tìm nhóm" class="navbar-search__select-link btn">
                                                </input>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>



                        <div class="navbar-search__user-wrap d-flex col-lg-3 col-md-5 col-7">
                            <div class="navbar-search__upload hide-on-mobile">
                                <a href="/BaiTapLon/uploads/index.php" class="navbar-search__upload-link">
                                    <i class="navbar-search__upload-icon fas fa-cloud-upload-alt"></i>
                                </a>
                            </div>
                            <div class="navbar-search__noti">
                                <span href="" class="navbar-search__upload-link">
                                    <i class="navbar-search__upload-icon bi bi-bell-fill"></i>
                                </span>
                            </div>
                            <div class="navbar-search__user">
                                <span class="navbar-search__upload-link">
                                    <i class="navbar-search__upload-icon bi bi-person-circle"></i>
                                </span>

                                <ul class="navbar__user-selection" style="z-index: 5;">
                                    <div class="navbar__user-wrap">
                                        <li class="navbar__user-item">
                                            <h3>Hello</h3>
                                        </li>
                                        <li class="navbar__user-item">
                                            <h5>
                                                <?php
                                                    if(isset($_SESSION['isLoginOK'])) { 
                                                        echo "<span class='navbar__link'>".$_SESSION['isLoginOK']."</span>";
                                                    }
                                                ?>
                                            </h3>
                                        </li>
                                    </div>
                                    <div class="navbar__user-wrap">
                                        <li class="navbar__user-item">
                                            <a href="/BaiTapLon/uploads/index.php" class="navbar__user-link color-primary">Tải ảnh của bạn lên</a>
                                        </li>
                                    </div>
                                    <div class="navbar__user-wrap">
                                        <li class="navbar__user-item">Cài đặt</li>
                                        <li class="navbar__user-item">Trợ giúp</li>
                                        <li class="navbar__user-item">
                                            <a href="/BaiTapLon/user/logout.php" class="navbar__user-link" style="color: #333;">Đăng xuất</a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="checkbox" hidden id="sub-cate-mobile-tab" class="sub-cate-checkbox">
    <div class="subcate-on-mobile-tablet hide-on-pc h-100">
        <ul class="subcate-on-mobile-table__list">
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#photostream-view" class="subcate-on-mobile-tablet__link">Kho ảnh</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#albums-view" class="subcate-on-mobile-tablet__link">Album</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#faves-view" class="subcate-on-mobile-tablet__link">Mục yêu thích</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#galleries-view" class="subcate-on-mobile-tablet__link">Thư viện</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#group-view" class="subcate-on-mobile-tablet__link">Nhóm</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#about-view" class="subcate-on-mobile-tablet__link">Giới thiệu</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="/BaiTapLon/user/personal-page-user/#cameraroll-view" class="subcate-on-mobile-tablet__link">Cuộn camera</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="" class="subcate-on-mobile-tablet__link">Mọi người</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="" class="subcate-on-mobile-tablet__link">Sắp xếp</a>
            </li>
            <li class="subcate-on-mobile-table__item">
                <a href="" class="subcate-on-mobile-tablet__link">Dùng Pro</a>
            </li>
        </ul>
    </div>

    <!-- <script src="../Assets/JavaScript/link-navbar.js"></script>
</body> -->

