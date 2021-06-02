<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$akun=new akun();
$tesy=$akun->get_tahun();
foreach($tesy as $m){
$tahun+=$m['tahun'];
}

$date=$_POST['date'];
$ket=$_POST['ket'];
$jenis=$_POST['jenis'];
$saldo=$_POST['saldo'];
$id_relasi=$_POST['id_relasi'];
	
if($date < $tahun){
header('location:../views/input_transaksi.php?i=gagal');
	}else{
		$add = new akun();
		$add->add_jurnal($date,$ket,$jenis);
		
		
		$tes=$add->get_id_jurnal();
		$id_jurnal=0;
		foreach($tes as $m){
		$id_jurnal+=$m['id_jurnal'];
		}
		$tes1=$add->get_isi_relasi($id_relasi);
		
		foreach($tes1 as $m){
		$id_akun=$m['id_akun'];
		$posisi=$m['posisi'];
			if($posisi=="debit"){
			$nol=0;
			$add->add_isi_jurnal($id_jurnal,$saldo,$nol,$id_akun);
			}
			else{
			$nol=0;
			$add->add_isi_jurnal($id_jurnal,$nol,$saldo,$id_akun);
			}
		
		}
		


header('location:../views/input_transaksi.php');
}

?>