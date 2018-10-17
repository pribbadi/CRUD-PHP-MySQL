<?php 
include "koneksi.php";
$idx=$_GET['id'];
$data_lama=mysqli_query($konek,"select * from mahasiswa where id_mahasiswa='$idx'");
$row=mysqli_fetch_array($data_lama);
 ?>
<h3  align="center">UPDATE MAHASISWA</h3>
<hr>
 <form action="proses_update_mahasiswa.php" method="POST">
 	id : <input type="text" readonly="readonly" name="id" value="<?php echo $row['id_mahasiswa']; ?>"><br>
 	nama : <input type="text" name="namabaru" value="<?php echo $row['nama']; ?>"><br>
 	Password baru : <input type="text" name="passbaru" placeholder="isikan password baru"><br>
 	Status : 
		 	<select name="statusbaru">
		 		<?php 
					if ($row['status']==1){
						echo "<option value='1' selected>aktif</option>";
						echo "<option value='0'>tidak aktif</option>";
					} else {
						echo "<option value='0' selected>tidak aktif</option>";
						echo "<option value='1'>aktif</option>";
					}
				?>	
		 	</select>
 	<br>
 	<input type="submit" value="update mahasiswa">
 </form>