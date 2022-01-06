<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Luas Datar</title>
</head>

<body>
	<?php
  //algoritma perhitungan
	define ("pi",3.14);
	$r = $_POST['r'];
	$luas = pi*$r*$r;
	?>
	<h1>Luas Lingkaran</h1>

  <!--Tampilan Html Luas Lingkaran-->
	<form method="post">
	  <table>
	   <tr>
		     <td>Masukan panjang r :</td>
		       <td><input type="text" name="r"></td>
	   </tr>
	   <tr>
		     <td></td>
		     <td><input type="submit" value="Tetapkan"></td>
	   </tr>
	 </table>
	</form>
  <!----------------------------------------------------------->

	<?php
  //hasil algoritma
		echo"Luas Lingkaran = ".$luas." cm<br/>";
	?>

	<hr>
	
    <h1> Luas Segitiga </h1>
	<?php
  //algoritma luas Segitga
  $a = $_POST['a'];
	$t = $_POST['t'];
	$Luas = 0.5*$a*$t;
	?>
<!--Tampilan Html Luas Lingkaran-->
<form method="post">
<table>
<tr>
  <td>Masukan a :</td>
  <td><input type="text" name="a"></td>
</tr>
<tr>
  <td>Masukan t :</td>
  <td><input type="text" name="t"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
    <!----------------------------------------------------------->

	<?php
    //hasil algoritma
		echo"Luas Segitiga = ".$Luas." cm<br/>";
	?>

</body>
</html>
