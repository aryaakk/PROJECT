<?php 

$koneksi = mysqli_connect("localhost", "root", "", "regis");

if (mysqli_connect_errno()) {
    echo "Koneksi Ke database gagal = " . mysqli_connect_errno();
}