<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";

$nama=$_POST['nama'];
$id_akun="9";
$saldo="0";
	$add = new akun();
	$add->add_cust($nama,$id_akun,$saldo);
	header('location:../views/add_customer.php?i=sukses');

?>