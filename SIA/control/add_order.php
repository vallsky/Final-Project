<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$akun=new akun();
$tahun=0;
$tes1=$akun->get_tahun();
foreach($tes1 as $m){
$tahun+=$m['tahun'];
}
$tes2=$akun->list_order();

$tgl=$_POST['tgl'];
$ket=$_POST['ket'];
$hargajual=$_POST['hargajual'];
$qty=$_POST['qty'];
$status="Need Verify";
$customer=$_POST['customer'];

$proses=0;
$id_updt;
foreach($tes2 as $mm){
if($tgl==$mm['tgl'] and $ket==$mm['ket'] and $customer==$mm['customer'] and $mm['status_pesanan']=='Pending'){
$proses+=1;
$id_updt=$mm['id_pesanan'];
$qty+=$mm['qty'];
}
else if($tgl==$mm['tgl'] and $ket==$mm['ket'] and $customer==$mm['customer'] and $mm['status_pesanan']=='Need Verify'){
$proses+=1;
$id_updt=$mm['id_pesanan'];
$qty+=$mm['qty'];
}
}

if($tgl < $tahun or $qty<=0){
header('location:../views/order.php?i=time');
}
else if($proses==1){
	$add = new akun();
	$add->upt_qty($id_updt,$qty);
	header('location:../views/list_order.php');
}
else{

	$add = new akun();
	$add->add_order($tgl,$ket,$hargajual,$qty,$status,$customer);
	
	header('location:../views/list_order.php');
}
?>