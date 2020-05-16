<?php
include 'db.php';

$delete = mysqli_query($conn, "DELETE FROM tb_upload WHERE id_gambar = '".$_GET['id']."'");

 if($delete){
	header('location: admin.php');
}
else{
	echo 'Gagal upload';
}

?>