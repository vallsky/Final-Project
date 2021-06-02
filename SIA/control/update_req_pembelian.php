<?php
include "../model/database.php";
include "../model/function.php";

$id=$_GET['id'];

	$update = new akun();
	$update->update_req_pembelian($id);
	header('location:../views/list_req_pembelian.php');

?>