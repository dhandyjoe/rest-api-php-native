<?php 

$host = "localhost";
$user = "admin";
$password = "201017dj";
$db = "mahasiswa";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
    echo "Koneksi gagal " . mysqli_connect_error();
}


?>