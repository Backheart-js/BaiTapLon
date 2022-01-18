<?php
    session_start();
    if(isset($_SESSION['adLoginOK'])) { 
        unset($_SESSION['adLoginOK']);
        header('Location: ad-login.php');   //Đi ra
    }
?>