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
  <link rel="stylesheet" href="/BTL/css/signup.css?v=<?php echo time(); ?>">
  <script src="https://www.google.com/recaptcha/api.js" ></script>
  
</head>

<body>
  <!-- <script>
    alert('Hello!');
  </script> -->
  <!-- header -->
  <header class="header">
    <nav class="navbar navbar-light bg-dark" style="height:50px">
      <div class="container-fluid ms-5">
        <a class="navbar-brand ms-5" href="#">
          <img src="/BTL/assets/data_img/flickr_demo.svg" alt="" class="d-inline-block align-text-top ps-5"
            style="height:20px">
        </a>
      </div>
    </nav>
  </header>
  <!-- body -->
  <main>
    <div class="body-background">
      <div class="container-fluid d-flex justify-content-center align-items-center h-100">
        <form class="card p-3 text-center py-4" action="signup-process.php" method="post">
          <div class="justify-content-center container-fluid">
            <img src="/BTL/assets/data_img/icon_flickr.png" alt="" class="logo mt-3 align-items-center"
              style="height:30px">
          </div>
          <h6 class="fw-normal pb-2">Sign up for Flickr</h6>
          <div class="mt-3 px-3"> 
            <input type="text" class="form-control ps-4" name="txtFirstName" id="inputFirstName " placeholder=" " >
            <label for="inputFirstName" class="placeholder">First name</label>
            <label for="" class="notice" name="notice">Required</label>
          </div>
          <div class="mt-3 px-3">
            <input type="text" class="form-control ps-4" name="txtLastName" id="inputLastName " placeholder=" ">
            <label for="inputLastName" class="placeholder">Last name</label>
            <label for="" class="notice" name="notice">Required</label>
          </div>
          <div class="mt-3 px-3">
            <input type="number" class="form-control ps-4" name="txtAge" id="inputAge" placeholder=" ">
            <label for="inputAge" class="placeholder">Your age</label>
            <label for="" class="notice" name="notice">Required</label>
          </div>
          <div class="mt-3 px-3">
            <input type="email" class="form-control ps-4" name="txtEmail" id="inputEmail" placeholder=" ">
            <label for="inputEmail" class="placeholder">Email address</label>
            <label for="" class="notice" name="notice">Required</label>
          </div>
          <div class="mt-3 mx-3 position-relative">
            <input type="password" class="form-control ps-4" name="txtPassword" id="inputPassword" placeholder=" ">
            <label for="inputPassword" class="placeholder ps-0 " id="password">Password</label>
            <i class="position-absolute bi bi-eye  bg-light p-2 px-3 rounded-end top-50 end-0 translate-middle-y me-1"
              style="height:43px"></i>
            <div class="advise">
              <label for="" class="notice" name="notice">Required</label>
            </div>
          </div>
          <div class="mt-3 px-3 mx-auto">
            <div class="g-recaptcha " data-sitekey="6Lf80rIdAAAAABDbQdQ-w4MWXnGoOlGmZrmktxB-"></div>
          </div>
          <div class="mt-3 d-grid px-3"> 
              <button class="btn btn-primary btn-block btn-signup text-uppercase" onclick="checkInput();" name="btnSignUp">
              <span>Sign up</span> </button> 
          </div>
          <div class="mt-3 px-3 fw-normal">
            <p style="font-size: 12px" class="text-center lead  px-3 pt-2" >By signing up,you agree with Flickr's <a href="" class="text-decoration-none">Terms of Services</a> and <a href="" class="text-decoration-none">Privacy Policy.</a></p>
            <hr>
            <p style="font-size: 12px" class="text-center lead  ">Already a Flickr member? <a href="" class="text-decoration-none">Log in here.</a></p>
          </div>
        </form>
        <script type="text/javascript" src="signup.js" >
        </script>
      </div>
        <div class="footer d-flex text-alight" >
          <div class="col-md-3">
            <select id="cars" name="cars">
              <option value="volvo">VietNamese</option>
              <option value="saab">Japanese</option>
              <option value="fiat" selected>English</option>
              <option value="audi">Chinese</option>
            </select>
          </div>
          <div class="col-md-3"><a href="#">Help</a> </div>
          <div class="col-md-3"><a href="#">Privacy</a> </div>
          <div class="col-md-3"><a href="#">Terms</a> </div>
        </div>
        <div class="end">033120190455 by HuyenPham , From VietNam</div>
    </div>
  </main>
  <!-- footer -->
  
  <script type="text/javascript" src="/javascript/signup.js" >
  </script>
    <br>
  <!-- footer -->
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  
</body>

</html>