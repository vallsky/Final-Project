<?php
include "../model/database.php";
include "../model/function.php";

$id=$_POST['id'];
$user=$_POST['user'];
$password=md5($_POST['password']);
$status=$_POST['status'];

	$update = new user();
	$update->edit_user($user,$password,$status,$id);
	header('location:../views/user_control.php?i=sukses');

?>