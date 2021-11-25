<?php
include 'connect.php';

$id = $_POST['nama'];
$sql = mysqli_query($koneksi,"DELETE FROM karakter WHERE nama = '$id' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);
?>
