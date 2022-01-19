<?php 
    // Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['adLoginOK'])) { //Nếu không có thẻ
        header('Location: ad-login.php');   //Đi ra
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Flickr</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css-admin.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-admin">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">User Profile</a>
                    </li>
                </ul>
            </div>
            <div class="navbar__user me-3">
                <?php
                    if(isset($_SESSION['adLoginOK'])) { 
                        echo '<li class="nav-item navbar__item">';
                        echo "<a class='nav-link navbar__link'>Wellcome: ".$_SESSION['adLoginOK']."</a>";
                        echo '</li>';
                    }
                ?>
            </div>
            <a href="./ad-process-logout.php" class="btn btn-light">Log Out</a>
        </div>
    </nav>

    <div class="admin-content container-fluid pt-5">
        <div class="container">
            <div class="admin-dashboard">
                <h1>Dashboard</h1>
            </div>

            <div class="container admin-search mt-3">
                <div class="container">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control input-search" placeholder="Id username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary btn-submit" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>

            <!-- Bảng thông tin user -->
            <div class="admin-table mt-5">
                <table class="table table-striped table-hover" id="search-table">
                    <thead class="table-primary">
                        <tr>
                        <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Album</th>
                        </tr>
                    </thead>
                    <tbody id = "search-table__content">
                                              
                    </tbody>
                </table>
                
                <table class="table table-striped table-hover" id = "main-table">
                    <thead class="table-primary search-table">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Album</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                        <?php
                        // Bước 01: Kết nối Database Server
                        require_once('../config/connect_db.php');
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT id, firstname, lastname, age, email FROM users";
                        $result = mysqli_query($conn,$sql);
                        
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>

                        <tr>
                            <th scope="row"><?php echo $row['id'];?></th>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <!-- Chú ý: nếu truyền giá trị Null vào thì sẽ bị lỗi -->
                            <td><a href="ad-albumuser.php?email=<?php echo $row['email']; ?>"><i
                                        class="fas fa-images"></i></a></td>
                        </tr>

                        <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>


    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="/BaiTapLon/admin/js/jquery.min.js"></script>
    <script src="/BaiTapLon/admin/js/app.js"></script>
</body>

</html>