<?php
include '119140104_connect.php';
$id = $_POST['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>
