<?php
require_once 'database.php';

function register_user($nama, $username, $email, $password, $conpass){
    global $query;

    $userName = escape($username);
    $email_user = escape($email);
    $password_user = escape($password);
    $conpass_user = escape($conpass);


    $koneksi = "INSERT INTO user(nama_user, username, email_user, password, confirm_password, level_user) values ('$nama', '$userName', '$email_user', '$password_user', '$conpass_user', 'konsumen')";
    
    $newuser = mysqli_query($query, $koneksi);
    if($newuser){
        $err = "SELECT * FROM user WHERE username = '$userName'";
        $rslt = mysqli_query($query, $err);
        $user = mysqli_fetch_assoc($rslt);
        return $user;
    }
}   

function escape($data){
    global $query;
    $escape = mysqli_real_escape_string($query, $data);
    return $escape;
}

function cek_nama($username){
    global $query;
    $koneksi = "SELECT * FROM user where username = '$username'";
    if($err = mysqli_query($query, $koneksi)) return mysqli_num_rows($err);
}