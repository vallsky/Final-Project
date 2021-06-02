<?php
include "../model/database.php";
session_start();
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
Cash Payment
<form action="../control/input_transaksi1.php" method="post">
<table>
<tr><Td>Date</td><td> <input type="date" name="date" value="<?php print $tahun;?>-01-01" required="required"/></td></tr>
<tr><td>Description</td><td> <textarea name="ket"   required="required"/> </textarea> </td>
<tr><td>Saldo</td><td><input type="number" name="saldo" required="required"/></td><td></td></tr>
<tr><td colspan=2><input type="Submit" value="Save" /></td></tr>
</table>
</form>
<Br>


Kredit Payment
<form action="../control/proses_pembelian1.php" method="post">
<tr><Td>Date</td><td> <input type="date" name="date" value="<?php print $tahun;?>-01-01" required="required"/></td></tr>
<tr><td>Description</td><td> <textarea name="ket"   required="required"/> </textarea> </td>
<tr><td>Saldo</td><td><input type="number" name="saldo" required="required"/></td><td></td></tr>
<tr><td>Supplier :</td><td> 
<select name="id_sup">
<?php
foreach($tes2 as $m){
?>
<option value="<?php print $m['id_sup']; ?>"><?php print $m['nama_supplier']; ?></option>
<?php
}
?>
</select></td></tr>
<tr><td colspan=2><input type="Submit" value="Progress" /></td></tr>


</form>
<?php
}else{
header('location:../../index.php?i=login');
}
?>