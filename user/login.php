<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        Flickr Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="../Assets/Css/main.css">
    <link rel="stylesheet" href="../Assets/JavaScript/script.js">
</head>

<body>
    <div class="mymodal ">
        <div class="header container-fluid">
            <div class="container">
                <div class="row ">
                    <div class="img_header-icon col-md-2 col-sm-2">
                        <img src="../Assets/data_img/flickr_demo.svg" alt="" class="header_img" />
                    </div>
                </div>
            </div>

        </div>
        <form action="login-process.php" class="form-login" method="post">
            <div class="container modal__container">
                <div class="modal__body">
                    <div class="modal__body-icon col-md col-sm row">

                        
                        <use xlink:href="/img/icons.c121c832.svg#blue-pink-balls"
                            xmlns:xlink="http://www.w3.org/1999/xlink"></use>

                        <div class="form-text">
                            <svg data-v-337e9a4c="" xmlns="http://www.w3.org/2000/svg" data-v-0f36bfa4=""
                                style="fill: currentcolor; height: 1.5rem; width: 1.5rem;">
                                
                                <use xlink:href="/img/icons.c121c832.svg#blue-pink-balls"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                            </svg>
                            <h5 class="form-text-title ">Đăng nhập vào Flickr</h5>
                            <div class="col-md row">
                                <div class="form__login">
                                    <div class="col-md-12 mt-3 mb-3">
                                        <input type="email" class="form-control" placeholder="Địa chỉ email" required
                                            autofocus aria-label="Recipient's username" aria-describedby="button-addon2"
                                            name="txtEmail" />
                                          <!-- form-control form-cotrol-password -->
                                    </div>
                                    <div class="col-md-12  password">
                                        <input type="password" class="form-control form-cotrol-password"
                                            placeholder="Mật khẩu" 
                                            name="txtPass1" id="pwd"required  />
                                        
                                        <span>
                                        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                                        </span>
                                            
                                        
                                    </div>
                                </div>

                                <div class="contact__agree mt-3">
                                    <label>
                                        <input type="checkbox" class="checkbox" value="remember-me">
                                        Ghi nhớ địa chỉ email
                                    </label>
                                    <?php

                                      if(isset($_GET['error']))
                                      {
                                        echo "<h5 style ='color:red'> {$_GET['error']} </h5>";
                                      }
                                    ?>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" type="submit" name="btnloginone">Đăng
                                nhập</button>
                        </div>

                        <a href="" class="form_link form_link-password mb-1">Bạn quên mật khẩu?</a>
                        <hr class="form-hr">
                        <div>
                            <p class="form_link-logup">Bạn chưa tham gia Flickr?
                                <a href="" class="form_link ">Đăng kí tại đây.</a>
                            </p>

                        </div>
                    </div>
                </div>
        </form>
         

     

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>