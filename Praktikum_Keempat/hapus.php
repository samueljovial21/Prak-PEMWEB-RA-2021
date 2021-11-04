<?php
include '119140104_connect.php';
$id = $_POST['nim'];
$sql = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim = '$id' ");
echo json_encode($result);
?>
