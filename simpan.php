<html>
<table width="200" border="1">
<h3>Data Mahasiswa</h3>
    <tr>
        <td>No</td>
        <td>Nim</td>
		<td>Nama Mhs</td>
		<td>Tanggal Lahir</td>
		<td>Tempat Lahir</td>
		<td>Usia (Thn)</td>
    </tr>
<?php
// membaca file
$nourut=0;
$file_handle = fopen("datamahasiswa2.txt", "r");
while (!feof($file_handle) ) {
	$nourut++;
    $line_of_text = fgets($file_handle);
    $parts = explode("|",$line_of_text);
	$usia = new datetime($parts[2]);
	$today = new datetime();
	$diff=$usia->diff($today);
    echo "<tr><td>$nourut.</td>
	<td>$parts[0]</td>
	<td>$parts[1]</td>
	<td>$parts[2]</td>
	<td>$parts[3]</td>
	<td>$diff->y</td>
	</tr>";
}
fclose($file_handle);
?>
<?php
	$nourut++;
	$nim= $_POST['nim'];
	$nama= $_POST['nama'];
	$tgllhr= $_POST['tgllhr'];
	$tmptlhr= $_POST['tmptlhr'];
	echo "<tr><td>$nourut</td>
	<td>$nim</td>
	<td>$nama</td>
	<td>$tgllhr</td>
	<td>$tmptlhr</td>
	<td>$diff->y</td>
	</tr>";
?>
<?php
echo "Jumlah data :$nourut";
?>
</table>
</html>