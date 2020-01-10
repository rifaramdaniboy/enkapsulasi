<?php
class Laptop 
{
	protected $saya;
	protected function hidupkan_laptop()
	{
		return "Hidupkan Laptop";
	}
}
// buat objek dari class laptop (instansiasi)
$acces = new Laptop();

//set protected property akan menghasilkan error
$acces->saya = 'Rifa';
// fatal error cannot acces protected property laptop: $pemilik

//tampilan protected property akan menghasilkan eror
echo $acces->saya;
//fatal eror : cannot acces protected property laptop :: $pemilik

//jalankan protected 
echo $acces->hidupkan_laptop();
?>