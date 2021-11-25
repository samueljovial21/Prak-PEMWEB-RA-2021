<?php
include 'connect.php';

$nama = $_POST['nama'];
$senjata = $_POST['senjata'];
$elemen = $_POST['elemen'];

if(!($nama=='' || $senjata=='' || $elemen=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO karakter VALUES('$nama','$senjata','$elemen')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);
?>
