<?php
require_once "core/init.php";   

// $response = array("error" => false);
// if(isset($_POST['nama_user']) && isset($_POST['username']) && isset($_POST['email_user']) && isset($_POST['password']) && isset($_POST['confrim_password'])){

    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $email = $_POST['email_user'];
    $password = $_POST['password'];
    $conpass = $_POST['confirm_password'];
    // $level = $_POST['level_user'];   
    if(cek_nama($username) == 0){
        $user = register_user($nama, $username, $email, $password, $conpass);
        if($user){
            $response["error"] = FALSE; 
            $response["user"]["username"] = $user['username'];
            echo json_encode($response);
            header("location: ../page/index-signUp.html");
        }else{
            $response["error"] = TRUE;
            $response["error_msg"] = "Terjadi Kesalahan Saat Melakukan Registrasi";
            echo json_encode($response);
        }
    }else{
        $response["error"] = TRUE;
        $response["error_msg"] = "user Telah Ada";  
        echo json_encode($response);
    }
// }

?>