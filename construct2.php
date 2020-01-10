<?php
class Siswa
{
	public $nama,$alamat,$umur;

	public function __construct($a,$b,$c)
	{
		$this->nama=$a;
		$this->alamat=$b;
		$this->umur=$c;
	}
	public function datasiswa()
	{
		return "Hallo";
		
	}
}
$aceng = new Siswa('Aceng gendok','toha',17);
echo $aceng->datasiswa().
"Nama Saya : $aceng->nama,
Alamat saya : $aceng->alamat,
Umur Saya : $aceng->umur";
?>
