<?php 
$no=$_POST['no'];
$nama=$_POST['nama'];
$usia=$_POST['usia'];
$materi=$_POST['materi'];
$kelas=$_POST['kelas'];
if ($kelas=='Kursus (1 Siswa)') {
	$admin=20000;	
}
elseif ($kelas=='Biasa (3 Siswa)') {
	$admin=15000;	
}
elseif ($kelas=='Kelompok (5 Siswa)') {
	$admin=10000;
}

if ($materi=='Visual Basic') {
	$biaya=40000;
	$pertemuan=20;
}
elseif ($materi=='Animasi Flash') {
	$biaya=50000;
	$pertemuan=30;
}
elseif ($materi=='Web Programming') {
	$biaya=60000;
	$pertemuan=45;
}
$total=$biaya+$admin;
 ?>
 <table>
 	<tr>
 		<td>No. Daftar</td>
 		<td>:</td>
 		<td><?php echo $no; ?></td>
 	</tr>
 	<tr>
 		<td>Nama Siswa</td>
 		<td>:</td>
 		<td><?php echo $nama; ?></td>
 	</tr>
 	<tr>
 		<td>Usia</td>
 		<td>:</td>
 		<td><?php echo $usia; ?> Tahun</td>
 	</tr>
 	<tr>
 		<td>Materi Kursus</td>
 		<td>:</td>
 		<td><?php echo $materi; ?></td>
 	</tr>
 	<tr>
 		<td>Biaya Materi</td>
 		<td>:</td>
 		<td><?php echo $biaya; ?></td>
 	</tr>
 	<tr>
 		<td>Jumlah Pertemuan</td>
 		<td>:</td>
 		<td><?php echo $pertemuan; ?></td>
 	</tr>
 	<tr>
 		<td>Kelas</td>
 		<td>:</td>
 		<td><?php echo $kelas; ?></td>
 	</tr>
 	<tr>
 		<td>Biaya Administrasi</td>
 		<td>:</td>
 		<td><?php echo $admin; ?></td>
 	</tr>
 	<tr>
 		<td>Biaya Kursus</td>
 		<td>:</td>
 		<td><?php echo $total; ?></td>
 	</tr>
 </table>