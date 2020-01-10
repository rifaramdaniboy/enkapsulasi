<?php
class Manusia
{
	public $umur, $tgl_lahir;
	protected $jenis_kelaminan;
	private $status;

	public function makan()
	{
		return "Manusia Juga Butuh Makan";
	}
	public function minum()
	{
		return "Manusia juga butuh minum";
	}
	public function ambil_status($status_saat_ini)
	{
		return $this->status = $status_saat_ini;
	}
	public function status_gue()
	{
		return " BarBar namun kadang santuy ";
	}
}

class pria extends Manusia{
	public function jk($jk)
	{
		return $this->jenis_kelaminan = $jk;
	}
	public function datadiri()
	{
		$datadiri = "<br> Aku seorang ".
		$this->jenis_kelaminan;
		$datadiri .= "<br> Yang lahir Pada ".
		$this->tgl_lahir;
        $datadiri .="<br> Sampai saat ini Masih ".
        $this->ambil_status("Lajang");
        $datadiri .= "<br> Karena saya Masih ".
        $this->umur;
        $datadiri .= "<br> Belum pantas untuk menikah <br>";
        return $datadiri;
	}
}
$saya = new pria();
$saya->tgl_lahir = "26 , November 2002";
$saya->jk("Laki - Laki");
$saya->ambil_status("Lajang");
$saya->umur = "17 Tahun";

echo $saya->datadiri();
echo $saya->makan();
?>