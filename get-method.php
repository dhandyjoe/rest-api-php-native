<?php 

require_once "koneksi.php";

$sql = "SELECT * FROM data_diri";
$query = mysqli_query($conn, $sql); 

while ($data = mysqli_fetch_array($query)) {
    // echo $data["nama"]; 
    // echo "<br>";
    // echo $data["nim"];
    // echo "<br>";
    // echo $data["fakultas"]; 
    // echo "<br><br>";

    $item[] = array(
        'nama' => $data["nama"],
        'nim' => $data["nim"],
        'fakultas' => $data["fakultas"],
        'progdi' => $data["progdi"]
    );
}

$response = array (
    'status' => 'ok',
    'data' => $item
);

echo json_encode($response, JSON_PRETTY_PRINT);

?>