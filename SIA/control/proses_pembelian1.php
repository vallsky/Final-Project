<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add = new akun();
$id_pembelian=$_POST['id'];
$date=$_POST['tgl'];
$id_akun="32";
$id_sup=$_POST['id_sup'];
$ket="";
$jenis="PMB";
$saldo="";
$spb="Done";
$id_akun1="23";




$add->edit_pembelian($id_pembelian,$spb);
		$tes3=$add->get_input_pembelian($id_pembelian);
		foreach($tes3 as $mm){
		$ket="Pembelian Bahan Baku orderan ".$mm['ket'];
		$saldo=$mm['harga_beli'];
		}
		
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
		foreach($tes3 as $mm){
		$saldo+=$mm['saldo'];
		}
		$add->edit_sup1($id_sup,$saldo);
			
			header('location:../views/list_pembelian.php');
	
?>