<?php
    if(isset($_POST['btnSignUp'])){
        $FirstName=$_POST['txtFirstName'];
        $LastName = $_POST['txtLastName'];
        $Age = $_POST['txtAge'];
        $Email = $_POST['txtEmail'];
        $Password = $_POST['txtPassword'];
        

        //kết nối đến csdl
        $conn = mysqli_connect('localhost','root','','database_admin');
        if(!$conn){
            die("Kết nối thất bại.Vui lòng kiểm tra lại thông tin máy chủ.");
        }
        
        //thực hiện truy vấn, thêm , kiểm tra thông tin
        //Kiểm tra xem email đã tồn tại chưa
        $sql="select email from signup_user where email='$Email'";
        $result=mysqli_query($conn,$sql);
    }
    else{
        header("location:signup.php");
    }


?>