<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add = new akun();
$date=$_POST['tgl'];
$nama=$_POST['nama'];
$qty=$_POST['qty'];
$hs=$_POST['hs'];
$ht=$_POST['ht'];
$jenis="PMB";
$id_relasi="10";
$ket;

$tes5=$add->get_bbaku_detail($nama);
foreach($tes5 as $m){
$ket="Pembelian ".$m['nama_bahan'];
}

$saldo=$ht;
$aakun="23";

$add->add_b_baku($nama,$qty,$hs,$ht,$date);		
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

  header('location:../views/list_bahanbaku.php');


?>