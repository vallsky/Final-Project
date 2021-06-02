<?php
include "../model/database.php";
include "../model/function.php";

$id=$_GET['id'];


	$delete = new user();
	$delete->remove_user($id);
	
	header('location:../views/user_control.php');


?>