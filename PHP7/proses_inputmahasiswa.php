<?php 
	$nimx=$_POST['id'];
	$namax=$_POST['nama'];
	$passx=MD5($_POST['pass']);
	$statex=$_POST['state'];
	//echo $nimx."-".$namax."-".$passx."-".$statex;
	include 'koneksi.php';
	$mahasiswa=mysqli_query($konek,"INSERT INTO mahasiswa values ('$nimx','$namax','$passx','$statex')");
	header("location:mahasiswa.php");
?>