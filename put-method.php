<?php 

require_once "koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];


$query = "UPDATE data_diri SET nama = '$nama' WHERE id = $id;";
// echo $query;

$sql = mysqli_query($conn, $query);
if ($sql) {
    $msg = "Update Berhasil";
} else {
    $msg = "Update Gagal";
}

$response = [
    'status' => 'OK',
    'msg' => $msg
];

echo json_encode($response, JSON_PRETTY_PRINT);

?>
