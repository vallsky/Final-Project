<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$id_pembelian=$_POST['id'];
$add = new akun();
$date=$_POST['tgl'];
$ket="";
$jenis="";
$saldo="";
$spb="Done";

$add->edit_pembelian($id_pembelian,$spb);
		$tes3=$add->get_input_pembelian($id_pembelian);
		foreach($tes3 as $mm){
		$ket="Pembelian Bahan Baku orderan ".$mm['ket'];
		$saldo=$mm['harga_beli'];
		}

$jenis="PMB";
$id_relasi="10";


		
		
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

  header('location:../views/list_pembelian.php');


?>