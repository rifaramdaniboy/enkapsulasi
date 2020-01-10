<?php
class laptop
{
	private $harga=30000000;
	protected $user ="Rifa Ramdani";
	public $merk;

	public function masuk_laptpo()
	{
		$this->harga;
		return "Harga Laptop = " . $this->harga;
	}
} 

class aplikasi extends Laptop
{
	public function foto()
	{
		return "<br> Masukan User Anda = " . $this->user;
	}
	public function 
}
$abdul = new Laptop();
$apk_rifa = new aplikasi();

$abdul->merk = " IPHONE <br> ";
echo $abdul->merk;
echo $abdul->masuk_laptpo();
echo $apk_rifa->foto();
?>