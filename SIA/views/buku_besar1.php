<?php
include "../model/database.php";
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$id_akun=$_POST['id_akun'];
$periode=$_POST['periode'];
$tes=$akun->get_buku_besar($id_akun,$periode);
$tes1=$akun->get_all_buku_besar($periode);
$tes2=$akun->get_akun_list_single($id_akun);
$tes3=$akun->get_jurnal_buku_besar($id_akun,$periode);
$nama=" ";
$kode=" ";
$status=" ";
$saldo_awal=0;
foreach($tes2 as $m){
$nama=$m['nama'];
$kode=$m['kode_akun'];
$status=$m['status'];
}
foreach($tes as $m){
$saldo_awal+=$m['saldo'];
}
session_start();


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
                    <h2>Buku Besar <Br> Dari Tanggal 01-01-<?php print $periode; ?> s/d 31-12-<?php print $periode; ?>  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="data" class="table table-striped table-bordered datatable">
                      <thead>
                        <tr>
						<th>TGL</th>
						<th>NO JURNAL</th>
						<th>KETERANGAN</th>
						<th>DEBET</th>
						<th>KREDIT</th>
						<th>SALDO</th>
						</tr>
						
                      </thead>


                      <tbody>
						<tr>
						<td colspan=6><B><?php print $status.$kode; ?></b></td>
						</tr>
						<tr>
						<td colspan=6><B><?php print $nama; ?></b></td>
						</tr>
						<tr>
						<td colspan=3 align=center><B>Saldo Awal</b></td><Td></td><Td></td><td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); ?></b></td>
						</tr>
						<?php
							$d=0;
							$c=0;
							if(!empty($tes3)){

							foreach($tes3 as $m){
							?>
							<tr>
							<td><?php print $m['tgl']; ?></td>
							<td><?php print $m['jenis_jurnal'].'/'.$m['id_jurnal']; ?></td>
							<td><?php print $m['ket']; ?></td>
							<td><?php print "Rp. ".number_format($m['debet'],2,",","."); $d+=$m['debet']; ?></td>
							<td><?php print "Rp. ".number_format($m['credit'],2,",","."); $c+=$m['credit']; ?></td>
							<Td><?php if($status==1){
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							print "Rp. ".number_format($saldo_awal,2,",",".");
							}
							else if($status==2){
							$temp=$m['credit']-$m['debet'];
							$saldo_awal+=$temp;
							print "Rp. ".number_format($saldo_awal,2,",",".");
							}
							else if($status==3){
							$temp=$m['credit']-$m['debet'];
							$saldo_awal+=$temp;
							print "Rp. ".number_format($saldo_awal,2,",",".");
							}
							else if($status==4){
							$temp=$m['credit']-$m['debet'];
							$saldo_awal+=$temp;
							print "Rp. ".number_format($saldo_awal,2,",",".");
							}
							else{
							$temp=$m['debet']-$m['credit'];
							$saldo_awal+=$temp;
							print "Rp. ".number_format($saldo_awal,2,",",".");
							}

							 ?></td>
							</tr>
							<?php
							}
							}
							?>
							
                      
                      </tbody>
					  <tr>
							<Td align=center colspan=3><b>Saldo Akhir</b></td>
							<td><b><?php print "Rp. ".number_format($d,2,",","."); ?></b></td>
							<td><b><?php print "Rp. ".number_format($c,2,",","."); ?></b></td>
							<td><b><?php print "Rp. ".number_format($saldo_awal,2,",","."); ?></b></td>
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