//<?php
//if(isset($_POST['btnSignup']))
//{
       
//        //4: Kiểm tra click vào captcha
//        $site_key = '6Lf80rIdAAAAABDbQdQ-w4MWXnGoOlGmZrmktxB-'; // change this to yours
//        $secret_key = '6Lf80rIdAAAAAA7oB3UOTp8yWZdkpzzS3gRZG5Zo'; // change this to yours
//        if(isset($_POST['g-recaptcha-response']))
//        {
//            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
//            $response = @file_get_contents($api_url);
//            $data = json_decode($response);
//
//            if($data->success ==0)
//            {
//                echo "You are a robot.";
//                
//            }
//            else
 //           {
 //              echo "Success.";
//            }
//        }
//        else
//        {
//          echo "You are a robot.";
//        }

//}
//?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="/BTL/css/signup.css"> -->
  <link rel="stylesheet" href="/BaiTapLon/Assets/Css/signup.css?v=<?php echo time(); ?>">
  <script src="https://www.google.com/recaptcha/api.js" ></script>
  
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-light bg-dark" style="height:50px">
      <div class="container-fluid ms-5">
        <a class="navbar-brand ms-5" href="#">
          <img src="/BaiTapLon/Assets/data_img/flickr_demo.svg" alt="" class="d-inline-block align-text-top ps-5"
            style="height:20px">
        </a>
      </div>
    </nav>
  </header>
  <!-- body -->
  <main>
    <div class="body-background">
        <div class="container-fluid d-flex justify-content-center align-items-center  ">
          <!-- action="./signup-process/signup-process.php" method="post" -->
          <form class="card p-3 text-center pt-4" action="./signup-process/resend-mail.php" method="post">
            <div class="justify-content-center container-fluid" >
              <img src="/BaiTapLon/Assets/data_img/icon_flickr.png" alt="" class="logo mt-3 align-items-center"
                style="height:30px">
            </div>
            <h6 class="fw-normal pb-2">Sign up for Flickr</h6>
            <div class="mt-3 px-3 text-start"> 
              <input type="text" class="form-control ps-4" name="txtFirstName" id="inputFirstName" placeholder=" " >
              <label for="inputFirstName" class="placeholder">First name</label>
              <span for="" class="notice" id="errorFirstName"></span>
            </div>
            <div class="mt-3 px-3 text-start">
              <input type="text" class="form-control ps-4" name="txtLastName" id="inputLastName" placeholder=" " >
              <label for="inputLastName" class="placeholder">Last name</label>
              <span for="" class="notice" id="errorLastName"></span>
            </div>
            <div class="mt-3 px-3 text-start">
              <input type="number" class="form-control ps-4" name="txtAge" id="inputAge" placeholder=" " >
              <label for="inputAge" class="placeholder">Your age</label>
              <span for="" class="notice" id="errorAge"></span>
            </div>
            <div class="mt-3 px-3 text-start">
              <input type="email" class="form-control ps-4" name="txtEmail" id="inputEmail" placeholder=" " >
              <label for="inputEmail" class="placeholder">Email address</label>
              <span for="" class="notice" id="errorEmail"></span>
            </div>
            <div class="mt-3 mx-3 position-relative text-start">
              <input type="password" class="form-control ps-4 z-index-1" name="txtPassword" id="inputPassword" placeholder=" "  >
              <label for="inputPassword" class="placeholder ps-0 " id="password" >Password</label>
              <!--  p-2 px-3 rounded-end top-50 end-0 translate-middle-y me-1 -->
              <!-- <i for="inputPassword" class="eye position-absolute bi bi-eye  bg-light top-0 end-0 p-2 px-3"
                style="height:43px"></i> -->
              <div class="advise">
                <span for="" class="notice" id="errorPassword"></span>
              </div>
            </div>
            <div class="mt-3 px-3 mx-auto">
              <div class="g-recaptcha" data-sitekey="6Lf80rIdAAAAABDbQdQ-w4MWXnGoOlGmZrmktxB-"></div>
            </div>
            <div class="mt-3 d-grid px-3"> 
                <button class="btn btn-primary btn-block btn-signup text-uppercase" onclick="return CheckInput()" name="btnSignup">
                <span>Sign up</span> </button> 
            </div>
            <div class="mt-3 px-3 fw-normal">
              <p style="font-size: 12px" class="text-center lead  px-3 pt-2" >By signing up,you agree with Flickr's <a href="" class="text-decoration-none">Terms of Services</a> and <a href="" class="text-decoration-none">Privacy Policy.</a></p>
              <hr>
              <p style="font-size: 12px" class="text-center lead  ">Already a Flickr member? <a href="" class="text-decoration-none">Log in here.</a></p>
            </div>
          </form>
          <script type="text/javascript" src="/BaiTapLon/Assets/Javascript/signup.js">
          </script>
        </div>
        <div class="footer d-flex text-alight" >
          <div class="col-md-6">
            <select id="cars" name="cars">
              <option value="volvo">VietNamese</option>
              <option value="saab">Japanese</option>
              <option value="fiat" selected>English</option>
              <option value="audi">Chinese</option>
            </select>
          </div>
          <div class="col-md"><a href="#">Help</a> </div>
          <div class="col-md"><a href="#">Privacy</a> </div>
          <div class="col-md"><a href="#">Terms</a> </div>
        </div>
        <div class="end">033120190455 by HuyenPham , From VietNam</div>
    </div>
  </main>
  <!-- footer -->
  
  <!-- <script type="text/javascript" src="/javascript/signup.js" > -->
  </script>
    <br>
  </main>
  <!-- footer -->
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  
</body>

</html>