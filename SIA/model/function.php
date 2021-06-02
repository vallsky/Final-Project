<?php

class akun{

function tampil(){
$sql=mysql_query("select *from userid");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}

function tampil_namabahan(){
$sql=mysql_query("select *from bahan_baku");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function list_req(){
$sql=mysql_query("select *from req_pembelian");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function list_pengiriman(){
$sql=mysql_query("select *from pengiriman a,pesanan b ,customer c where a.id_pesanan=b.id_pesanan and c.id_cust=a.id_cust");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function customer_detail($id){
$sql=mysql_query("select *from customer where id_cust='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function supllier(){
$sql=mysql_query("select *from supplier");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function customer(){
$sql=mysql_query("select *from customer");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function edit_supllier($id){
$sql=mysql_query("select *from supplier where id_sup='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function edit_customer($id){
$sql=mysql_query("select *from customer where id_cust='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function get_id_jurnal(){
$sql=mysql_query("SELECT MAX(id_jurnal) as id_jurnal from jurnal");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_id_periode(){
$sql=mysql_query("SELECT MAX(id_periode) as id_periode from periode");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_tahun(){
$sql=mysql_query("SELECT MAX(tahun) as tahun from periode");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_tahun1(){
$sql=mysql_query("SELECT tahun as tahun from periode");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_id_akun(){
$sql=mysql_query("SELECT MAX(id_akun) as id_akun from akun");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_akun_list(){
$sql=mysql_query("SELECT *from akun a,saldo b where a.id_akun=b.id_akun order by a.id_akun");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_akun_list_single($id_akun){
$sql=mysql_query("SELECT *from akun a,saldo b where a.id_akun=b.id_akun and a.id_akun='$id_akun'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_relasi(){
$sql=mysql_query("SELECT *from relasi_akun");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_relasi_single($id){
$sql=mysql_query("SELECT *from relasi_akun where id_relasi='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}

function get_isi_relasi($id){
$sql=mysql_query("SELECT * from isi_relasi_akun a,akun b , saldo c where b.id_akun=c.id_akun and a.id_relasi='$id' and a.id_akun=b.id_akun order by a.id_relasi_akun");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_jurnal($year,$bulan){
$sql=mysql_query("SELECT * FROM jurnal WHERE YEAR(tgl)='$year' and MONTH(tgl)='$bulan' order by tgl desc");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_isi_jurnal($id_jurnal){
$sql=mysql_query("SELECT * from isi_jurnal a,akun b where a.id_jurnal='$id_jurnal' and a.id_akun=b.id_akun");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_status_akun($id){
$sql=mysql_query("SELECT *from akun where id_akun='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_buku_besar($id,$year){
$sql=mysql_query("SELECT *from buku_besar a,periode b where a.id_periode=b.id_periode and a.id_akun='$id' and b.tahun='$year' ");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_all_buku_besar($year){
$sql=mysql_query("SELECT *from buku_besar a,periode b where a.id_periode=b.id_periode and b.tahun='$year' ");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_jurnal_buku_besar($id_akun,$year){
$sql=mysql_query("SELECT *from jurnal a,isi_jurnal b where a.id_jurnal=b.id_jurnal and b.id_akun='$id_akun' and YEAR(a.tgl)='$year' order by a.tgl asc ");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}
function get_all_neraca_saldo($year,$status){
$sql=mysql_query("SELECT *from akun_a a,periode b,akun c where a.id_akun=c.id_akun and a.id_periode=b.id_periode and b.tahun='$year' and c.status='$status'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)) {
return $data;
}
}

function list_order(){
$sql=mysql_query("select *from pesanan a,customer b where a.customer=b.id_cust");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}

function list_order_selling(){
$sql=mysql_query("select *from pesanan where status_pesanan='Complete'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function list_order_pending(){
$sql=mysql_query("select *from pesanan where status_pesanan='Pending'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function list_order_single($id){
$sql=mysql_query("select *from pesanan where id_pesanan='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
return $data;
}
function get_pembelian($id){
$sql=mysql_query("select *from pembelian where id_pesanan='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function get_input_pembelian($id){
$sql=mysql_query("select *from pembelian a,pesanan b where a.id_pembelian='$id' and a.id_pesanan=b.id_pesanan");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function get_produksi_pesanan($id){
$sql=mysql_query("select *from pembelian a,pesanan b where b.id_pesanan='$id' and a.id_pesanan=b.id_pesanan");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function get_all_pembelian(){
$sql=mysql_query("select *from pembelian a,pesanan b where a.id_pesanan=b.id_pesanan ");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function delete_jurnal($id){
					include "../model/database.php";
					mysqli_query($con, "delete from jurnal where id_jurnal='$id'");
					mysqli_query($con, "delete from isi_jurnal where id_jurnal='$id'");
				}
				function delete_produksi($id){
					include "../model/database.php";
					mysqli_query($con, "delete from produksi where id_produksi='$id'");
				}
				function delete_bbaku($id){
					include "../model/database.php";
					mysqli_query($con, "delete from bahan_baku where id_bahanbaku='$id'");
				}
				function delete_sup($id){
					include "../model/database.php";
					mysqli_query($con, "delete from supplier where id_sup='$id'");
				}
				function delete_cus($id){
					include "../model/database.php";
					mysqli_query($con, "delete from customer where id_cust='$id'");
				}
				
				function delete_order($id){
					include "../model/database.php";
					mysqli_query($con, "delete from pesanan where id_pesanan='$id'");
				}
				function delete_persediaan($id){
					include "../model/database.php";
					mysqli_query($con, "delete from persediaan where id_persediaan='$id'");
				}

		function delete_akun($id){
					include "../model/database.php";
					mysqli_query($con, "delete from akun where id_akun='$id'");
					mysqli_query($con, "delete from saldo where id_akun='$id'");
					mysqli_query($con, "delete from buku_besar where id_akun='$id'");
					mysqli_query($con, "delete from akun_a where id_akun='$id'");
						
				}
				function delete_isi_relasi($id,$id_relasi){
					include "../model/database.php";
					mysqli_query($con, "delete from isi_relasi_akun where id_akun='$id' and id_relasi='$id_relasi'");
					
						
				}
				function delete_relasi($id_relasi){
					include "../model/database.php";
					mysqli_query($con, "delete from relasi_akun where  id_relasi='$id_relasi'");
					mysqli_query($con, "delete from isi_relasi_akun where  id_relasi='$id_relasi'");
				}
				
function update_saldo_cust($id,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update customer set saldo='$saldo' where id_cust='$id'");
			
		}
				
function update_saldo($id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update saldo set saldo='$saldo' where id_akun='$id_akun'");
			
		}

function edit_akun($id_akun,$nama,$kode,$status){
			include "../model/database.php";
			mysqli_query($con, "update akun set nama='$nama',kode_akun='$kode',status='$status' where id_akun='$id_akun'");
			
		}
function edit_saldo($id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update saldo set saldo='$saldo' where id_akun='$id_akun'");
			
		}	
function edit_akun_a($id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update akun_a set saldo='$saldo' where id_akun='$id_akun'");
			
		}	
function edit_sup($id,$nama){
			include "../model/database.php";
			mysqli_query($con, "update supplier set nama_supplier='$nama' where id_sup='$id'");
			
		}

		function edit_cus($id,$nama){
			include "../model/database.php";
			mysqli_query($con, "update customer set nama_customer='$nama' where id_cust='$id'");
			
		}	
		
function edit_sup1($id,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update supplier set saldo='$saldo' where id_sup='$id'");
			
		}	
		
function edit_buku_besar($id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con, "update buku_besar set saldo='$saldo' where id_akun='$id_akun'");
			
		}	

function add_isi_relasi($id_akun,$id_relasi,$posisi){
			include "../model/database.php";
			mysqli_query($con,"insert into isi_relasi_akun( id_relasi,id_akun,posisi )VALUES ('$id_relasi','$id_akun','$posisi')");
				
		}
function edit_pembelian($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update pembelian set status_pembelian='$status' where id_pembelian='$id'");
			
		}
function edit_produksi($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set status_pesanan='$status' where id_pesanan='$id'");
			
		}
		
function add_relasi($relasi){
			include "../model/database.php";
			mysqli_query($con,"insert into relasi_akun( nama_relasi )VALUES ('$relasi')");
				
		}
function add_akun($nama,$kode,$status){
			include "../model/database.php";
			mysqli_query($con,"insert into akun( nama,kode_akun,status )VALUES ('$nama','$kode','$status')");
				
		}
function add_sup($nama,$id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con,"insert into supplier( nama_supplier,id_akun,saldo )VALUES ('$nama','$id_akun','$saldo')");
		}
function add_cust($nama,$id_akun,$saldo){
			include "../model/database.php";
			mysqli_query($con,"insert into customer( nama_customer,id_akun,saldo )VALUES ('$nama','$id_akun','$saldo')");
		}
function saldo($idakun,$saldo){
			include "../model/database.php";
			mysqli_query($con,"insert into saldo( id_akun,saldo )VALUES ('$idakun','$saldo')");
				
		}		
function add_akun_a($idakun,$saldo,$idperiode){
			include "../model/database.php";
			mysqli_query($con,"insert into akun_a( id_akun,saldo,id_periode )VALUES ('$idakun','$saldo','$idperiode')");
				
		}
function add_buku_besar($idakun,$saldo,$idperiode){
			include "../model/database.php";
			mysqli_query($con,"insert into buku_besar( id_akun,saldo,id_periode )VALUES ('$idakun','$saldo','$idperiode')");
				
		}
function add_jurnal($date,$ket,$jenis){
			include "../model/database.php";
			mysqli_query($con,"insert into jurnal( tgl,ket,jenis_jurnal )VALUES ('$date','$ket','$jenis')");
				
		}
function add_isi_jurnal($id_jurnal,$debet,$credit,$id_akun){
			include "../model/database.php";
			mysqli_query($con,"insert into isi_jurnal( id_jurnal,debet,credit,id_akun )VALUES ('$id_jurnal','$debet','$credit','$id_akun')");
				
		}
function add_order($tgl,$ket,$hargajual,$qty,$status,$customer){
			include "../model/database.php";
			mysqli_query($con,"insert into pesanan( tgl,ket,harga_jual,qty,status_pesanan,customer )VALUES ('$tgl','$ket','$hargajual','$qty','$status','$customer')");
				
		}
function add_pembelian($ket,$hargabeli,$id,$status){
			include "../model/database.php";
			mysqli_query($con,"insert into pembelian( ket,harga_beli,id_pesanan,status_pembelian )VALUES ('$ket','$hargabeli','$id','$status')");
				
		}
		

function check_akun($id_akun){
include "../model/database.php";
						$sql="select * from isi_jurnal where id_akun='$id_akun' ";
						$query =mysqli_query($con,$sql);
						$cek=mysqli_num_rows($query);
						return $cek;
						
}

//--- Produksi METHOD

function verify($id){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set status_pesanan='Pending' where id_pesanan='$id'");
			
		}	
function upt_qty($id,$qty){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set qty='$qty' where id_pesanan='$id'");
		}

function get_produksi(){
$sql=mysql_query("select *from  produksi a,pesanan b where a.id_pesanan=b.id_pesanan");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function get_dt_produksi($id){
$sql=mysql_query("select *from  produksi a,pesanan b where a.id_pesanan=b.id_pesanan and a.id_produksi='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function get_isi_produksi($id){
$sql=mysql_query("select a.qty,b.nama_bahan from  isi_produksi a,bahan_baku b where a.id_bahanbaku=b.id_bahanbaku and a.id_produksi='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function get_isi_produksi_dt($id_produksi){
$sql=mysql_query("select ( a.qty *harga_satuan) as total from  isi_produksi a,isi_bahan_baku b where a.id_bahanbaku=b.id_bahanbaku and a.id_produksi='$id_produksi'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function add_produksi($tgl,$id_pesanan,$status){
			include "../model/database.php";
			mysqli_query($con,"insert into produksi( id_pesanan,status_produksi,tgl_produksi)VALUES ('$id_pesanan','$status','$tgl')");
				
		}
function add_persediaan($nama,$hpp,$id_akun){
			include "../model/database.php";
			mysqli_query($con,"insert into persediaan ( nama_produk,hpp,id_akun)VALUES ('$nama','$hpp','$id_akun')");
				
		}
		
		function add_periode($tgl){
			include "../model/database.php";
			mysqli_query($con,"insert into periode( tahun )VALUES ('$tgl')");
				
		}
		
		function add_req_pembelian($nama,$qty,$tgl){
			include "../model/database.php";
			mysqli_query($con,"insert into req_pembelian ( nama_barang,qty_barang,tanggal_req,status)VALUES ('$nama','$qty','$tgl','Pending')");
				
		}
		function add_pengiriman($idp,$stat,$idc){
			include "../model/database.php";
			mysqli_query($con,"insert into pengiriman (id_pesanan,status_pengiriman,id_cust,tgl_pengiriman)VALUES ('$idp','$stat','$idc','')");
				
		}
		
		function update_pengiriman($id,$tgl){
			include "../model/database.php";
			mysqli_query($con, "update pengiriman set tgl_pengiriman='$tgl',status_pengiriman='Delivered' where id_pengiriman='$id'");
			
		}	
		function update_req_pembelian($id){
			include "../model/database.php";
			mysqli_query($con, "UPDATE req_pembelian SET status = 'Done' WHERE id_req_pembelian = '$id'");
			
		}	
		
function get_persediaan(){
$sql=mysql_query("select *from persediaan");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function get_persediaan_single($id){
$sql=mysql_query("select *from persediaan where id_persediaan='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}


function add_isi_produksi($id_bahanbaku,$qty,$id_produksi,$ht){
			include "../model/database.php";
			mysqli_query($con,"insert into isi_produksi( id_bahanbaku,qty,id_produksi,harga_total)VALUES ('$id_bahanbaku','$qty','$id_produksi','$ht')");
				
		}
function get_bbaku_detail($id){
$sql=mysql_query("select *from bahan_baku where id_bahanbaku='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function update_qty($id_bahanbaku,$qty,$hs){
			include "../model/database.php";
			mysqli_query($con, "update isi_bahan_baku set qty='$qty',harga_total='$hs' where id_isi_bahanbaku='$id_bahanbaku'");
			
		}	
		
function update_statprod($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update produksi set status_produksi='$status' where id_produksi='$id'");
		}	
		function update_statpes($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set status_pesanan='$status' where id_pesanan='$id'");
		}
		function update_hrgpes($id,$hrg){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set harga_jual='$hrg' where id_pesanan='$id'");
		}
//--- Produksi METHOD

//--- Bahan BAKU METHOD
function add_b_baku($nama,$qty,$harga_satuan,$harga_total,$tgl){
			include "../model/database.php";
			mysqli_query($con,"insert into isi_bahan_baku( id_bahanbaku,qty,harga_satuan,harga_total,tgl_beli)VALUES ('$nama','$qty','$harga_satuan','$harga_total','$tgl')");			
		}	
		function add_nama_bbaku($nama,$id_akun){
			include "../model/database.php";
			mysqli_query($con,"insert into bahan_baku( id_akun,nama_bahan )VALUES ('$id_akun','$nama')");			
		}	
	//	function edit_produksi($id,$status){
	//		include "../model/database.php";
	//		mysqli_query($con, "update pesanan set status_pesanan='$status' where id_pesanan='$id'");
//			
//		}
	//	function delete_relasi($id_relasi){
	//				include "../model/database.php";
	//				mysqli_query($con, "delete from relasi_akun where  id_relasi='$id_relasi'");
	//				mysqli_query($con, "delete from isi_relasi_akun where  id_relasi='$id_relasi'");			
	//			}
function get_list_b_baku(){
$sql=mysql_query("select *from bahan_baku");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}


//--- Bahan BAKU METHOD

function get_b_baku($id){
$sql=mysql_query("select *from isi_bahan_baku where id_bahanbaku='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}


function get_data_bbaku($id){
$sql=mysql_query("select *from isi_bahan_baku a,bahan_baku b where b.id_bahanbaku='$id' and a.id_bahanbaku=b.id_bahanbaku");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

}

class produksi{

function add_isi_produksi($id_bahanbaku,$qty,$id_produksi){
			include "../model/database.php";
			mysqli_query($con,"insert into isi_produksi( id_bahanbaku,qty,id_produksi)VALUES ('$id_bahanbaku','$qty','$id_produksi')");
				
		}
function get_bbaku_detail($id){
$sql=mysql_query("select *from bahan_baku where id_bahanbaku='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}

function update_qty($id_bahanbaku,$qty,$hs){
			include "../model/database.php";
			mysqli_query($con, "update isi_bahan_baku set qty='$qty',harga_total='$hs' where id_bahanbaku='$id_bahanbaku'");
			
		}	
		
function update_statprod($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update produksi set status_produksi='$status' where id_produksi='$id'");
		}	
		function update_statpes($id,$status){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set status_pesanan='$status' where id_pesanan='$id'");
		}
		function update_hrgpes($id,$hrg){
			include "../model/database.php";
			mysqli_query($con, "update pesanan set harga_jual='$hrg' where id_pesanan='$id'");
		}
//--- Produksi METHOD

}
class pembelian{
//--- Bahan BAKU METHOD
function add_b_baku($id_akun,$nama,$qty,$harga_satuan,$harga_total){
			include "../model/database.php";
			mysqli_query($con,"insert into bahan_baku( id_akun,nama_bahan,qty,harga_satuan,harga_total )VALUES ('$id_akun','$nama','$qty','$harga_satuan','$harga_total')");			
		}	
	//	function edit_produksi($id,$status){
	//		include "../model/database.php";
	//		mysqli_query($con, "update pesanan set status_pesanan='$status' where id_pesanan='$id'");
//			
//		}
	//	function delete_relasi($id_relasi){
	//				include "../model/database.php";
	//				mysqli_query($con, "delete from relasi_akun where  id_relasi='$id_relasi'");
	//				mysqli_query($con, "delete from isi_relasi_akun where  id_relasi='$id_relasi'");			
	//			}
function get_list_b_baku(){
$sql=mysql_query("select *from bahan_baku");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
//--- Bahan BAKU METHOD
}

class penjualan{
function get_pembelian($id){
$sql=mysql_query("select *from pembelian where id_pesanan='$id'");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
function get_input_pembelian($id){
$sql=mysql_query("select *from pembelian a,pesanan b where a.id_pembelian='$id' and a.id_pesanan=b.id_pesanan");
while($m=mysql_fetch_array($sql))
$data[]=$m;
if(!empty($data)){
return $data;
}
}
}

class user{
function login($user,$pass){
			include "../model/database.php";
			$status='';
					if(!empty($user) and !empty($pass)){
						$sql="select * from userid where user='$user' and password=md5('$pass') ";
						$query =mysqli_query($con,$sql);
						$cek=mysqli_num_rows($query);
						
						if($cek>0){
							
								session_start();
							while ($m = mysqli_fetch_array($query))
								{
									$username = $m['user'];
									$pass = $m['password'];
									$status=$m['status'];
								}
							$_SESSION['user']=$user;
							$_SESSION['password']=$pass;
							$_SESSION['status']=$status;
							header('location:../views/home.php');
							
							}
							else{
							header('location:../index.php?i=salah');
							}
						}
						else{
							header('location:../index.php?i=gagal');
				}
		}
	function add_user($user,$password,$status){
			include "../model/database.php";
			mysqli_query($con,"insert into userid ( user,password,status )VALUES ('$user','$password','$status')");
			
				
		}	
		function show_user(){
			$sql=mysql_query("select *from userid");
			while($m=mysql_fetch_array($sql))
			$data[]=$m;
			return $data;
		}
		function for_edit($id){
			$sql=mysql_query("select *from userid where id_user='$id'");
			while($m=mysql_fetch_array($sql))
			$data[]=$m;
			return $data;
		}


		function remove_user($id){
					include "../model/database.php";
					mysqli_query($con, "delete from userid where id_user='$id'");
						
				}
		function edit_user($user,$password,$status,$id){
			include "../model/database.php";
			mysqli_query($con, "update userid set user='$user',password='$password',status='$status' where id_user='$id'");
			
				
		}

}

?>