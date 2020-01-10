<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<?php
if (isset($_POST['Input'])) {
		$nama=$_POST['nm'];
		$nik=$_POST['nik'];
		$alamat=$_POST['alm'];
		$umur=$_POST['umr'];
class Keluarga{
	public $nama,$nik,$alamat,$umur;

	public function __construct($a,$b,$c,$d)
	{
		$this->nama=$a;
		$this->nik=$b;
		$this->alamat=$c;
		$this->umur=$d;
	}
	public function family()
	{
		echo "Ini Keluarga Bahagia  <br>";
		foreach ($this->nama as $data => $x) {
      echo"Nama : " .$this->nama[$data] .
       " Nik : " .$this->nik[$data].
       " Alamat : " .$this->alamat[$data].
       " Umur : " .$this->umur[$data];
       echo "<br>";
   }
	}
}

	$uang = new Keluarga($nama,$nik,$alamat,$umur);
	echo $uang->family();
	}

?>
	</fieldset>
</body>
</html>