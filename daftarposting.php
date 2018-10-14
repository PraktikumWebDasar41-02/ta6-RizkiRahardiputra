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
			
			$query = mysqli_query($con,"SELECT * FROM `posting`");
			while ($e = mysqli_fetch_array($query)){
			?>
			
			<tr>
				<td>Posting</td>
				<td>:</td>
				<td><?php echo $e[0]; ?></td>
			</tr>
			<tr>
				<td>Upload</td>
				<td>:</td>
				<td><?php echo $e[1]; ?></td>
			</tr>
			

	</table>
<?php }?>
</body>
</html>