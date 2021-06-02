<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun = new akun();
$periode=0;
$tes1=$akun->get_tahun();
foreach($tes1 as $m){
$periode+=$m['tahun'];
}
$year=$_POST['year'];
	$add = new akun();
	$add->add_periode($year);
	$tes1=$add->get_id_periode();
	$id_periode=0;
	foreach($tes1 as $m){
	$id_periode+=$m['id_periode'];
	}
	

//aktiva lancar
$status1=1;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$saldo=$m['saldo']+$debet-$credit;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}


//aktiva tetap
$status1=12;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$saldo=$m['saldo']+$debet-$credit;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

 //Pasiva
$status1=2;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$saldo=$m['saldo']-$debet+$credit;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}



//Modal
$modal=0;
$status1=3;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
if($m['kode_akun']==10100){
}else{
}
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$modal+=$m['saldo']-$debet+$credit; 
}

$status1=4;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
$penjualan=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$penjualan+=$m['saldo']-$debet+$credit;
}
//hpp
?>
<?php
$wipakhir="";
$wipawal="";
$pawal="";
$pakhir="";
$aset=$akun->get_akun_list();
foreach($aset as $m){
if($m['status']=="1"){
if($m['id_akun']=="24"){
$wipawal+=$m['saldo'];
}
}
}
foreach($aset as $m){
if($m['status']=="1"){
if($m['id_akun']=="25"){
$pawal+=$m['saldo'];
}
}
}
//wip awal dan persediaan awal
//wip
$id_wip="24";
$tes=$akun->get_buku_besar($id_wip,$periode);
$tes3=$akun->get_jurnal_buku_besar($id_wip,$periode);
$saldo_awal=0;
foreach($tes as $m){
$saldo_awal+=$m['saldo'];
}			
							$d=0;
							$c=0;
							if(!empty($tes3)){
							foreach($tes3 as $m){
							 $d+=$m['debet'];
							 $c+=$m['credit']; 
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							}
							}
							$wipakhir+=$saldo_awal;
//persediaan
$id_p="25";
$tes=$akun->get_buku_besar($id_p,$periode);
$tes3=$akun->get_jurnal_buku_besar($id_p,$periode);
$saldo_awal=0;
foreach($tes as $m){
$saldo_awal+=$m['saldo'];
}			
							$d=0;
							$c=0;
							if(!empty($tes3)){
							foreach($tes3 as $m){
							 $d+=$m['debet'];
							 $c+=$m['credit']; 
							 
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							}
							}
							$pakhir+=$saldo_awal;
//end	

$status1=5;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
$saldo_akhir=0;
$hpp=0;
$bop=0;
foreach($tes1 as $m){
if($m['kode_akun']==10300){
$saldo_awal-=$m['saldo'];
}
else{
$saldo_awal+=$m['saldo'];
}
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
if($m['kode_akun']==10300){
$tempd-=$debet;
$tempc-=$credit;
}else{
$tempd+=$debet;
$tempc+=$credit;
}
}
if($m['kode_akun']==20200){
$hpp+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==10400){
$hpp+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==20500){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==20700){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==21400){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==29900){
$bop+=$m['saldo']+$debet-$credit;
}
}
$hppfix=$pawal+$bop+$hpp+$wipawal-$wipakhir-$pakhir;
//hpp
?>
<?php

 $labakotor=$penjualan-$hppfix;


$status1=6;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
}
$biayaumumadm=$saldo_awal+$tempd-$tempc;

$status1=7;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
}
 $penghasilanlainlain=$saldo_awal+$tempd-$tempc;
 $labasebelumpajak=$labakotor-$penghasilanlainlain-$biayaumumadm;
$status1=8;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
 $pajak=$m['saldo']+$debet-$credit; 
}
$lababersih=$labasebelumpajak-$pajak;
$saldo=$modal+$lababersih;
$id_modal="54";
	$add->add_buku_besar($id_modal,$saldo,$id_periode);
	$add->add_akun_a($id_modal,$saldo,$id_periode);
	$add->update_saldo($id_modal,$saldo);
$saldo=0;
$id_prive="82";
	$add->add_buku_besar($id_prive,$saldo,$id_periode);
	$add->add_akun_a($id_prive,$saldo,$id_periode);
	$add->update_saldo($id_prive,$saldo);
	

//penjualan
$status1=4;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}

$saldo=0;

	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

//hpp
$status1=5;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}

$saldo=0;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

//biaya
$status1=6;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}

$saldo=0;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

//penghasilan beban
$status1=7;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}

$saldo=0;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

//pajak
$status1=8;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}

$saldo=0;
	$add->add_buku_besar($id_akun,$saldo,$id_periode);
	$add->add_akun_a($id_akun,$saldo,$id_periode);
	$add->update_saldo($id_akun,$saldo);
}

header('location:../views/all_akun.php');
?>




