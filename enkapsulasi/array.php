<html>
<head><title></title></head>
<body>
    <fieldset>
    <legend>Form Keluarga Cemara</legend>
    <FORM ACTION="" METHOD="GET">
    <center><h3>Anggota Keluarga Milenial</h3></center>
<label for="">Masukan Jumlah Keluarga</label> 
<input type="number" min="1" name="masuk"required><br><br>
<input type="submit" name="input" value="input">
<hr>
  </FORM>
  <FORM ACTION="prosesarray.php" METHOD="POST" NAME="input">  
<?php
if (isset($_GET['input'])) {
$masuk = $_GET['masuk'];
for ($i=0; $i <$masuk ; $i++) { 
    echo '<br>Nama <input type="text"  name="nm[]"required>
    Nik <input type="number"  name="nik[]"required>
    ALamat <input type="text"  name="alm[]"required>
    Umur <input type="number"  name="umr[]"required><br><br>';
}
echo '<input type="submit" name="Input" value="simpan">';
}
?>
</FORM>  
    </fieldset>
</body>
</html>