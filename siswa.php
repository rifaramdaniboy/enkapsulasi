<?php
class Siswa
{
	public $nama;
	public $alamat;
	public $usia;

	public function datadiri($nama = null, $alamat = null, $usia = null)
	{
		$this->nama = $nama;
		$this->alamat =$alamat;
		$this->usia =$usia;

		return "Nama = $nama , Alamat = $alamat , Usia = $usia";
	}
	public function hobi($hobi)
	{
		$this->hobi =$hobi;
		return $this->datadiri($this->nama, $this->alamat, $this->usia. "<br>"). "hobi : $hobi";
	}
}
$siswa1 = new Siswa();
$siswa1->datadiri('Ahmad','Bandung',18);
echo $siswa1->hobi("Mancing");
?>