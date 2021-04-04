<?php 

require_once "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$fakultas = $_POST["fakultas"];
$progdi = $_POST["progdi"];

$sql = "INSERT INTO data_diri (`nama`, `nim`, `fakultas`, `progdi`)
VALUES ('$nama', '$nim', '$fakultas', '$progdi');";

$query = mysqli_query($conn, $sql);
if ($query) {
    $msg = "Berhasil input";
} else {
    $msg = "Gagal input";
}

$response = array (
    'status' => 'ok',
    'msg' => $msg
);

echo json_encode($response, JSON_PRETTY_PRINT);



?>