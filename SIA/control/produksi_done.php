	<?php
include "../model/database.php";
include "../model/function.php";
include "../model/database2.php";
$db=new database();
$db->con();
$add = new akun();
$bahanbaku=$_POST['bahanbaku'];
$qty=$_POST['qty'];
$id_produksi=$_POST['id'];


$tes=$add->get_data_bbaku($bahanbaku);
$qtybbaku=0;
$hs=0;
foreach($tes as $m){
$qtybbaku+=$m['qty'];
}
if($qty>$qtybbaku){
header('location:../views/produksi_done.php?id='.$id_produksi.'&i=gagal');
}
else{
$hs=0;
$ht=0;
$tempqty+=$qty;
foreach($tes as $m){
if($m['qty']==0){
}
else{
if($tempqty !=0){
if($tempqty<=$m['qty']){
$hs=($m['qty']-$tempqty)*$m['harga_satuan'];
$newqty=$m['qty']-$tempqty;
$tempqty*=0;
$id_is=$m['id_isi_bahanbaku'];
$add->update_qty($id_is,$newqty,$hs);
$ht+=$hs;
}else if($tempqty >=$m['qty']){
$hs=($tempqty-$m['qty'])*$m['harga_satuan'];
$newqty=0;
$tempqty-=$m['qty'];
$id_is=$m['id_isi_bahanbaku'];
$add->update_qty($id_is,$newqty,$hs);
$ht+=$hs;
}
}
}
}
	$add->add_isi_produksi($bahanbaku,$qty,$id_produksi,$ht);
  header('location:../views/produksi_done.php?id='.$id_produksi);
}
			
		



?>