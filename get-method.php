<?php 

// memanggil file koneksi.php
require_once "koneksi.php";

$sql = "SELECT * FROM data_diri";
$query = mysqli_query($conn, $sql); 


// function mysqli_fetch_array berfungsi untuk mengambil data 
// dan dijadikan array
while ($data = mysqli_fetch_array($query)) {
    $item[] = array(
        'nama' => $data["nama" /* nama kolom di database */],
        'nim' => $data["nim"],
        'fakultas' => $data["fakultas"],
        'progdi' => $data["progdi"]
    );
}

$response = array (
    'status' => 'ok',
    'data' => $item
);

// function json_encode digunakan untuk menjadikan array menjadi 
// format JSON

// JSON_PRETTY_PRINT digunakan untuk merapikan json-nya
echo json_encode($response, JSON_PRETTY_PRINT);

?>