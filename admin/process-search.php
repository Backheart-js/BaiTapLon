<?php
    if($_POST['id']){
        // Kết nối CSDL
        require('../config/connect_db');

        //Thực hiện truy vấn
        $result =  mysqli_query($conn,"SELECT id, firstname, lastname, age, email FROM users where id = '".$_POST['id']."'");

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $response=$row;

            echo $response;
        }
    }
?>