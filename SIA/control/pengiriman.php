<?php
include "../model/database.php";
include "../model/function.php";

$id=$_POST['id'];
$tgl=$_POST['tgl'];


	$update = new akun();
	$update->update_pengiriman($id,$tgl);
	header('location:../views/listpengiriman.php');

?>