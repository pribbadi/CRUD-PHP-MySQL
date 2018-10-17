<?php 
include "koneksi.php";
$idx=$_GET['id'];
mysqli_query($konek,"delete from mahasiswa where id_mahasiswa='$idx'");
header("location:mahasiswa.php");
 ?>