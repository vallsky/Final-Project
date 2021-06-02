<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";

$nama_akun=$_POST['nama_akun'];
$no_akun=$_POST['no_akun'];
$status=$_POST['status'];
$saldo=$_POST['saldo'];


	$add = new akun();
	$add->add_akun($nama_akun,$no_akun,$status);
	
	$db=new database();
	$db->con();
	$tes=$add->get_id_akun();
	$id_akun=0;
	foreach($tes as $m){
	$id_akun+=$m['id_akun'];
	}
	$add->saldo($id_akun,$saldo);
	
	$tes1=$add->get_id_periode();
	$id_periode=0;
	foreach($tes1 as $m){
	$id_periode+=$m['id_periode'];
	}
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	
	header('location:../views/add_akun.php?i=sukses');

?>