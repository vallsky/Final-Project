<?php
include "../model/database.php";
include "../model/function.php";


$id=$_GET['id'];


	$delete = new akun();
	$delete->delete_produksi($id);
	
	header('location:../views/produksi.php');


?>