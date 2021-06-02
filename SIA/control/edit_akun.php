<?php
include "../model/database.php";
include "../model/function.php";

$nama_akun=$_POST['nama_akun'];
$no_akun=$_POST['no_akun'];
$status=$_POST['status'];
$saldo=$_POST['saldo'];
$id_akun=$_POST['id'];


	$update = new akun();
	$update->edit_akun($id_akun,$nama_akun,$no_akun,$status);
	$update->edit_saldo($id_akun,$saldo);
	$update->edit_akun_a($id_akun,$saldo);
	$update->edit_buku_besar($id_akun,$saldo);
	header('location:../views/all_akun.php');

?>