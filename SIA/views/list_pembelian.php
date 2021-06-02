<?php
include "../model/database.php";
session_start();
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$tes1=$akun->get_all_pembelian();

if(!empty($_SESSION['user']))
{
?>
<a href="home.php">home</a>
<Table border=1>
<Tr>
<th>Tanggal</th>
<th>Keterangan</th>
<th>Harga Pembelian</th>
<th>Status</th>
<th>Aksi</th>
</tr>
<?php foreach($tes1 as $m){
?>
<Tr>
<Td> <?php print $m['tgl']; ?> </td>
<Td> <?php print $m['ket']; ?> </td>
<Td> <?php print $m['harga_beli']; ?> </td>
<Td> <?php print $m['status_pembelian']; ?> </td>
<?php
if($m['status_pembelian']=="Proses"){
?>
<Td><a href="pembelian.php?id=<?php print $m['id_pembelian']; ?>">Proses Now</a> </td>
<?php
}
else{
?>
<Td>Complete</td>
<?php
}
?>

</tr>
<?php
} 
?>
<?php
}else{
header('location:../../index.php?i=login');
}
?>