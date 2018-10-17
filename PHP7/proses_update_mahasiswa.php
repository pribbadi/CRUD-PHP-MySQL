<?php 
	$nimx=$_POST['id'];
	$namax=$_POST['namabaru'];
	$passx=MD5($_POST['passbaru']);
	$statex=$_POST['statusbaru'];
	echo $nimx."-".$namax."-".$passx."-".$statex;
	include 'koneksi.php';
	mysqli_query($konek,"UPDATE mahasiswa SET id_mahasiswa='$nimx',nama='$namax',password='$passx',status='$statex' where id_mahasiswa='$nimx'");
	header("location:mahasiswa.php");
?>