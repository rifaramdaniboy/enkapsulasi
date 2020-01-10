<<?php
class Laptop 
{
	public $pemilik;
	public function hidupkan_laptop()
	{
		return "Hidupkan Laptop";
	}
} 
$laptop_anto = new Laptop();
$laptop_anto->pemilik = "Anto";

// tampilan property
echo $laptop_anto->pemilik; // anto

// Tampilan method
echo $laptop_anto->hidupkan_laptop(); // "Hidupkan Laptop"

 ?>