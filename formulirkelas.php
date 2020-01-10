<!DOCTYPE html>
<html>
<head>
	<title>Luas Lingkaran</title>
</head>
<body>
	<form action="" method="POST">
		<font style="font-family: kristen itc">
		<b><center>Formulir Data Siswa</center></b><br>
<div class="form-gruop">
	<label>Nama wali Kelas : </label>
	<input type="text" name="wal" class="form-control">
</div>
<div class="form-gruop">
	<label>Nama Ketua Kelas : </label>
	<input type="text" name="ketua" class="form-control">
</div>
<div class="form-gruop">
	<label>Nama Sekertaris : </label>
	<input type="text" name="sekre" class="form-control">
</div>
<div class="form-gruop">
	<label>Nama Bendahara : </label>
	<input type="text" name="hara" class="form-control">
</div>
<div class="form-gruop">
	<label>Nama Kepala Sekolah : </label>
	<input type="text" name="kepala" class="form-control">
</div>
<button type="submit" name="simpan">Simpan</button><br>
<?php 
echo "<hr>";
	if (isset($_POST['simpan'])) {
		$wali=$_POST['wal'];
		$ketua=$_POST['ketua'];
		$sek=$_POST['sekre'];
		$benda=$_POST['hara'];
		$pala=$_POST['kepala'];
class Sekolah{
	public $wali,$ketua,$sek,$benda,$pala;

	public function daftar($a,$b,$c,$d,$e)
	{
		$this->wali=$a;
		$this->ketua=$b;
		$this->sek=$c;
		$this->benda=$d;
		$this->pala=$e;
	}
	public function organigram()
	{
		return " Organigram XI RPL 2 <br>";
	}
	public function nm_kpl()
	{
		return "Kepala sekolah smk ASSALAAM bandung : $this->pala";
	}
}
	$rpl = new Sekolah($wali,$ketua,$sek,$benda,$pala);
	echo "<br>".$rpl->organigram();
	echo "Nama wali kelas  : " . $wali;
	echo "<br>"; 
	echo "Nama Ketua Km  : " . $ketua;
	echo "<br>";
	echo "Nama Sekretaris  : " . $sek;
	echo "<br>";
	echo "Nama Bendahara  : " . $benda;
	echo "<br>";
	echo "<br>".$rpl->nm_kpl();
	echo "<br>";
	}
 ?>
</form>
</body>
</html>
