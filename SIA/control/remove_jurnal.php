<?php
include "../model/database.php";
include "../model/function.php";


$id_jurnal=$_GET['id'];


	$delete = new akun();
	$delete->delete_jurnal($id_jurnal);
	
	header('location:../views/show_jurnal1.php');


?>