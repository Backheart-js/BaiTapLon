
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check-email</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="/BTL/css/signup.css"> -->
  <link rel="stylesheet" href="/BaiTapLon/Assets/Css/signup.css?v=<?php echo time(); ?>">
  
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
  <main >
  <div class="body-background p-5 mt-5">
        <div class="container-fluid  justify-content-center align-items-center h-100 pt-5 mt-5">
          <!-- action="./signup-process/signup-process.php" method="post" -->
          <form class="card py-5 mx-auto mt-5 p-3" action="" method="post">
              <i class="bi bi-envelope ms-auto me-auto"></i>
              <p class="ms-auto me-auto fs-4 p-2">Check Your Email</p>   
              <div class="ms-auto me-auto fs-5 p-2" id="email">
                  We sent a verification link to 
                  <?php 
                      $email=$_POST['txtFirstName'];
                      print "$email.";
                  ?>
                  <!-- <script type="text/javascript">
                      document.getElementById('email').InnerHTML=document.getElementById('inputEmail').value;
                  </script> -->
                  .Please check your email for the next step.
              </div>
              <button type="submit" class="bg-primary py-2 fs-4" >Resend Email</button>
          </form>
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