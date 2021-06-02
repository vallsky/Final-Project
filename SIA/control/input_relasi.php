<?php
include "../model/database.php";
include "../model/function.php";

$relasi=$_POST['relasi'];


	$add = new akun();
	$add->add_relasi($relasi);
	
	header('location:../views/input_relasi.php');

?>