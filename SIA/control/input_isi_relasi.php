<?php
include "../model/database.php";
include "../model/function.php";

$id_akun=$_POST['id_akun'];
$id_relasi=$_POST['id_relasi'];
$posisi=$_POST['posisi'];

	$add = new akun();
	$add->add_isi_relasi($id_akun,$id_relasi,$posisi);
	
	header('location:../views/isi_relasi.php?id='.$id_relasi);

?>