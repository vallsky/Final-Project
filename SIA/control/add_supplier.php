<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";

$nama=$_POST['nama'];
$id_akun="32";
	$add = new akun();
	$add->add_sup($nama,$id_akun,$saldo);
	header('location:../views/add_supplier.php?i=sukses');

?>