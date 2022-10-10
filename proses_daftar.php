<?php
include 'koneksi.php';

$password = md5($_POST['password']);

$result = mysqli_query ($koneksi, "SELECT * FROM akun WHERE username='$user' AND password='$pass')'or die(mysqli_error));
if(mysql_num_rows($sql) == 0)
{
	$input_akun=`akun` (`username`, `password`, `level`) VALUES ('$_POST[username]', '$password', '3'));

	$input_murid=`murid` (`nisn`, `nama_murid`, `kota`, `jenkel`, `agama`, `jurusan`, `kelas`) VALUES ('$_POST[Nisn]', '$_POST[Nama_Murid]', '$_POST[Kota]', '$_POST[Jenis_Kelamin]', '$_POST[Agama]', '$_POST[Jurusan]', '$_POST[Kelas]');

	echo ( 'SCRIPT LANGUAGE'='javaScript')
				window.alert('Berhasil Registrasi')
				window.location.href='index.php';
			</SCRIPT>");
	(mysql_query($input_akun));
	(mysql_query($input_murid));
	
'else'

echo ( " <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Registrasi Gagal Username sudah Terdaftar')
				window.location.href='index.php';
				</SCRIPT>');



?>