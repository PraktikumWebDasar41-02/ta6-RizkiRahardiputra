
<!DOCTYPE html>
<html>
<form action="koneksi2.php" method="POST">
<body >
	
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
		</table><br>

			<center>
			<tr>
				<center>
					POSTING
				</center>
				<td>
					<textarea name="posting1" rows="20" cols="80" placeholder="Tuliskan ceritamu"required="Silahkan isi ceritamu"> </textarea>
				</td>
				<center>
				<td>
	 				UPLOAD FOTO
	 			</td>
	 			<td>
	 				<input type="file" name="file" placeholder="Upload Foto Anda">
	 			</td>
	 		</center><br>
				<center>
				<td>
					<input type="Submit" name="posting" value="POSTING">
				</td>
		
	 		
	 		</center>
			</tr>
			</center>
		<br><br>
		<table>
</form>

			<?php
if (isset($_POST['posting'])) {
   $posting1					=$_POST['posting1'];
   $file				    =$_POST['file'];
  
   $Error = array();

   if (empty($posting1)) {
    $error['posting1']=="Posting tidak boleh kosong";

   }if (empty($file)) {
    $error['file']=="file tidak boleh kosong";

  
   
}
}

?>