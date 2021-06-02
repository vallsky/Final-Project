<?php
include "../model/database.php";
include "../model/function.php";


$id_relasi=$_GET['id'];


	$delete = new akun();
	$delete->delete_relasi($id_relasi);
	
	header('location:../views/input_relasi.php');


?>