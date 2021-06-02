<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add=new akun();
$tgl=$_POST['tgl'];
$id_orderan=$_POST['order'];
$id_persediaan=$_POST['brg'];
$id_customer=$_POST['cust'];
$type=$_POST['type'];
$harga_jual=$_POST['hargajual'];
$hpp=$_POST['hpp'];

if($harga_jual<=$hpp){
header('location:../views/penjualan.php?i=price');
}
else{
$add->update_hrgpes($id_orderan,$harga_jual);
$tes=$add->customer_detail($id_customer);
$tes1=$add->list_order_single($id_orderan);
$tes2=$add->get_persediaan_single($id_persediaan);

$saldo_awalcust=0;
foreach($tes as $m){
$saldo_awalcust+=$m['saldo'];
}

$hargajual=0;
$ket="";
foreach($tes1 as $m){
$hargajual+=$m['harga_jual'];
$ket='Penjualan '.$m['ket'];
}
$hpp=0;
foreach($tes2 as $m){
$hpp+=$m['hpp'];
}
$jenis="PJB";
$id_akunpiutang="9";
$id_akunkas="6";;
$id_akunpenjualan="55";
$id_akunpersediaan="25";
$id_akunhpp="57";
if($type=="kas"){
$add->add_jurnal($tgl,$ket,$jenis);
$tes3=$add->get_id_jurnal();
		$id_jurnal=0;
		foreach($tes3 as $m){
		$id_jurnal+=$m['id_jurnal'];
		}
		$nol=0;
			$add->add_isi_jurnal($id_jurnal,$hargajual,$nol,$id_akunkas);
			$add->add_isi_jurnal($id_jurnal,$nol,$hargajual,$id_akunpenjualan);
			$add->add_isi_jurnal($id_jurnal,$hpp,$nol,$id_akunhpp);
			$add->add_isi_jurnal($id_jurnal,$nol,$hpp,$id_akunpersediaan);
$add->delete_persediaan($id_persediaan);
$stat="Sold and Done";
$add->update_statpes($id_orderan,$stat);
$statpengiriman="Pending";
$add->add_pengiriman($id_orderan,$statpengiriman,$id_customer);
header('location:../views/list_order.php');
}
else if($type=="kredit"){
$add->add_jurnal($tgl,$ket,$jenis);
$tes3=$add->get_id_jurnal();
		$id_jurnal=0;
		foreach($tes3 as $m){
		$id_jurnal+=$m['id_jurnal'];
		}
		$nol=0;
			$add->add_isi_jurnal($id_jurnal,$hargajual,$nol,$id_akunpiutang);
			$add->add_isi_jurnal($id_jurnal,$nol,$hargajual,$id_akunpenjualan);
			$add->add_isi_jurnal($id_jurnal,$hpp,$nol,$id_akunhpp);
			$add->add_isi_jurnal($id_jurnal,$nol,$hpp,$id_akunpersediaan);
$saldo_awalcust+=$hargajual;
$add->update_saldo_cust($id_customer,$saldo_awalcust);
$add->delete_persediaan($id_persediaan);
$stat="Sold and Done";
$add->update_statpes($id_orderan,$stat);
$statpengiriman="Pending";
$add->add_pengiriman($id_orderan,$statpengiriman,$id_customer);
header('location:../views/list_order.php');
}
}



	
	
	

?>