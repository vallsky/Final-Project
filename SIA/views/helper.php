<?php
include "../model/database.php";
session_start();
if(!empty($_SESSION['user']))

{
?>

<?php
}else{
header('location:../../index.php?i=login');
}
?>

include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$id=$_GET['id'];
$tes=$akun->get_isi_relasi($id);


<form action="../control/add_user.php" method="post">
Username : <input type="text" name="user" required="required"/><br>
Password : <input type="password" name="password" required="required"/><br>
Status : <select name="status">
<option value="keuangan">Keuangan</option>
<option value="penjualan">Penjualan</option>
<option value="pembelian">Pembelian</option>
<option value="produksi">Produksi</option>
<option value="distribusi">Distribusi</option>
</select><Br>
<input type="Submit" value="Add" />
</form>

?>
 <?php
				if (isset($_GET['i']))
	{
		if ($_GET['i'] == 'gagal')
		{
			print 'Failed';
		}
		elseif ($_GET['i'] == 'sukses')
		{
			print 'Succes';
		}
		
	}
			?>