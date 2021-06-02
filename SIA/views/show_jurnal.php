<?php
include "../model/database.php";
session_start();
include "../model/database2.php";
include "../model/function.php";
$db=new database();
$db->con();
$akun=new akun();
$year=$_POST['periode'];
$bulan=$_POST['bulan'];
$tes1=$akun->get_jurnal($year,$bulan);

$a=0;
$b=0;
if(!empty($_SESSION['user']))
{

?>

<script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this jurnal?");
if (del==true){
   alert ("jurnal deleted")
}
return del;
}
</script>
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
                    <h2>Jurnal</h2>
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
						<th>No Jurnal</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Perkiraan</th>
						<th>Nama Akun</th>
						<th>Debet</th>
						<th>Kredit</th>
						</tr>
                      </thead>


                      <tbody>
						
<?php 
if(!empty($tes1)){
foreach($tes1 as $m){ 
$total=0;
$total*=0;

?>
<tr>
<td ><?php print $m['jenis_jurnal'].'/'.$m['id_jurnal']; ?></td>
<td><?php print $m['tgl']; ?></td>
<td><?php print $m['ket']; ?></td>
<td></td>
<td></td>
<td></td><td></td>
</tr>
<?php
$id_jurnal=$m['id_jurnal'];
$tes2=$akun->get_isi_jurnal($id_jurnal);
 foreach($tes2 as $m){
 $total+=$m['debet'];
?>
<Tr>
<td></td>
<td></td>
<td></td>
<td><?php print $m['status'].$m['kode_akun']; ?></td>
<td><?php print $m['nama']; ?></td>
<td><?php print "Rp. ".number_format($m['debet'],2,",","."); ?></td>
<td><?php print  "Rp. ".number_format($m['credit'],2,",","."); ?></td>
</tr>
<?php 
} 
?>
<tr>
<td align=center ><a href="../control/remove_jurnal.php?id=<?php print $id_jurnal; ?>" onclick="return deleletconfig()">X</a></td>
<td align=center colspan=4>Total</td>
<td><b><?php print "Rp. ".number_format($total,2,",",".");?></b></td><td><b><?php print "Rp. ".number_format($total,2,",",".");?></b></td>
</tr>
<tr></tr>
<tr></tr>
<?php
}}
?>
                      
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