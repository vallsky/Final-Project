<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add = new akun();
$id_produksi=$_POST['id'];
$ket="";
$jenis="JU";
$date="";
$saldo=0;
$tes1=$add->get_dt_produksi($id_produksi);
$id_pesanan=0;
foreach($tes1 as $m){
$ket='Produksi'.$m['ket'];
$date=$m['tgl_produksi'];
$id_pesanan=$m['id_pesanan'];
}
$tes2=$add->get_isi_produksi_dt($id_produksi);
foreach($tes2 as $m){
$saldo+=$m['total'];
}

$id_akun1="24";
$id_akun="23";
	$add->add_jurnal($date,$ket,$jenis);
		$tes=$add->get_id_jurnal();
	$id_jurnal=0;
		foreach($tes as $m){
		$id_jurnal+=$m['id_jurnal'];
		}
			$nol=0;
			$add->add_isi_jurnal($id_jurnal,$saldo,$nol,$id_akun1);
			$add->add_isi_jurnal($id_jurnal,$nol,$saldo,$id_akun);
			
			$stats="Proses";
		$add->update_statprod($id_produksi,$stats);
	$add->update_statpes($id_pesanan,$stats);
	
header('location:../views/produksi_done.php?id='.$id_produksi);
?>