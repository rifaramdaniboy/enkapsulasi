<?php
class Sekolah{
	public $nama;
	public $alamat;

	public function datasekolah($a = "SMK Assalaam",$b = "Situ Tarate")
	{
		$this->nama = $a;
		$this->alamat = $b;
		return "Nama Sekolah : $a, Alamat Sekolah = $b";
	}
}
$Sekolah1 = new Sekolah();
echo $Sekolah1->datasekolah();
?>