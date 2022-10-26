<?php
include "../config/config.php";
$pass1 = $_GET("pass");
$conpass = $_GET("conpass");

if($conpass !== $pass1){
    echo "<script>alert('Password Tidak Sama')</script>";
}
?>

// $nama = $_POST("nama");
// $username = $_POST("username");
// $email = $_POST("email");
// $password = $_POST("pass");

