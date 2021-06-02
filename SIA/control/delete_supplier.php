<?php
include "../model/database.php";
include "../model/function.php";


$id=$_POST['id'];

	$update = new akun();
	$update->delete_sup($id);
	header('location:../views/list_supplier.php');

?>