<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$akun=new akun();
$id=$_GET['id'];
$tes1=$akun->list_order_single($id);


$ket="";
$harga_beli="";
$status="Proses";
 foreach($tes1 as $m){
 $ket=$m['ket'];
 $harga_beli=$m['harga_bahan_baku']*$m['qty'];
 }
 


	$add = new akun();
	$add->add_pembelian($ket,$harga_beli,$id,$status);
	
	header('location:../views/list_produksi.php');

?>