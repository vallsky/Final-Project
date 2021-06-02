<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";


$date=$_POST['date'];
$ket=$_POST['ket'];
$cust=$_POST['customer'];
$saldo=$_POST['saldo'];
$id_relasi="16";
$jenis="KM";
$add = new akun();
		$add->add_jurnal($date,$ket,$jenis);
		
		$db=new database();
		$db->con();
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
	$tes2=$add->customer_detail($cust);	
		$saldo_awalcust=0;
foreach($tes2 as $m){
$saldo_awalcust+=$m['saldo'];
}
$saldo_awalcust-=$saldo;
$add->update_saldo_cust($cust,$saldo_awalcust);


header('location:../views/penerimaanpiutang.php');

?>