<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";



$date=$_POST['date'];
$ket=$_POST['ket'];
$jenis=$_POST['jenis'];
$jmlh=$_POST['jmlh'];
$id_relasi=$_POST['id_relasi'];

$cek=0;
for($a=0; $a<$jmlh; $a++){
$saldo=$_POST[$a];
$posisi=$_POST['posisi'.$a];
$id_akun=$_POST['id_akun'.$a];
if($posisi=="debit"){
$cek+=$saldo;
}
else{
$cek-=$saldo;
}
}
if($cek==0){

	$add = new akun();
	$add->add_jurnal($date,$ket,$jenis);
	
	$db=new database();
	$db->con();
	$tes=$add->get_id_jurnal();
	$id_jurnal=0;
	foreach($tes as $m){
	$id_jurnal+=$m['id_jurnal'];
	}

for($a=0; $a<$jmlh; $a++){
$saldo=$_POST[$a];
$posisi=$_POST['posisi'.$a];
$id_akun=$_POST['id_akun'.$a];
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

}else{
header('location:../views/input_transaksi1.php?id_relasi='.$id_relasi.'&i=balance');
}
	

?>