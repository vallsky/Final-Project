<?php
include "../model/database.php";
include "../model/function.php";


$id=$_POST['id'];

	$update = new akun();
	$update->delete_cus($id);
	header('location:../views/list_customer.php');

?>