<?php
include "../model/database.php";
include "../model/function.php";

$id=$_GET['id'];

	$update = new akun();
	$update->verify($id);
	header('location:../views/list_order.php');
	

?>