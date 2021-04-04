<?php 

$host = "localhost"; // nama server
$user = "admin"; 
$password = "201017dj"; 
$db = "mahasiswa";

// function untuk menyambungkan ke database
$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
    echo "Koneksi gagal " . mysqli_connect_error();
}


?>