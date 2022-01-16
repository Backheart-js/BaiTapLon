<?php
    $host='localhost';
    $username='root';
    $password='';
<<<<<<< HEAD
    $dbname = "database_BaiTapLon";
=======
    $dbname = "database_baitaplon";
>>>>>>> 7495715627a358583c3fd364c4b6a2242a848556
    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
    else{
        // echo "success!";
    }
?>