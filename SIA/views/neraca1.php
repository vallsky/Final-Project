<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$periode=$_POST['periode'];
session_start();
$sa=0;
$sd=0;
$sc=0;
if(!empty($_SESSION['user']))
{
?>



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTEM INFORMASI ACCOUNTING </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

<body class="nav-md">
   
     
        

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
             

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  
                  
                    
                    <li><a href="home.php">Back To Home</a></li>
                  
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
		
       
		
        

            <div class="clearfix"></div>

            <div class="row">
			
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> NERACA   TAHUN <?php print $periode; ?> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
          <Table>
<Tr>
<Th><Table>
<tr>
<td colspan=2><B>Aktiva Lancar</b></td>
</tr>
<?php
$status1=1;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['nama'] ;?></td>
<?php
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];

}
$tempd+=$debet;
$tempc+=$credit;
}
?>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td></td>
<Td><u> ------------------------</td>
<Td></td>
</tr>
<tr>
<Td><b>TOTAL AKTIVA LANCAR</b></td>
<Td><b></td>
<Td><b><U><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); $al=$saldo_awal+$tempd-$tempc; ?></b></td>
</tr>

<tr>
<td colspan=2><B>Aktiva Tetap</b></td>
</tr>
<?php
$status1=12;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>

<td><?php print $m['nama'] ;?></td>

<?php
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];

}
$tempd+=$debet;
$tempc+=$credit;
}
?>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td></td>
<Td><u> ------------------------</td>
<Td></td>
</tr>
<tr>
<Td colspan=2><b>TOTAL AKTIVA TETAP</b></td>
<Td><b><u><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); $at=$saldo_awal+$tempd-$tempc;?></b></td>
</tr>
<tr>
<Td colspan=2><b>TOTAL AKTIVA </b></td>
<Td><b><u><?php print "Rp. ".number_format($al+$at,2,",","."); ?></b></td>
</tr>
</table>
</th><Th> </th>
<Th>
<table>
<?php //Pasiva ?>
<tr>
<td colspan=3><B>PASSIVA</b></td>
</tr>
<tr>
<td colspan=3><B>Kewajiban Jangka Pendek</b></td>
</tr>
<?php
$status1=2;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['nama'] ;?></td>
<?php
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];

}
$tempd+=$debet;
$tempc+=$credit;
}
?>
<td><?php print "Rp. ".number_format($m['saldo']-$debet+$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td></td>
<Td><u> ------------------------</td>
<Td></td>
</tr>
<tr>
<Td colspan=2><b>TOTAL Kewajiban Jangka Pendek</b></td>
<Td><b><u><?php print "Rp. ".number_format($saldo_awal-$tempd+$tempc,2,",","."); $utang=$saldo_awal-$tempd+$tempc; ?></b></td>
</tr>


<?php  //Modal ?>
<tr>
<td colspan=3><B>MODAL</b></td>
</tr>
<?php
$modal=0;
$status1=3;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
if($m['kode_akun']==10100){
?>
<tr>
<td><?php print $m['nama'].''; //modal akhir ?></td>
<?php
}else{
?>
<tr>
<td><?php print $m['nama'];?></td>
<?php
}
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];

}
$tempd+=$debet;
$tempc+=$credit;
}
if($m['kode_akun']==10200){
?>
<td><?php print "Rp. ".number_format(0,2,",","."); $prive=$m['saldo']-$debet+$credit;   ?></td>
<?php
}else{
?>
<td><?php print "Rp. ".number_format($m['saldo']-$debet+$credit,2,",","."); $modal+=$m['saldo']-$debet+$credit; ?></td>
</tr>
<?php
}
}
?>

<?php
$status1=4;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
$penjualan=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
$penjualan+=$m['saldo']-$debet+$credit;
}
//hpp
?>
<?php
$wipakhir="";
$wipawal="";
$pawal="";
$pakhir="";
$aset=$akun->get_akun_list();
foreach($aset as $m){
if($m['status']=="1"){
if($m['id_akun']=="24"){
$wipawal+=$m['saldo'];
}
}
}
foreach($aset as $m){
if($m['status']=="1"){
if($m['id_akun']=="25"){
$pawal+=$m['saldo'];
}
}
}
//wip awal dan persediaan awal
//wip
$id_wip="24";
$tes=$akun->get_buku_besar($id_wip,$periode);
$tes3=$akun->get_jurnal_buku_besar($id_wip,$periode);
$saldo_awal=0;
foreach($tes as $m){
$saldo_awal+=$m['saldo'];
}			
							$d=0;
							$c=0;
							if(!empty($tes3)){
							foreach($tes3 as $m){
							 $d+=$m['debet'];
							 $c+=$m['credit']; 
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							}
							}
							$wipakhir+=$saldo_awal;
//persediaan
$id_p="25";
$tes=$akun->get_buku_besar($id_p,$periode);
$tes3=$akun->get_jurnal_buku_besar($id_p,$periode);
$saldo_awal=0;
foreach($tes as $m){
$saldo_awal+=$m['saldo'];
}			
							$d=0;
							$c=0;
							if(!empty($tes3)){
							foreach($tes3 as $m){
							 $d+=$m['debet'];
							 $c+=$m['credit']; 
							 
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							}
							}
							$pakhir+=$saldo_awal;
//end	

$status1=5;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
$saldo_akhir=0;
$hpp=0;
$bop=0;
foreach($tes1 as $m){
if($m['kode_akun']==10300){
$saldo_awal-=$m['saldo'];
}
else{
$saldo_awal+=$m['saldo'];
}
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
if($m['kode_akun']==10300){
$tempd-=$debet;
$tempc-=$credit;
}else{
$tempd+=$debet;
$tempc+=$credit;
}
}
if($m['kode_akun']==20200){
$hpp+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==10400){
$hpp+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==20500){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==20700){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==21400){
$bop+=$m['saldo']+$debet-$credit;
}
else if($m['kode_akun']==29900){
$bop+=$m['saldo']+$debet-$credit;
}
}
$hppfix=$pawal+$bop+$hpp+$wipawal-$wipakhir-$pakhir;
//hpp
?>
<?php

 $labakotor=$penjualan-$hppfix;


$status1=6;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
}
$biayaumumadm=$saldo_awal+$tempd-$tempc;

$status1=7;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
}
 $penghasilanlainlain=$saldo_awal+$tempd-$tempc;
 $labasebelumpajak=$labakotor-$penghasilanlainlain-$biayaumumadm;
$status1=8;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
$id_akun=$m['id_akun'];
$debet=0;
$credit=0;
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
if(!empty($tes3)){
foreach($tes3 as $mm){
$debet+=$mm['debet'];
$credit+=$mm['credit'];
}
$tempd+=$debet;
$tempc+=$credit;
}
 $pajak=$m['saldo']+$debet-$credit; 
}
 ?>
<tr>
<Td><B>Laba / Rugi Bersih Setelah Pajak</td>
<Td><b><?php $lababersih=$labasebelumpajak-$pajak+$prive; print "Rp. ".number_format($lababersih,2,",","."); ?></b></td>
</tr>
<tr>
<Td></td>
<Td><u> ------------------------</td>
<Td></td>
</tr>
<tr>
<Td COLSPAN=2><b>Modal Akhir</td>
<Td><b><U><?php  print "Rp. ".number_format($modal+$lababersih,2,",","."); $ma=$modal+$lababersih;?></b></td>
</tr>
<tr>
<Td colspan=2 ><b>TOTAL PASSIVA </b></td>
<Td><b><u><?php print "Rp. ".number_format($ma+$utang,2,",","."); ?></b></td>
</tr>
</Table></th>
</tr>
 </table>
                  </div>
                </div>
              </div>
              </div>
	</div>

        <!-- /page content -->

       
	
  <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#data').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
<?php
}else{
header('location:../../index.php?i=login');
}
?>