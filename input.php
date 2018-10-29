<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kuis B</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="output.php" method="post" >
		<table border="1">
			<tr>
				<th colspan="3">Hotel Huru Hara</th>
			</tr>
			<tr>
			<td>Nama Pemesan</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
			</tr>
			<tr>
			<td>Tipe Kamar</td>
			<td>:</td>

			<td><select name="tipe">
							<option value="Standar">Standar</option>
							<option value="Suite">Suite</option>
							<option value="Bangsal">Bangsal</option>
			</select></td>
			</tr>
			<tr>
				<td>Pilihan Kasur</td>
				<td>:</td>
				<td>
					<input type="radio" name="kasur" value="Single Bed">Single Bed
					<input type="radio" name="kasur" value="Double Bed">Double Bed</td>
			</tr>
			<tr>
				<td>Fasilitas Tambahan</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="laundry">Laundry
					<input type="checkbox" name="makan">Makan Siang</td>
			</tr>
			<tr>
				<td>Lama Inap</td>
				<td>:</td>
				<td><input type="text" name="lama"></td>
			</tr>
			<tr><td colspan="3" align="center"><button type="proses">Proses</button> <button type="reset">Batal</button></td></tr>
		</table>
	</form>
</body>
</html>