<?php
include "../model/database.php";
include "../model/function.php";


$id=$_GET['id'];


	$delete = new akun();
	$delete->delete_bbaku($id);
	
	header('location:../views/list_bahanbaku.php');


?>