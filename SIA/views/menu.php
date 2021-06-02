					<ul class="nav side-menu">
					<li><a><i class="fa fa-home"></i> Menu Utama <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					<?php
					print $_SESSION['status']."<Br>";
					if($_SESSION['status']=="admin"){
					?>
					<li><a href="add_user.php">Add User</a></li>
					<li><a href="user_control.php">User Control</a></li>
					<?php
					}else if($_SESSION['status']=="keuangan"){
					?>
					<li><a href="add_akun.php">Tambah Akun</a></li>
					<li><a href="all_akun.php">Daftar Akun</a></li>
					<li><a href="input_relasi.php">Tambah Relasi</a></li>
					<li><a href="show_jurnal1.php">Jurnal</a></li>
					<li><a href="jurnal_penutup.php">Jurnal Penutup</a></li>
					<li><a href="buku_besar.php">Buku Besar</a></li>
					<li><a href="list_piutang.php">Buku Pembantu Piutang</a></li>
					<li><a href="list_utang.php">Buku Pembantu Utang</a></li>
					<li><a href="neraca_saldo.php">Neraca Saldo</a></li>
					<li><a href="input_transaksi.php">Transaksi</a></li>
					<li><a href="penerimaanpiutang.php">Terima Piutang</a></li>
					<li><a href="pembayaranutang.php">Pembayaran Utang</a></li>
					<li><a href="close_periode.php">Tutup Periode</a></li>
					<?php
					}
					else if($_SESSION['status']=="penjualan"){
					?>
					<li><a href="order.php">Pemesanan</a></li>
					<li><a href="list_order.php">Daftar Pemesanan</a></li>
					<li><a href="penjualan.php">Jual</a></li>
					<li><a href="persediaan.php">Persediaan</a></li>
					<li><a href="list_customer.php">Daftar Pelanggan</a></li>
					<li><a href="add_customer.php">Tambah Pelanggan</a></li>
					
					<?php
					}
					else if($_SESSION['status']=="pembelian"){
					?>
			<?php //		<li><a href="list_pembelian.php">Request Pembelian</a></li> ?>
					<li><a href="pembelian_bahanbakulist.php">Pembelian Bahan Baku</a></li>
					<li><a href="list_supplier.php">Daftar Supplier</a></li>
					<li><a href="add_supplier.php">Tambah Supplier</a></li>
					<li><a href="list_req_pembelian.php">Daftar Permintaan Pembelian</a></li>
					<?php//-- payment_buy.php ?>
					<?php
					}
					else if($_SESSION['status']=="produksi"){
					?>
					<li><a href="produksi.php">Produksi</a></li>
					<li><a href="list_produksi.php">Daftar Pemesanan</a></li>
					<li><a href="req_pembelian.php">Permintaan Pembelian</a></li>
					<li><a href="list_req_pembelian.php">Daftar Permintaan Pembelian</a></li>
					
					<?php
					}
					else if($_SESSION['status']=="distribusi"){
					?>
					<li><a href="persediaan.php">Persediaan</a></li>
					<li><a href="listpengiriman.php">Pengiriman</a></li>
					<?php
					}
					?>
                    </ul>
					</li>
					<?php
					if($_SESSION['status']=="keuangan" or $_SESSION['status']=="admin"){
					?>
					<li><a><i class="fa fa-home"></i> Laporan Keuangan <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
					<li><a href="hpp1.php">Harga Pokok Penjualan</a></li>
					<li><a href="laba_rugi1.php">Laporan Laba Rugi</a></li>
					<li><a href="ekuitas.php">Perubahan Modal</a></li>
					<li><a href="neraca.php">Neraca</a></li>
					<li><a href="analisis.php">Analisis Horizontal</a></li>
					</ul>
					</li>
					<?php
					}
					?>
					<?php
					if($_SESSION['status']=="pembelian" or $_SESSION['status']=="produksi"){
					?>
					<li><a><i class="fa fa-home"></i> Inventory <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
					<li><a href="list_bahanbaku.php">Bahan Baku</a></li>
					<li><a href="persediaan.php"> Barang Jadi</a></li>
					</ul>
					</li>
					<?php
					}
					?>