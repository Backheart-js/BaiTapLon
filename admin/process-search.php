<?php
    if(isset($_POST['id'])) {
        // Kết nối CSDL
        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "database_baitaplon";

        // Create database connection
        $conn =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương sql_connect

        //Thực hiện truy vấn
        $result =  mysqli_query($conn,"SELECT id, firstname, lastname, age, email FROM users where id = '".$_POST['id']."'");

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }
        echo json_encode($row);
    }
    else {
        header("Location: /BaiTapLon/admin/index.php");
    }
        
?>

