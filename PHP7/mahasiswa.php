<?php 
	include"koneksi.php";
	$mahasiswa=mysqli_query($konek,"select * from mahasiswa");
?>
<h3  align="center">DAFTAR MAHASISWA</h3>
<hr>
<table border=2>
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Status</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php 
	$no=1;
	while($row=mysqli_fetch_assoc($mahasiswa)){ ?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $row['id_mahasiswa'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php 
					if ($row['status']==1){
						echo "aktif";
					} else if ($row['status']==0){
						echo "tidak aktif";
					}?>
			</td>
			<td><a href="<?php echo "update_mahasiswa.php?id=".$row['id_mahasiswa']; ?>">update</a></td>
			<td><a href="<?php echo "delete_mahasiswa.php?id=".$row['id_mahasiswa']; ?>">delete</a></td>
		</tr>
	<?php
	$no++;
	}
	?>
</table>
<hr>
<h3 align="center">TAMBAH MAHASISWA</h3>
<hr>
<form action="proses_inputmahasiswa.php" method="POST">
	NIM : <input type="number" name="id"><br>
	Nama : <input type="text" name="nama"><br>
	Password : <input type="password" name="pass"><br>
	Status : 
			<select name='state'>
				<option selected="selected">status mhs?</option>	
				<option value="1">Aktif</option>	
				<option value="0">tidak aktif</option>	
			</select>
	<br>
	<input type="submit" value="tambah mahasiswa">
</form>