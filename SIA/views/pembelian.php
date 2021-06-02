<?php
include "../model/database.php";
session_start();
$id=$_GET['id'];
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$tahun=0;
$tes1=$akun->get_tahun();
$tes2=$akun->supllier();
foreach($tes1 as $m){
$tahun+=$m['tahun'];
}
if(!empty($_SESSION['user']))
{
?>
<a href="home.php">home</a><Br>
Cash Payment
<form action="../control/proses_pembelian.php" method="post">
Tanggal : <input type="date" name="tgl" value="<?php print $tahun;?>-01-01" required="required"/><br>
<input type="hidden" name="id" value="<?php print $id; ?>" required="required"/>
<input type="Submit" value="Progress" />
</form>
<Br>
Kredit Payment
<form action="../control/proses_pembelian1.php" method="post">
Tanggal : <input type="date" name="tgl" value="<?php print $tahun;?>-01-01" required="required"/><br>
<input type="hidden" name="id" value="<?php print $id; ?>" required="required"/>
Supplier : 
<select name="id_sup">
<?php
foreach($tes2 as $m){
?>
<option value="<?php print $m['id_sup']; ?>"><?php print $m['nama_supplier']; ?></option>
<?php
}
?>
</select>
<input type="Submit" value="Progress" />
</form>
<?php
}else{
header('location:../../index.php?i=login');
}
?>