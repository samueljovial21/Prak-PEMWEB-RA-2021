<?php
$belanja = new belanja();
$jenis = new pbo();

if(isset($_POST['hasil'])){
	if($_POST['mangga']!=NULL&&$_POST['jambu']!=NULL&&$_POST['salak']!=NULL){
		$jenisBuah = new pbo("Mangga", 15000, $_POST['mangga']);
		$belanja = new belanja($jenisBuah);
		$jenisBuah = new pbo("Jambu", 13000, $_POST['jambu']);
		$belanja = new belanja($jenisBuah);
		$jenisBuah = new pbo("Salak", 10000, $_POST['salak']);
		$belanja = new belanja($jenisBuah);
	}
}

class belanja{
	private static $total=0,$daftar=array(),$temp=0;

	//Magic Method
	function __construct(fruit $jenis=NULL){
		if ($jenis!=NULL) {
			self::$daftar[self::$temp]=$jenis;
			self::$temp++;
			self::$total=self::$total+$jenis->getHarga();
		}
	}

	//Getter Method
	function getTemp(){
		return self::$temp;
	}
	function getBuah($i=0){
		return self::$daftar[$i]->getBuah();
	}
	function getHarga($i=0){
		return self::$daftar[$i]->getHarga();
	}
	function getJumlah($i=0){
		return self::$daftar[$i]->getJumlah();
	}
	function getTotal(){
		return self::$total;
	}
}

//Ambil jumlah
class pbo{
	private $buah,$jumlah,$harga;

	//Magic Method
	function __construct($buah=NULL,$harga=NULL,$jumlah=0){
		if($buah!=NULL&&$harga!=NULL){
			$this->buah=$buah;
			$this->harga=$harga*$jumlah;
			$this->jumlah=$jumlah;
		}
	}

	//Getter Method
	function getNama(){
		return $this->buah;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJumlah(){
		return $this->jumlah;
	}
}
?>
