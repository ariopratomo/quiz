<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="output_a.php" method="post">
	<table border="1">
		<tr>
			<th colspan="3">Form Pendaftaran Private</th>
		</tr>
		<tr>
			<td>No. Daftar</td>
			<td></td>
			<td><input type="text" name="no"></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td></td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td></td>
			<td><input type="text" name="usia"> Tahun</td>
		</tr>
		<tr>
			<td>Materi Kursus</td>
			<td></td>
			<td><select name="materi">
				<option value="">==Pilihan==</option>
				<option value="Visual Basic">Visual Basic</option>
				<option value="Animasi Flash">Animasi Flash</option>
				<option value="Web Programming">Web Programming</option>
			</select></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td></td>
			<td><input type="radio" name="kelas" value="Kursus (1 Siswa)">Khusus (1 Siswa)<br>
				<input type="radio" name="kelas" value="Biasa (3 Siswa)">Biasa (3 Siswa)<br>
				<input type="radio" name="kelas" value="Kelompok (5 Siswa)">Kelompok (5 Siswa)
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center"> <button type="submit">Daftar</button> <button type="reset">Batal</button></td>
		</tr>
	</table>
	</form>
</body>
</html>