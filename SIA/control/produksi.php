<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$akun=new akun();

$tgl=$_POST['tgl'];
$id_pesanan=$_POST['orderan'];
$status="Pending";

$tes1=$akun->list_order_single($id_pesanan);
$tgl_pesanan;
foreach ($tes1 as $m){
$tgl_pesanan=$m['tgl'];
}

if($tgl < $tgl_pesanan){
header('location:../views/produksi.php?i=gagal');
}
else{
if($id_pesanan==0){
header('location:../views/produksi.php');
}else{
$add = new akun();
	$add->add_produksi($tgl,$id_pesanan,$status);
	
	header('location:../views/produksi.php');
}
}

?>