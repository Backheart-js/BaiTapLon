<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "database_baitaplon";

// Create database connection
$db =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương sql_connect

// Check connection
if (!$db) {//truy cập thuộc tính phương thức của 1 đối tượng trong php
    die("Connection failed: " .mysqli_connect_error());
}
?>