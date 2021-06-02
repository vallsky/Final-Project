<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";

$nama=$_POST['nama'];
$id_akun="23";
$db=new database();
$db->con();
$akun=new akun();
$tes1=$akun->tampil_namabahan();
$cek=0;
							if(!empty($tes1)){
							foreach($tes1 as $m){
							if($nama==$m['nama_bahan']){
							$cek+=1;
							}
							}
							}
if($cek==1){
	
	header('location:../views/add_namabahan.php?i=data');
}else{
	$add = new akun();
	$add->add_nama_bbaku($nama,$id_akun);
	header('location:../views/pembelian_bahanbakulist.php');
}
	

?>