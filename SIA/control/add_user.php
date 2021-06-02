<?php
include "../model/database.php";
include "../model/function.php";

$user=$_POST['user'];
$password=md5($_POST['password']);
$status=$_POST['status'];


	$add = new user();
	$add->add_user($user,$password,$status);
	
	header('location:../views/add_user.php?i=sukses');

?>