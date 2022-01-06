<?php
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$jk = $_POST["jk"];
	$jurusan = $_POST["jurusan"];
	$alamat = $_POST["alamat"];

	if ($jurusan=="pti") {
		$namajurusan="Pendidikan Teknik Informatika";
	}elseif ($jurusan=="ptm") {
		$namajurusan="Pendidikan Teknik Mesin";
	}elseif ($jurusan=="pte") {
		$namajurusan="Pendidikan Teknik Elektro";
	}elseif ($jurusan=="mi") {
		$namajurusan="Manajemen Informatika";
	}else {
		$namajurusan="Pendidikan Kesejahteraan Keluarga";
	}
 ?>

<html >
 	<head>
 		<title>Data Mahasiswa</title>
 	</head>
 	<body>
 		<h1>Halo <?php echo $nama; ?></h1>
		<form  action="proses_registrasi.php" method="POST">
			<table border="0">
				<tr>
					<td>NIM:</td>
					<td><?php echo $nim;  ?></td>
				</tr>
				<tr>
					<td>Nama:</td>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin:</td>
					<td><?php echo $jk;  ?></td>
				</tr>
				<tr>
					<td>Jurusan:</td>
					<td><?php  echo $jurusan;?></td>
				</tr>
				<tr>
					<td>Alamat:</td>
					<td><?php  echo $alamat;?></td>
				</tr>
			</table>
		</form>
 	</body>
 </html>
