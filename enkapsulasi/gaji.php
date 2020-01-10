<!DOCTYPE html>
<html>
<head>
	<title>Penggajian Manusia</title>
</head>
<body>
	<fieldset>
	<PRE>
<form action="" method="POST">
		<font style="font-family: kristen itc">
		<b><center> Formulir Penggajian </center></b><br>
<div class="form-gruop">
	<label>Nama : </label>
	<input type="text" name="nm" class="form-control">
</div>
<div class="form-gruop">
	<label>NIP : </label>
	<input type="number" name="nip" class="form-control">
</div>
<div class="form-gruop">
	<label>Alamat : </label>
	<TEXTAREA name="alm" class="form-control"></TEXTAREA>
</div>
<div class="form-gruop">
	<label>Jumlah Hari Kerja : </label>
	<input type="number" name="hari"  max="31" required class="form-control">
</div>
<button type="submit" name="simpan">Simpan</button><br>
	</PRE>	
<?php
echo "<hr>";

if (isset($_POST['simpan'])) {
		$namaa=$_POST['nm'];
		$nipp=$_POST['nip'];
		$alamatt=$_POST['alm'];
		$kerjaa=$_POST['hari'];
class Gaji{
	public $namaa,$nipp,$alamatt,$kerjaa;

	public function __construct($a,$b,$c,$d)
	{
		$this->namaa=$a;
		$this->nipp=$b;
		$this->alamatt=$c;
		$this->kerjaa=$d;
	}
	public function data_diri()
	{
		return "Data Diri";
	}
	public function gaji_kotor()
	{
		$z=$this->kerjaa * 75000;
		return $z;
	}
	public function gaji_bersih()
	{
		$gajibersih=($this->kerjaa * 75000) - ($this->kerjaa * 75000) * (2.5/100);
		return $gajibersih;
	}
}

	$data = new Gaji($namaa,$nipp,$alamatt,$kerjaa);
	echo "Ini Adalah : " . $data->data_diri() . "<br>";
	echo "Nama Anda   : " . $data->namaa;
	echo "<br>"; 
	echo "No NIP Anda  : " . $data->nipp;
	echo "<br>";
	echo "Alamat Anda  : " . $data->alamatt;
	echo "<br>";
	echo "Jumlah Hari Kerja  : " . $data->kerjaa . "<br>";
	echo "Gaji Kotor : " . $data->gaji_kotor() . "<br>";
	echo "Gaji Bersih : " . $data->gaji_bersih(). "<br>";
	}
?>
	</fieldset>
</body>
</html>