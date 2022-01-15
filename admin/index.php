<?php 
    // Kiểm tra thẻ làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css-admin.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Images search</a>
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
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input class="btn btn-outline-secondary" type="submit" id="button-addon2"
                            value="Search"></input>
                    </div>
                </div>
            </div>

            <div class="admin-table mt-5">
                <table class="table table-striped table-hover">
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
                    
                    <tbody>
                        <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','database_baitaplon');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
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
                                    <td><a href="ad-albumuser.php?id=<?php echo $row['id']; ?>"><i class="fas fa-images"></i></a></td>
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


    <script src="js/bootstrap.min.js"></script>
</body>

</html>