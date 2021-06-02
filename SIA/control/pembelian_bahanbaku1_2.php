<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add = new akun();
$date=$_POST['tgl'];
$id_akun="32";
$id_sup=$_POST['id_sup'];
$jenis="PMB";
$id_akun1="23";
$nama=$_POST['nama'];
$qty=$_POST['qty'];
$hs=$_POST['hs'];
$ht=$_POST['ht'];
$ket;
$tes5=$add->get_bbaku_detail($nama);
foreach($tes5 as $m){
$ket="Pembelian ".$m['nama_bahan'];
}


$saldo=$ht;
	
		$add->add_b_baku($nama,$qty,$hs,$ht,$date);	
		$add->add_jurnal($date,$ket,$jenis);
		$tes=$add->get_id_jurnal();
		$id_jurnal=0;
		foreach($tes as $m){
		$id_jurnal+=$m['id_jurnal'];
		}
			$nol=0;
			$add->add_isi_jurnal($id_jurnal,$saldo,$nol,$id_akun1);
			$add->add_isi_jurnal($id_jurnal,$nol,$saldo,$id_akun);
			
		
		$tes4=$add->edit_supllier($id_sup);
		foreach($tes4 as $mm){
		$saldo+=$mm['saldo'];
		}
		$add->edit_sup1($id_sup,$saldo);
			
			header('location:../views/list_bahanbaku.php');
	
?>