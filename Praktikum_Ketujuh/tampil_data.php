<?php
include 'connect.php';
$id = $_POST['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM karakter WHERE nama = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>
