<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "pendaftaran";
 $con     = new mysqli($hostname, $username, $pass, $db);

 if($con==false){

  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['posting'])) {
    $posting1         =$_POST['posting1'];
   $file            =$_POST['file'];
  

 
 $sql="INSERT INTO posting(posting1, file) VALUES ('$posting1','$file')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
    echo " <a href='daftarposting.php'>klik</a> untuk ke login";
   }else{
    echo "Database Gagal";
   }
}
 ?>
