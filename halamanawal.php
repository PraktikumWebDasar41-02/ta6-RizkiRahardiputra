<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body>
	
	<center>
		<table border="1">
			<tr>
				<td>
					<a href="halamanawal.php">HOME</a>
				</td>
				<td>
					<a href="posting.php">Posting</a>
				</td>
				<td>
					<a href="daftarposting.php">Daftar Postingan</a>
				</td>
				<td>
					<a href="semuaposting.php">Semua Posting</a>
				</td>
				<td>
					<a href="editprofile.php">Edit Profile</a>
				</td>
				<td>
					<a href="daftar.php">Logout</a>
				</td>
			</tr>
		</table>
		<br><br>
		<table>
			<?php
			session_start();
			
			$query = mysqli_query($con,"SELECT * FROM `pendaftaran`");
			while ($d = mysqli_fetch_array($query)){
			?>
			
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $d[0]; ?></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><?php echo $d[1]; ?></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><?php echo $d[2]; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $d[3]; ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><?php echo $d[4]; ?></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><?php echo $d[5]; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $d[6]; ?></td>
			</tr>
			

	</table>
<?php }?>
</body>
</html>