<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";

$nama=$_POST['nama'];
$qty=$_POST['qty'];
$tgl=$_POST['tgl'];


	$add = new akun();
	$add->add_req_pembelian($nama,$qty,$tgl);
	header('location:../views/list_req_pembelian.php');

?>