<?php
include "../model/database.php";
include "../model/function.php";

$username=$_POST['id'];
$pass=$_POST['pas'];

	$checking = new user();
	$checking->login($username,$pass);

?>