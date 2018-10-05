<!DOCTYPE html>
<html>
<head>
	<title>form1</title>
</head>
<body>
<center><h1>MASUK</h1><form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
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
// $_SESSION["nim"]= $_POST['nim'];
// $_SESSION["nama"]= $_POST['nama'];
// $_SESSION["email"]= $_POST['email'];

if (isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	$cek = mysqli_query($dt, "INSERT INTO t_jurnal1 VALUES ($nim, '$nama', '$email', '')");
	if ($cek) {
		header ("Location:FORM2.php");
	}
}

?>