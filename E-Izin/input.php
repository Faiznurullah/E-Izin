<?php


 include 'db.php';
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Surat Izin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
<center><p>Surat Izin sekolah</p></center>
<form name='input' method='post' action="" enctype="multipart/form-data" required>
NAMA:<input type='text' name='nama' placeholder='nama anda...' required><br>
Kelas:<input type='text' name='asal' placeholder='kelas...' required><br>
Jurusan:
     <select name='jurusan' required>
            <option value='MIPA'>MIPA</option>
            <option value='IPS'>IPS</option>

     </select><br>
<h>Foto surat:</h><br><input type="file"  name="view"  required><br>
<button type="submit" name="input">SUBMIT</button>
</form>
</div>



 <?php
 if(isset($_POST['input'])){
	 $nama = $_POST['nama'];
	 $asal = $_POST['asal'];
	 $Jur = $_POST['jurusan'];
	 $nama_file = $_FILES['view']['name'];
	 $source = $_FILES['view']['tmp_name'];
	 $folder = './upload/';
	 
	 move_uploaded_file($source,$folder.$nama_file);
	 $insert = mysqli_query($conn, "INSERT INTO tb_upload VALUES (
	  NULL,
	 '$nama',
	 '$asal',
	 '$Jur',
	 '$nama_file')");
	 
	 if($insert){
		 echo '<div class="sukses">';
		 echo '<center>Upload sukses</center>';
		 echo '</div>';
	 }
	 else{
		 echo '<div class="gagal">';
		 echo '<center>Gagal upload</center>';
		 echo '</div>';
	 }
 }
 
 ?>





</body>
</html>