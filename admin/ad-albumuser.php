<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
        header('Location: ad-login.php');   //Đi ra
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $email_user = $_GET['email'];

    // Bước 01: Kết nối Database Server
    require_once('../config/connect_db.php');

    

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Flickr</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css-admin.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-admin">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 active">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">User Profile</a>
                    </li>

                </ul>
            </div>
            <div class="navbar__user me-3">
                <?php
                    if(isset($_SESSION['isLoginOK'])) { 
                        echo '<li class="nav-item navbar__item">';
                        echo "<a class='nav-link navbar__link'>Wellcome: ".$_SESSION['isLoginOK']."</a>";
                        echo '</li>';
                    }
                ?>
            </div>
            <a href="./ad-process-logout.php" class="btn btn-dark">Log Out</a>
        </div>
    </nav>

    <div class="main">
        <div id="background" style="background-color: #191d30;">
            <div class="user-content container">
                <div class="user-infor row">
                    <?php 
                        $sql = "SELECT firstname,lastname,age,email FROM users WHERE email='$email_user'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)) {
                            $row = mysqli_fetch_assoc($result);
                    ?>
                        <div class="user__avatar col-lg-2 col-md-3">
                        <div class="user__avatar-img text-center">
                            <h1>Avatar</h1>
                        </div>
                        </div>
                        <div class="user__account col-lg-7 col-md-7 mb-4 ms-4">
                            <div class="user__name">
                                <h2>
                                    <?php echo $row["firstname"].' '.$row["lastname"]?>
                                </h2>
                            </div>
                            <div class="user__email">
                                <h5>
                                    <?php echo $email_user ?>
                                </h5>
                            </div>
                        </div>
                        <div class="user__count col-lg-3 col-md-2 mb-4">
                            <h5>Age: <?php echo $row["age"]?></h5>
                            <h5>Đã tham gia 2022</h5>
                    <?php
                        }
                    ?>
                    
                    </div>
                </div>
                <div class="user-img">
                    <div class="user-img__title" style="border-bottom: 1px solid #ccc;">
                        <span style="font-size: 32px; font-weight:600">
                            Kho ảnh
                        </span>    
                    </div>
                    <?php                
                        $sql="SELECT * FROM data_images where email='$email_user' ORDER BY uploaded_on DESC;";
                        $result = mysqli_query($conn,$sql);
                    ?>
                    <?php
                        if(mysqli_num_rows($result)){       
                            while($row=mysqli_fetch_assoc($result)){
                                $imageURL = '../uploads/'.$row["file_name"];
                    ?>
                        <div class="img-wrap row" style="align-items: center; justify-content: space-around;">
                            <img src="<?php echo $imageURL; ?>" alt="" style="height:300px; margin-top: 32px;" class=""/>
                            <a href="./ad-process-delete.php?file_name=<?php echo $row['file_name']; ?>" class="delete-img btn btn-danger">Delete</a>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div> 
    </div>
    <script src="js/bootstrap.min.js"></script>

</body>