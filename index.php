<?php
class Kucing{
	public $warna = 'Kuning';
	public $jumlah_kaki =4;
	public $panjang_kucing =7.7;
    public $makan =true;

	public function berburu($var1)
	{
		return "Kucing memburu ikan di sawah =" . $var;
	}
	public function suara($var1)
	{
		return "suara kucing =" . $var1;
	}
	public function melahirkan($var2)
	{
		return "kucing adalah hewan ovovivivar yaitu melahirkan =" . $var2 ;
	}
	public function bertengkar($var3)
	{
		return "kucing bertengkar ketika wilayah nya di rebut = " . $var3;
	}
	public function tertidur($var4)
    {
    	return "kucing suka teridur dimana saja = " . $var4;
    }

}

       $Kucing_waduk = new Kucing;
       echo "kucing saya berwana = ". $Kucing_waduk->warna;
       echo  '<br>'. "jumlah kaki kucing saya = ". $Kucing_waduk->jumlah_kaki;
       echo  '<br>'. "ukuran kucing saya = " . $Kucing_waduk->panjang_kucing;
       echo  '<br>'. $Kucing_waduk->berburu(' Mang Otong');
       echo  '<br>'. $Kucing_waduk->suara(' maokk ');
       echo  '<br>'. $Kucing_waduk->melahirkan(' 5 kucing bagus ');
       echo  '<br>'. $Kucing_waduk->bertengkar(' kucing garong ');
       echo  '<br>'. $Kucing_waduk->tertidur(' Di rumah  ');

       echo "<hr>";

       $Kucing_garong = new Kucing;
       echo "kucing saya berwarna = ". $Kucing_garong->warna = "hitam";
       echo  '<br>'. "jumlah kaki kucing saya = ". $Kucing_garong->jumlah_kaki =3;
       echo  '<br>'. "ukuran kucing saya = " . $Kucing_waduk->panjang_kucing =6.8;
       echo  '<br>'. $Kucing_garong->berburu(' Mang Iyep ');
       echo  '<br>'. $Kucing_garong->suara(' meok ');
       echo  '<br>'. $Kucing_garong->melahirkan(' 3 kucing garong ');
       echo  '<br>'. $Kucing_garong->bertengkar(' kucing buldog');
       echo  '<br>'. $Kucing_garong->tertidur(' Di luar');

       echo "<hr>";

?>
