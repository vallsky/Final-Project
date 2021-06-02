<?php
include "../model/database.php";
include "../model/function.php";

$id=$_GET['id'];
$id_relasi=$_GET['id_relasi'];


	$delete = new akun();
	$delete->delete_isi_relasi($id,$id_relasi);
	
	header('location:../views/isi_relasi.php?id='.$id_relasi);


?>