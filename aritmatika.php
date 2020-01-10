<?php
class Arimatika{
	public $saya;
	public $kamu;

	public function tambah($a,$b)
	{
		$this->saya =$a;
		$this->kamu =$b;
		return "Perhitungan $a + $b : " . ($a + $b);
	}
	public function kurang($a,$b)
	{
		$this->saya =$a;
		$this->kamu =$b;
		return "Perhitungan $a - $b : " . ($a - $b);
	}
	public function kali($a,$b)
	{
		$this->saya =$a;
		$this->kamu =$b;
		return "Perhitungan $a * $b : " . ($a * $b);
	}
	public function bagi($a,$b)
	{
		$this->saya =$a;
		$this->kamu =$b;
		return "Perhitungan $a / $b : " . ($a / $b);
	}
}
    $bilangan = new Arimatika();
    echo $bilangan->tambah(20,10) . "<br>" ;
    echo $bilangan->kurang(20,10) . "<br>";
    echo $bilangan->kali(20,10) . "<br>";
    echo $bilangan->bagi(20,10) . "<br>";

    echo "<hr>";

    $sayangan = new Arimatika();
    echo $sayangan->tambah(50,10) . "<br>" ;
    echo $sayangan->kurang(50,10) . "<br>";
    echo $sayangan->kali(50,10) . "<br>";
    echo $sayangan->bagi(50,10) . "<br>";

?>
