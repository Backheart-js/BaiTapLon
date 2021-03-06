<?php
    $value = $_POST['textInput'];
?>
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
    <link rel="stylesheet" href="./Assets/Css/navbar.css">
    <link rel="stylesheet" href="./Assets/Css/search.css"/>
    <link rel="stylesheet" href="./Assets/Css/base.css"/>
    <link rel="stylesheet" href="./Assets/Css/responsive.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
        <div class="container-fluid navbar-search-wrap">
            <div class="container navbar-search-content">
                <div class="navbar-on-mobile row ps-4 pe-4 h-100">

                    <div class="navbar-search__logo-wrap col-lg-5 col-md-5 col-sm-5 col-6 row">
                        <label for="sub-cate-mobile-tab" class="navbar-search__menu-on-mb col-md-3 col-4 hide-on-pc">
                            <i class="navbar-search__menu-on-mb-icon bi bi-list"></i>
                        </label>

                        <a href="index.php" class="col-lg-3 col-md-6 col-8 d-flex">
                            <img class="navbar-search__logo-img" src="./Assets/data_img/flickr_demo.svg" alt="">
                        </a>
                        <div class="navbar__cate-wrap col-lg-9 hide-on-tab-mobile">
                            <ul class="navbar__cate-list">
                                <li class="navbar__cate-item">
                                    <a href="" class="navbar__cate-link">Kh??m ph??</a>
                                    <ul class="navbar__subcate-list">
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">???nh g???n ????y</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Xu h?????ng</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">S??? ki???n</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">The Common</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Ph??ng tr??ng b??y tr??n Flickr</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">B???n ????? th??? gi???i</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">T??m m??y ???nh</a>
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
                                            <a href="" class="navbar__subcate-link">In v?? h??nh ???nh ngh??? thu???t</a>
                                        </li>
                                        <li class="navbar__subcate-item">
                                            <a href="" class="navbar__subcate-link">Ph??ng s??? ???nh</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__cate-item">
                                    <a href="" class="navbar__cate-link">D??ng Pro</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="navbar-search__input-login col-lg-7 col-md-7 col-sm-7 col-6 ">
                        <div class="login-on-mobile row h-100">
                            <div class="navbar-search__input-wrapper col-lg-7 col-md-5 col-3 d-flex">   
                                <label for="search-mb-checkbox" class="navbar-search__wrap-on-mb hide-on-pc">
                                    <i class="bi bi-search navbar-search__icon-on-mb"></i>
                                </label>

                                <input type="checkbox" hidden id="search-mb-checkbox" class="navbar-search__search-checkbox">

                                <form action="/BaiTapLon/search-guest.php" method="POST" class="navbar-search__input-wrap ">
                                    <span class="navbar-search__input-icon">
                                        <i class="fas fa-search" style="font-size: 17px; transform: translateY(3px); color: #999;"></i>
                                    </span>
                                    <span>
                                        <input class="navbar-search__input" name="textInput" type="text" placeholder="???nh, m???i ng?????i ho???c nh??m" value="<?php echo $value?>">
                                    </span>
                                    <div class="navbar-search__select-wrap">
                                        <ul class="navbar-search__select-list">
                                            <li class="navbar-search__select-item">
                                                <div class="navbar-search__item-wrap d-flex">
                                                    <i class="navbar-search__select-icon bi bi-image"></i>
                                                    <input type="button" value="T??m ???nh" class="navbar-search__select-link btn" id="submit-search-img">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="navbar-search__select-item">
                                                <div class="navbar-search__item-wrap d-flex">
                                                    <i class="navbar-search__select-icon bi bi-people-fill"></i>                                                      
                                                    <input type="submit" value="T??m ng?????i" class="navbar-search__select-link btn">
                                                    </input>
                                                </div>
                                            </li>
                                            <li class="navbar-search__select-item">
                                                <div class="navbar-search__item-wrap d-flex">
                                                    <i class="navbar-search__select-icon fas fa-users"></i>                                                
                                                    <input type="submit" value="T??m nh??m" class="navbar-search__select-link btn">
                                                    </input>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>

                            </div>
    
                            <div class="navbar-search__user-wrap d-flex col-lg-5 col-md-7 col-8">
                                <div class="navbar-search__upload hide-on-tab-mobile">
                                    <a href="" class="navbar-search__upload-link">
                                        <i class="navbar-search__upload-icon fas fa-cloud-upload-alt"></i>
                                    </a>
                                </div>
                                <div class="navbar-search__login-wrap hide-on-mobile">
                                    <a href="/BaiTapLon/user/login.php" class="navbar-search__login-btn btn">
                                        ????ng nh???p
                                    </a>
                                </div>
                                <div class="navbar-search__signup-wrap">
                                    <a href="/BaiTapLon/user/signup.php" class="navbar-search__signup-btn btn btn-primary">
                                        ????ng k??
                                    </a>
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
                                        <span>H??nh ???nh</span>
                                    </a>
                                </li>
                                <li class="category-search__select-item">
                                    <a href="" class="category-search__select-link">
                                        <span>M???i ng?????i</span>
                                    </a>
                                </li>
                                <li class="category-search__select-item">
                                    <a href="" class="category-search__select-link">
                                        <span>Nh??m</span>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="container-fluid category-search__filer">
    
                    </div>
                </div>
                <div class="container category-search-content ps-4 pe-4" style="height: 40px;">
                    <div class="row" style="height: 100%; justify-content: space-between;">
                        <div class="category-dropdown col-lg-4 col-md-6">
                            <div class="category-dropdown__wrap">
                                <h5 class="dropdown__content">
                                    M???i gi???y ph??p <i class="fas fa-angle-down dropdown__icon"></i>
                                </h5>
                            
                                <ul class="navbar__subcate-list">
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">M???i gi???y ph??p Creative</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Cho ph??p s??? d???ng th????ng m???i</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Cho ph??p s???a ?????i</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">Kh??ng c?? h???n ch??? b???n quy???n</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">T??c ph???m c???a ch??nh ph???</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-dropdown__wrap">
                                <h5 class="dropdown__content">
                                    B???t T??m ki???m an to??n  <i class="fas fa-angle-down"></i>
                                </h5>
                                
                                <ul class="navbar__subcate-list">
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">T??m ki???m an to??n v???a ph???i</a>
                                    </li>
                                    <li class="navbar__subcate-item">
                                        <a href="" class="navbar__subcate-link">T???t t??m ki???m an to??n</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="category-filter col-lg-4 col-md-6 hide-on-mobile">
                            <div class="category-filter__wrap">
                                <h5 class="category-filter__content">
                                    <i class="fas fa-share"></i>
                                    Chia s???
                                </h5>
                            </div>
                            <div class="category-filter__wrap">
                                <h5 class="category-filter__content">
                                    Li??n quan <i class="fas fa-angle-down dropdown__icon"></i>
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

            <input type="checkbox" hidden id="sub-cate-mobile-tab" class="sub-cate-checkbox">
            <div class="subcate-on-mobile-tablet hide-on-pc h-100">
                <ul class="subcate-on-mobile-table__list">
                    <li class="subcate-on-mobile-table__item">
                        <a href="/BaiTapLon/user/login.php" class="subcate-on-mobile-tablet__link">????ng nh???p</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">Kh??m ph??</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">Xu h?????ng</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">S??? ki???n</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">The Commons</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">Tr??ng b??y</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">Blogs</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">In h??nh n???n</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">Ph??ng s??? ???nh</a>
                    </li>
                    <li class="subcate-on-mobile-table__item">
                        <a href="" class="subcate-on-mobile-tablet__link">D??ng Pro</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="container-fluid body-search-wrap">
            <div class="container body-search-content">
                <ul class="body-search__list row">
                    
                </ul>
            </div>
        </div>

        <script src="./Assets/JavaScript/search-img.js"></script>
</body>
</html>