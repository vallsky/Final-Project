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
                    <h2> Neraca Saldo <Br> Dari Tanggal 01-01-<?php print $periode; ?> s/d 31-12-<?php print $periode; ?> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="data" class="table table-striped table-bordered datatable">
                      <thead>
                        <Tr>
						<TH ALIGN=CENTER>KODE</th>
						<TH ALIGN=CENTER>NAMA PERKIRAAN</th>
						<Th ALIGN=CENTER>SALDO AWAL</th>
						<Th align=center COLSPAN=2>MUTASI</th>
						<Th ALIGN=CENTER>SALDO AKHIR</th>
						</tr>
						<Tr>
						<TH ALIGN=CENTER></th>
						<TH ALIGN=CENTER></th>
						<Th ALIGN=CENTER></th>
						<Th ALIGN=CENTER>DEBET</th>
						<Th ALIGN=CENTER>KREDIT</th>
						<TH></TH>
						</tr>
                      </thead>


                      <tbody>
						<tr>
<td colspan=6><B>Aktiva Lancar</b></td>
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
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Aktiva Lancar</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa+=$saldo_awal;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Aktiva Tetap</b></td>
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
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Aktiva Tetap</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa+=$saldo_awal; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",",".");$sd+=$tempd; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Kewajiban Jangka Pendek</b></td>
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
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']-$debet+$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Kewajiban Jangka Pendek</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",",".");  $sa-=$saldo_awal;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal-$tempd+$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Modal</b></td>
</tr>
<?php
$status1=3;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']-$debet+$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Modal</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa-=$saldo_awal;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal-$tempd+$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Penjualan</b></td>
</tr>
<?php
$status1=4;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']-$debet+$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Penjualan</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa-=$saldo_awal; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal-$tempd+$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Harga Pokok Penjualan</b></td>
</tr>
<?php
$status1=5;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Harga Pokok Penjualan</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",",".");$sa+=$saldo_awal; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",",".");  $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Biaya Umum & Administrasi</b></td>
</tr>
<?php
$status1=6;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Biaya Umum & Administrasi</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa+=$saldo_awal;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Penghasilan (Beban) Lain-Lain</b></td>
</tr>
<?php
$status1=7;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Penghasilan (Beban) Lain-Lain </td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa+=$saldo_awal; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd; ?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td colspan=6><B>Pajak</b></td>
</tr>
<?php
$status1=8;
$tes1=$akun->get_all_neraca_saldo($periode,$status1);
$saldo_awal=0;
$tempd=0;
$tempc=0;
foreach($tes1 as $m){
$saldo_awal+=$m['saldo'];
?>
<tr>
<td><?php print $m['status'].$m['kode_akun'] ;?></td>
<td><?php print $m['nama'] ;?></td>
<td><?php print "Rp. ".number_format($m['saldo'],2,",",".");  ?></td>
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
<td><?php print "Rp. ".number_format($debet,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($credit,2,",",".");  ?></td>
<td><?php print "Rp. ".number_format($m['saldo']+$debet-$credit,2,",","."); ?></td>
</tr>
<?php
}
?>
<tr>
<Td><b>TOTAL</b></td>
<Td><b>Pajak</td>
<Td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); $sa+=$saldo_awal;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempd,2,",","."); $sd+=$tempd;?></b></td>
<Td><b><?php print "Rp. ".number_format($tempc,2,",","."); $sc+=$tempc;?></b></td>
<Td><b><?php print "Rp. ".number_format($saldo_awal+$tempd-$tempc,2,",","."); ?></b></td>
</tr>

<tr>
<td align=center colspan=2><b>GRAND TOTAL</B></td>
<td><?php print "Rp. ".number_format($sa,2,",","."); ?></td>
<td><?php print "Rp. ".number_format($sd,2,",","."); ?></td>
<td><?php print "Rp. ".number_format($sc,2,",","."); ?></td>
<td><?php print "Rp. ".number_format($sa+$sd-$sc,2,",","."); ?></td>
</tr>
                      
                      </tbody>
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