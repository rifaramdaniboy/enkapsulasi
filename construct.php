<?php
class Siswa
{
	public function __destruct()
	{
		echo "<br> Ini Adalah Destruct";
	}
	public function hallo()
	{
		return "<br> Hello PHP";
	}

	public function __construct()
	{
		echo "Ini Adalah Construct";
	}
}

$Hello = new Siswa();
echo $Hello->hallo();
?>
