<html>
	<head>
	</head>
	<body>
		<h1>Registrasi Mahasiswa Fakultas Teknik dan Kejuruan</h1>
		<form  action="proses_registrasi.php" method="POST">
			<table border="0">
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="radio" name="jk" value="Pria" />Pria
					<input type="radio" name="jk" value="Wanita" /> Wanita </b>
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
						<td>
							<select  name="jurusan">
								<option value="pti"> Pendidikan Teknik Infotmatika</option>
								<option value="pte"> Pendidikan Teknik Elektro</option>
								<option value="mi"> Manajemen Informatika</option>
								<option value="ptm"> Pendidikan Teknik Mesin </option>
								<option value="pkk"> Pendidikan Kesejahteraan Keluarga</option>
							</select>
						</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="Daftar"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
