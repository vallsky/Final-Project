<?php
include "../model/database.php";
include "../model/function.php";

$nama=$_POST['nama'];
$id=$_POST['id'];

	$update = new akun();
	$update->edit_sup($id,$nama);
	header('location:../views/list_supplier.php');

?>