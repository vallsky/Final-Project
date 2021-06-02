<?php
include "../model/database.php";
include "../model/function.php";

$id=$_GET['id'];

print $id;

	$delete = new akun();
	$delete->delete_akun($id);
	
	header('location:../views/all_akun.php');


?>