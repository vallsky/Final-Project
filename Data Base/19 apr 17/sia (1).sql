-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 09:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode_akun` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `kode_akun`, `status`) VALUES
(6, 'Kas Besar', '10101', '1'),
(7, 'Bank BCA', '10201', '1'),
(8, 'Cash In Transit', '10300', '1'),
(9, 'Piutang Usaha', '10400', '1'),
(21, 'PPh pasal 25', '10804', '1'),
(22, 'PPN Masukan', '10806', '1'),
(23, 'Persediaan Bahan Baku', '11201', '1'),
(24, 'Persediaan Barang dalam Proses', '11202', '1'),
(25, 'Persediaan', '11203', '1'),
(26, 'Inventaris Kantor', '0300', '12'),
(27, 'Inventaris Pabrik', '0400', '12'),
(28, 'Kendaraan', '0500', '12'),
(29, 'Akm peny Invt Ktr', '9000', '12'),
(30, 'Akm Peny Invt Pbrk', '9001', '12'),
(31, 'Akm Peny Kendaraan', '9002', '12'),
(32, 'Hutang Usaha', '10100', '2'),
(46, 'Hutang Lain-Lain', '10399', '2'),
(47, 'Hutang PPh 21', '10401', '2'),
(48, 'Hutang PPh 23/26', '10402', '2'),
(49, 'Hutang PPh 25/29', '10403', '2'),
(50, 'Hutang PPN Keluaran', '10404', '2'),
(51, 'Hutang PPh Final Pasal 4 Ayat(2)', '10406', '2'),
(52, 'Hutang Biaya Gaji', '10501', '2'),
(53, 'Hutang Biaya Lain-Lain', '10599', '2'),
(54, 'Modal', '10100', '3'),
(55, 'Penjualan', '10100', '4'),
(57, 'Biaya Bahan Baku', '20200', '5'),
(58, 'Biaya Tenaga Kerja', '10400', '5'),
(59, 'Biaya Listrik Pabrik', '20500', '5'),
(60, 'Biaya Sewa', '20700', '5'),
(61, 'Biaya Pemeliharaan Pabrik', '21400', '5'),
(62, 'Biaya peny Inventaris Pabrik', '29900', '5'),
(64, 'Biaya Gaji Staff', '20101', '6'),
(65, 'Biaya THR Staff', '20102', '6'),
(66, 'Biaya Adm Kantor', '20200', '6'),
(67, 'Biaya Adm Bank', '20300', '6'),
(68, 'Biaya Telp,Fax & Internet', '20400', '6'),
(69, 'Biaya Dapur & Konsumsi', '20600', '6'),
(70, 'Biaya Air & Listrik', '20500', '6'),
(71, 'Biaya Tol,Parkir & BBM', '21000', '6'),
(72, 'Biaya Pengiriman', '21100', '6'),
(73, 'Biaya Pemeliharaan Kendaraan', '21200', '6'),
(74, 'Biaya Keamanan & Kebersian Lingkungan', '21300', '6'),
(75, 'Biaya Pemeliharaan Kantor', '21400', '6'),
(76, 'Biaya Pemasaran', '21600', '6'),
(77, 'Biaya Serba Serbi', '29800', '6'),
(78, 'Biaya Penyusutan Aktiva', '29900', '6'),
(79, 'Pendapatan Jasa Giro Bank BCA', '10100', '7'),
(80, 'Pajak Atas Giro Bank BCA', '10301', '7'),
(81, 'Pajak Penghasilan', '10100', '8'),
(82, 'Prive', '10200', '3');

-- --------------------------------------------------------

--
-- Table structure for table `akun_a`
--

CREATE TABLE `akun_a` (
  `id_akun_a` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `saldo` int(255) NOT NULL,
  `id_periode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_a`
--

INSERT INTO `akun_a` (`id_akun_a`, `id_akun`, `saldo`, `id_periode`) VALUES
(6, 6, 5672450, 1),
(7, 7, 95724158, 1),
(8, 8, 0, 1),
(9, 9, 886182676, 1),
(21, 21, 0, 1),
(22, 22, 0, 1),
(23, 23, 0, 1),
(24, 24, 0, 1),
(25, 25, 0, 1),
(26, 26, 30000000, 1),
(27, 27, 13015000, 1),
(28, 28, 223400250, 1),
(29, 29, -11494448, 1),
(30, 30, -5494447, 1),
(31, 31, -67485492, 1),
(32, 32, 611287943, 1),
(46, 46, 0, 1),
(47, 47, 152750, 1),
(48, 48, 0, 1),
(49, 49, 1073175, 1),
(50, 50, 10343364, 1),
(51, 51, 0, 1),
(52, 52, 0, 1),
(53, 53, 0, 1),
(54, 54, 546662915, 1),
(55, 55, 0, 1),
(57, 57, 0, 1),
(58, 58, 0, 1),
(59, 59, 0, 1),
(60, 60, 0, 1),
(61, 61, 0, 1),
(62, 62, 0, 1),
(64, 64, 0, 1),
(65, 65, 0, 1),
(66, 66, 0, 1),
(67, 67, 0, 1),
(68, 68, 0, 1),
(69, 69, 0, 1),
(70, 70, 0, 1),
(71, 71, 0, 1),
(72, 72, 0, 1),
(73, 73, 0, 1),
(74, 74, 0, 1),
(75, 75, 0, 1),
(76, 76, 0, 1),
(77, 77, 0, 1),
(78, 78, 0, 1),
(79, 79, 0, 1),
(80, 80, 0, 1),
(81, 81, 0, 1),
(82, 82, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahanbaku` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `nama_bahan` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `harga_satuan` int(255) NOT NULL,
  `harga_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahanbaku`, `id_akun`, `nama_bahan`, `qty`, `harga_satuan`, `harga_total`) VALUES
(1, 23, 'kertas', 0, 500, 0),
(2, 23, 'label', 0, 500, 0),
(3, 0, 'kancing x 001', 0, 25000, 0),
(4, 0, 'label 2mm', 0, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `buku_besar`
--

CREATE TABLE `buku_besar` (
  `id_buku_besar` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `saldo` int(255) NOT NULL,
  `id_periode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_besar`
--

INSERT INTO `buku_besar` (`id_buku_besar`, `id_akun`, `saldo`, `id_periode`) VALUES
(6, 6, 5672450, 1),
(7, 7, 95724158, 1),
(8, 8, 0, 1),
(9, 9, 886182676, 1),
(21, 21, 0, 1),
(22, 22, 0, 1),
(23, 23, 0, 1),
(24, 24, 0, 1),
(25, 25, 0, 1),
(26, 26, 30000000, 1),
(27, 27, 13015000, 1),
(28, 28, 223400250, 1),
(29, 29, -11494448, 1),
(30, 30, -5494447, 1),
(31, 31, -67485492, 1),
(32, 32, 611287943, 1),
(46, 46, 0, 1),
(47, 47, 152750, 1),
(48, 48, 0, 1),
(49, 49, 1073175, 1),
(50, 50, 10343364, 1),
(51, 51, 0, 1),
(52, 52, 0, 1),
(53, 53, 0, 1),
(54, 54, 546662915, 1),
(55, 55, 0, 1),
(57, 57, 0, 1),
(58, 58, 0, 1),
(59, 59, 0, 1),
(60, 60, 0, 1),
(61, 61, 0, 1),
(62, 62, 0, 1),
(64, 64, 0, 1),
(65, 65, 0, 1),
(66, 66, 0, 1),
(67, 67, 0, 1),
(68, 68, 0, 1),
(69, 69, 0, 1),
(70, 70, 0, 1),
(71, 71, 0, 1),
(72, 72, 0, 1),
(73, 73, 0, 1),
(74, 74, 0, 1),
(75, 75, 0, 1),
(76, 76, 0, 1),
(77, 77, 0, 1),
(78, 78, 0, 1),
(79, 79, 0, 1),
(80, 80, 0, 1),
(81, 81, 0, 1),
(82, 82, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `saldo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `id_akun`, `nama_customer`, `saldo`) VALUES
(1, 9, 'PT.Sandang Mutiara Cemerlang', 16324836),
(2, 9, ' PT.Asia Power Global', 154162000),
(3, 9, 'PT.Hanindo', 52909560),
(4, 9, 'PT.Kodasindo Tatasarana', 61784272),
(5, 9, ' PT.Golden Label Printing', 35787470),
(6, 9, 'Westapusaka Kusuma', 565212910),
(7, 9, 'PT.Shinw on Ebenezer', 5000000),
(8, 9, ' PT.Vivena Sinergy Cemerlang', 0),
(9, 9, 'PT.Bunga Teratai Cemerlang', 0),
(10, 9, 'PT.Young Lim', 0),
(11, 9, 'PT.Laximirani Mitra Garmindo', 0),
(12, 9, 'Pt.Trigolden Star Wisesa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `isi_jurnal`
--

CREATE TABLE `isi_jurnal` (
  `id_isi_jurnal` int(255) NOT NULL,
  `id_jurnal` int(255) NOT NULL,
  `debet` int(255) NOT NULL,
  `credit` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_jurnal`
--

INSERT INTO `isi_jurnal` (`id_isi_jurnal`, `id_jurnal`, `debet`, `credit`, `id_akun`) VALUES
(49, 22, 152750, 0, 47),
(50, 22, 563500, 0, 49),
(51, 22, 0, 716250, 6),
(52, 23, 500, 0, 23),
(53, 23, 0, 500, 6),
(54, 24, 1000, 0, 23),
(55, 24, 0, 1000, 32),
(56, 25, 25000, 0, 23),
(57, 25, 0, 25000, 32),
(58, 26, 5000, 0, 23),
(59, 26, 0, 5000, 32),
(60, 27, 26500, 0, 24),
(61, 27, 0, 26500, 23),
(62, 28, 26500, 0, 25),
(63, 28, 0, 26500, 24),
(64, 29, 5000, 0, 24),
(65, 29, 0, 5000, 23),
(66, 30, 5000, 0, 25),
(67, 30, 0, 5000, 24),
(68, 31, 5000000, 0, 9),
(69, 31, 0, 5000000, 55),
(70, 31, 26500, 0, 57),
(71, 31, 0, 26500, 25),
(76, 34, 814, 0, 6),
(77, 34, 0, 814, 9),
(78, 35, 575, 0, 32),
(79, 35, 0, 575, 6);

-- --------------------------------------------------------

--
-- Table structure for table `isi_produksi`
--

CREATE TABLE `isi_produksi` (
  `id_isi_produksi` int(255) NOT NULL,
  `id_bahanbaku` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `id_produksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_produksi`
--

INSERT INTO `isi_produksi` (`id_isi_produksi`, `id_bahanbaku`, `qty`, `id_produksi`) VALUES
(2, 1, 1, 2),
(3, 2, 2, 2),
(4, 3, 1, 2),
(5, 4, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `isi_relasi_akun`
--

CREATE TABLE `isi_relasi_akun` (
  `id_relasi_akun` int(255) NOT NULL,
  `id_relasi` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_relasi_akun`
--

INSERT INTO `isi_relasi_akun` (`id_relasi_akun`, `id_relasi`, `id_akun`, `posisi`) VALUES
(52, 8, 47, 'debit'),
(53, 8, 49, 'debit'),
(54, 8, 6, 'credit'),
(55, 9, 6, 'debit'),
(56, 9, 55, 'credit'),
(57, 10, 23, 'debit'),
(58, 10, 6, 'credit'),
(59, 11, 24, 'debit'),
(60, 11, 23, 'credit'),
(61, 12, 25, 'debit'),
(62, 12, 24, 'credit'),
(63, 9, 57, 'debit'),
(64, 9, 25, 'credit'),
(65, 13, 64, 'debit'),
(66, 13, 6, 'credit'),
(67, 14, 58, 'debit'),
(68, 14, 6, 'credit'),
(69, 15, 32, 'debit'),
(70, 15, 6, 'credit'),
(71, 16, 6, 'debit'),
(72, 16, 9, 'credit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(255) NOT NULL,
  `tgl` date NOT NULL,
  `ket` text NOT NULL,
  `jenis_jurnal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `tgl`, `ket`, `jenis_jurnal`) VALUES
(22, '2012-01-10', ' Bayar PPh 21,PPh 25 des 2011\r\n\r\n', 'PJB'),
(23, '2012-01-02', 'Pembelian kertas', 'PMB'),
(24, '2012-01-02', 'Pembelian label', 'PMB'),
(25, '2012-01-01', 'Pembelian kancing x 001', 'PMB'),
(26, '2012-01-25', 'Pembelian label 2mm', 'PMB'),
(27, '2012-01-01', 'Produksi HT logo merk', 'JU'),
(28, '2012-01-05', 'Produksi Jadi  HT logo merk', 'JU'),
(29, '2012-01-06', 'Produksi Label', 'JU'),
(30, '2012-01-09', 'Produksi Jadi  Label', 'JU'),
(31, '2012-01-14', 'Penjualan  HT logo merk', 'PJB'),
(34, '2012-01-07', ' Pembayaran Piutang asia', 'KM'),
(35, '2012-01-10', ' bayar utang cipta ', 'KL');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `harga_beli` int(255) NOT NULL,
  `id_pesanan` int(255) NOT NULL,
  `status_pembelian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(255) NOT NULL,
  `id_pesanan` int(255) NOT NULL,
  `status_pengiriman` varchar(255) NOT NULL,
  `id_cust` int(255) NOT NULL,
  `tgl_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_pesanan`, `status_pengiriman`, `id_cust`, `tgl_pengiriman`) VALUES
(1, 1, 'Delivered', 7, '2012-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(255) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `tahun`) VALUES
(1, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `persediaan`
--

CREATE TABLE `persediaan` (
  `id_persediaan` int(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `hpp` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persediaan`
--

INSERT INTO `persediaan` (`id_persediaan`, `nama_produk`, `hpp`, `id_akun`) VALUES
(2, ' Label', 5000, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `status_pesanan` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `ket`, `harga_jual`, `qty`, `status_pesanan`, `tgl`) VALUES
(1, ' HT logo merk', 5000000, 1, 'Sold and Done', '2012-01-02'),
(3, ' Label', 250000, 1, 'Complete', '2012-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(255) NOT NULL,
  `id_pesanan` int(255) NOT NULL,
  `status_produksi` varchar(255) NOT NULL,
  `tgl_produksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_pesanan`, `status_produksi`, `tgl_produksi`) VALUES
(2, 1, 'Complete', '2012-01-01'),
(15, 3, 'Complete', '2012-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_akun`
--

CREATE TABLE `relasi_akun` (
  `id_relasi` int(255) NOT NULL,
  `nama_relasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_akun`
--

INSERT INTO `relasi_akun` (`id_relasi`, `nama_relasi`) VALUES
(8, 'Bayar PPH 21 PPH 25'),
(9, 'Penjualan'),
(10, 'Beli Bahan Baku'),
(11, 'Produksi'),
(12, 'Finish Good'),
(13, 'Pembayaran Gaji Kantor'),
(14, 'Pembayaran Gaji Pabrik'),
(15, 'Pembayaran Utang'),
(16, 'Penerimaan Piutang');

-- --------------------------------------------------------

--
-- Table structure for table `req_pembelian`
--

CREATE TABLE `req_pembelian` (
  `id_req_pembelian` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `qty_barang` int(255) NOT NULL,
  `tanggal_req` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req_pembelian`
--

INSERT INTO `req_pembelian` (`id_req_pembelian`, `nama_barang`, `qty_barang`, `tanggal_req`, `status`) VALUES
(1, 'Label', 1, '2012-01-11', 'Pending'),
(2, 'Kertas', 50, '2012-01-11', 'Done'),
(3, 'Kertas', 50, '2012-01-28', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `saldo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_akun`, `saldo`) VALUES
(6, 6, 5672450),
(7, 7, 95724158),
(8, 8, 0),
(9, 9, 886182676),
(21, 21, 0),
(22, 22, 0),
(23, 23, 0),
(24, 24, 0),
(25, 25, 0),
(26, 26, 30000000),
(27, 27, 13015000),
(28, 28, 223400250),
(29, 29, -11494448),
(30, 30, -5494447),
(31, 31, -67485492),
(32, 32, 611287943),
(46, 46, 0),
(47, 47, 152750),
(48, 48, 0),
(49, 49, 1073175),
(50, 50, 10343364),
(51, 51, 0),
(52, 52, 0),
(53, 53, 0),
(54, 54, 546662915),
(55, 55, 0),
(57, 57, 0),
(58, 58, 0),
(59, 59, 0),
(60, 60, 0),
(61, 61, 0),
(62, 62, 0),
(64, 64, 0),
(65, 65, 0),
(66, 66, 0),
(67, 67, 0),
(68, 68, 0),
(69, 69, 0),
(70, 70, 0),
(71, 71, 0),
(72, 72, 0),
(73, 73, 0),
(74, 74, 0),
(75, 75, 0),
(76, 76, 0),
(77, 77, 0),
(78, 78, 0),
(79, 79, 0),
(80, 80, 0),
(81, 81, 0),
(82, 82, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_sup` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `nama_supplier` text NOT NULL,
  `saldo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_sup`, `id_akun`, `nama_supplier`, `saldo`) VALUES
(1, 32, 'PT Bumi Tegal Alur Permai', 31000),
(2, 32, 'Hut - PT Panca Garda Utama', 2327765),
(3, 32, ' PT Golden International L P', 11175828),
(4, 32, 'Sinar Rejeki', 105289875),
(5, 32, 'Teguh Sukses Mandiri', 0),
(6, 32, 'Toko Bintang Jaya', 0),
(7, 32, 'Henson Printing', 0),
(8, 32, 'Sumber Makmur', 0),
(9, 32, 'Sukses Abadi', 0),
(10, 32, 'Cipta Lestari', 290059000),
(11, 32, 'Jaya Abadi', 0),
(12, 32, ' Indah Perkasa', 0),
(13, 32, 'PT Bureau Veritas Consumer', 0),
(14, 32, 'Dunia Pelangi', 202434900);

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE `userid` (
  `id_user` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`id_user`, `user`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'keuangan', '1a28ba12aeb8ac65fe9a1d3dd85f192e', 'keuangan'),
(4, 'penjualan', '13bf2c8effae21d17a277520aa9b9277', 'penjualan'),
(8, 'pembelian', '025b94c9e65037bb7317c8e25389155d', 'pembelian'),
(9, 'produksi', 'edf3017a2946290b95c783bd1a7f0ba7', 'produksi'),
(10, 'distribusi', '4a8a4a98ff830e7b6681ea6d94157507', 'distribusi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `akun_a`
--
ALTER TABLE `akun_a`
  ADD PRIMARY KEY (`id_akun_a`);

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `buku_besar`
--
ALTER TABLE `buku_besar`
  ADD PRIMARY KEY (`id_buku_besar`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `isi_jurnal`
--
ALTER TABLE `isi_jurnal`
  ADD PRIMARY KEY (`id_isi_jurnal`);

--
-- Indexes for table `isi_produksi`
--
ALTER TABLE `isi_produksi`
  ADD PRIMARY KEY (`id_isi_produksi`);

--
-- Indexes for table `isi_relasi_akun`
--
ALTER TABLE `isi_relasi_akun`
  ADD PRIMARY KEY (`id_relasi_akun`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`id_persediaan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `relasi_akun`
--
ALTER TABLE `relasi_akun`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `req_pembelian`
--
ALTER TABLE `req_pembelian`
  ADD PRIMARY KEY (`id_req_pembelian`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_sup`);

--
-- Indexes for table `userid`
--
ALTER TABLE `userid`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `akun_a`
--
ALTER TABLE `akun_a`
  MODIFY `id_akun_a` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahanbaku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `buku_besar`
--
ALTER TABLE `buku_besar`
  MODIFY `id_buku_besar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `isi_jurnal`
--
ALTER TABLE `isi_jurnal`
  MODIFY `id_isi_jurnal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `isi_produksi`
--
ALTER TABLE `isi_produksi`
  MODIFY `id_isi_produksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `isi_relasi_akun`
--
ALTER TABLE `isi_relasi_akun`
  MODIFY `id_relasi_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id_persediaan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `relasi_akun`
--
ALTER TABLE `relasi_akun`
  MODIFY `id_relasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `req_pembelian`
--
ALTER TABLE `req_pembelian`
  MODIFY `id_req_pembelian` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_sup` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `userid`
--
ALTER TABLE `userid`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
