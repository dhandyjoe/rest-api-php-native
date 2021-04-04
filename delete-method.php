<?php 

require_once "koneksi.php";

$id = $_POST['id'];

$sql = "DELETE FROM data_diri WHERE id = $id;";
$query = mysqli_query($conn, $sql);

if ($sql) {
    $msg = "Delete Berhasil";
} else {
    $msg = "Delete Gagal";
}

$response = [
    'status' => 'ok',
    'msg' => $msg
];

echo json_encode($response, JSON_PRETTY_PRINT);
?>