<?php 
class Komputer
{
	private $jenis_prosesor = "intel Core 17 ag593";
	public function tampilan_prosesor()
	{
		return $this->jenis_prosesor;
	}
}

class Laptop extends Komputer
{
	public function tampilan_prosesor()
	{
		
	}
}

// buat objek dari class Laptop
$Komputer_baru = new Komputer();
$Laptop_baru = new Laptop();

// jalankan method dari class komputer
echo $Komputer_baru->tampilan_prosesor();
//jalankan method dari class laptop
echo $Laptop_baru->tampilan_prosesor();
// Notice undefined property : laptop :: $jenis_prosesor

?>
