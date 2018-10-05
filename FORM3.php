<!DOCTYPE html>
<html>
<head>
	<title>TMP</title>
</head>
<body>
<center><form>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td>:</td>
			<td><?php echo $komentar; ?></td>
		</tr>
		<tr>
			<td>Jumlah Kata</td>
			<td>:</td>
			<td></td>
		</tr>
	</table></center>
</body>
</html>

<?php
	$dt = mysqli_connect('localhost', 'root', '', 'd_modul5');
	session_start();
	$nim = $_SESSION['nim'];
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
	$ye = "SELECT nama, komentar WHERE nim='$nim'";
	$sql = mysqli_query($dt,$ye);

	if ($sql) {
	echo $sql;
}
?>