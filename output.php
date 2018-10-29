<?php 
$nama=$_POST['nama'];
$tipe=$_POST['tipe'];
$kasur=$_POST['kasur'];
$laundry=$_POST['laundry'];
$makan=$_POST['makan'];
$lama=$_POST['lama'];
?>
<?php if ($tipe=='Standar') {
	$hrg_kamar=250000;
	$fasilitas="AC";	
}
elseif ($tipe=='Suite') {
	$hrg_kamar=350000;
	$fasilitas="AC, TV, Sofa";
	
}
elseif ($tipe=='Bangsal'){
	$hrg_kamar=400000;
	$fasilitas="AC, TV, Sofa, Wifi Kamar";
}
if ($kasur=='Single Bed') {
	$tmbh_ksr=0;	
}
elseif ($kasur=='Double Bed') {
	$tmbh_ksr=100000;
}
if ($laundry==true) {
	$laundryya='Laundry';
	$hrglaun=50000;	
}
else {
	$hrglaun=0;
	$laundryya='';
}
if ($makan==true) {
	$makanea='Makan Siang';
	$hrgmkn=50000;	
}
else {
	$makanea='';
	$hrgmkn=0;
}
$total=$hrg_kamar*$lama+$tmbh_ksr+$hrgmkn+$hrglaun;
?>

<table>
 	<thead>
 		<tr>
 			<th colspan="3">==================HOTEL HURU HARA==================</th>
 		</tr>
 	</thead>
 	<tbody>
 		<tr>
 			<td>Nama Pemesan</td>
 			<td>:</td>
 			<td><?php echo $nama; ?></td>
 		</tr>
 		<tr>
 			<td>Tipe Kamar</td>
 			<td>:</td>
 			<td><?php echo "$tipe (Rp. $hrg_kamar/malam)"; ?></td>
 		</tr>
 		<tr>
 			<td>Fasilitas Kamar</td>
 			<td>:</td>
 			<td><?php echo $fasilitas; ?></td>
 		</tr>
 		<tr>
 			<td>Pilihan Kasur</td>
 			<td>:</td>
 			<td><?php echo "$kasur (+ Rp. $tmbh_ksr)"; ?></td>
 		</tr>
 		<tr>
 			<td>Fasilitas Tambahan</td>
 			<td>:</td>
 			<td><?php 
 				echo "$laundryya (+ Rp. $hrglaun ), $makanea (+ Rp. $hrgmkn) ";?></td>
 		</tr>
 		<tr>
 			<td>Lama Inap</td>
 			<td>:</td>
 			<td><?php echo $lama; ?></td>
 		</tr>
 		<tr>
 			<td>Total Bayar</td>
 			<td>:</td>
 			<td><?php echo $total; ?></td>
 		</tr>
 	</tbody>
 </table>