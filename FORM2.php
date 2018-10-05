<!DOCTYPE html>
<html>
<head>
	<title>form2</title>
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
			<td><input type="text" name="komentar"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form></center>
</body>
</html>

<?php
$dt = mysqli_connect('localhost', 'root', '', 'd_modul5');
session_start();
$nim = $_SESSION['nim'];
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$komentar = $_SESSION['komentar'];
$ye = "SELECT nama WHERE nim='$nim'";
$sql = mysqli_query($dt,$ye);


if ($sql) {
	echo $sql;
}

if (isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];
	
	mysqli_query($dt, "INSERT INTO t_jurnal1() values ('', '$nama', '', '$komentar')");
	header ("Location : FORM2.php");
}
?>