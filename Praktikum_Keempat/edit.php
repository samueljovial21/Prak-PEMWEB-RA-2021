<?php
include '119140104_connect.php';
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$sql = mysqli_query($koneksi,"UPDATE mahasiswa SET nim ='$nim', nama ='$nama', prodi ='$prodi', angkatan ='$angkatan' WHERE nim = '$id' ");
echo json_encode($result);
?>
