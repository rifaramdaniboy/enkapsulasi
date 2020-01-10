<?php
class Bangundatar
{
	public $alas,$tinggi;

	public function __construct($a,$b)
	{
		$this->alas=$a;
		$this->tinngi=$b;
	}
	public function luassegitiga()
	{
		return "Luas Segitiga";
		
	}
}
$aceng = new Bangundatar(20,7);
echo $aceng->luassegitiga().
"Alas Luas Segitiga : $aceng->alas <br>
Tinggi Luas Segitiga : $aceng->tinngi<br>
Perhitungan Luas Segitiga :". $aceng->alas * $aceng->tinngi / 2 ;

echo "<hr>";

class Bangunruang
{
	public $phi=3.14,$jari;

	public function __construct($b)
	{
		$this->jari=$b;
	}
	public function luas()
	{
		return "Luas Lingkaran<br>";
		
	}
}
$asep = new Bangunruang(35);
echo $asep->luas().
"Rumus Lingkaran : $asep->phi <br>
Jari - Jari : $asep->jari<br>
Perhitungan Bangun Datar:". $asep->phi * $asep->jari * $asep->jari.
 ;
?>
