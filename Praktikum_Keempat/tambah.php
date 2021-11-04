<?php
include '119140104_connect.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$sql = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$nim','$nama','$prodi','$angkatan')");
echo json_encode($result);
?>
