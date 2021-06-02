-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 07:30 AM
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
(1, 1, 8700000, 0, 64),
(2, 1, 0, 8700000, 6),
(3, 2, 10000000, 0, 6),
(4, 2, 0, 10000000, 7),
(7, 4, 8700000, 0, 64),
(8, 4, 0, 8700000, 6),
(9, 5, 8700000, 0, 64),
(10, 5, 0, 8700000, 6),
(11, 6, 9000000, 0, 6),
(12, 6, 0, 9000000, 7),
(13, 7, 9000000, 0, 6),
(14, 7, 0, 9000000, 7),
(15, 8, 8700000, 0, 64),
(16, 8, 0, 8700000, 6),
(17, 9, 8700000, 0, 64),
(18, 9, 0, 8700000, 6),
(19, 10, 8700000, 0, 64),
(20, 10, 0, 8700000, 6),
(21, 11, 8700000, 0, 64),
(22, 11, 0, 8700000, 6),
(23, 12, 8700000, 0, 64),
(24, 12, 0, 8700000, 6),
(25, 13, 8700000, 0, 64),
(26, 13, 0, 8700000, 6),
(27, 14, 8700000, 0, 64),
(28, 14, 0, 8700000, 6),
(29, 15, 8700000, 0, 64),
(30, 15, 0, 8700000, 6),
(31, 16, 8700000, 0, 64),
(32, 16, 0, 8700000, 6),
(33, 17, 3650000, 0, 58),
(34, 17, 0, 3650000, 6),
(35, 18, 3650000, 0, 58),
(36, 18, 0, 3650000, 6),
(37, 19, 3650000, 0, 58),
(38, 19, 0, 3650000, 6),
(39, 20, 3650000, 0, 58),
(40, 20, 0, 3650000, 6),
(41, 21, 3650000, 0, 58),
(42, 21, 0, 3650000, 6),
(43, 22, 3650000, 0, 58),
(44, 22, 0, 3650000, 6),
(45, 23, 3650000, 0, 58),
(46, 23, 0, 3650000, 6),
(47, 24, 3650000, 0, 58),
(48, 24, 0, 3650000, 6),
(49, 25, 3650000, 0, 58),
(50, 25, 0, 3650000, 6),
(51, 26, 3650000, 0, 58),
(52, 26, 0, 3650000, 6),
(53, 27, 3650000, 0, 58),
(54, 27, 0, 3650000, 6),
(55, 28, 3650000, 0, 58),
(56, 28, 0, 3650000, 6),
(57, 29, 7451385, 0, 23),
(58, 29, 0, 7451385, 32),
(59, 30, 3858100, 0, 23),
(60, 30, 0, 3858100, 32),
(61, 31, 3001900, 0, 23),
(62, 31, 0, 3001900, 32),
(63, 32, 2000275, 0, 23),
(64, 32, 0, 2000275, 32),
(65, 33, 637455, 0, 23),
(66, 33, 0, 637455, 32),
(67, 34, 1843200, 0, 23),
(68, 34, 0, 1843200, 32),
(69, 35, 3502800, 0, 23),
(70, 35, 0, 3502800, 32),
(73, 37, 22000000, 0, 23),
(74, 37, 0, 22000000, 32);

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
(72, 16, 9, 'credit'),
(73, 17, 6, 'debit'),
(74, 17, 7, 'credit'),
(75, 18, 23, 'debit'),
(76, 18, 32, 'credit');

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
(1, '2012-01-31', 'Gaji Karyawan jan 12', 'KL'),
(2, '2012-01-30', ' tarik untuk pembayaran gaji', 'KM'),
(4, '2012-02-29', ' Bayar gaji karyawan feb 12', 'KL'),
(5, '2012-03-30', '  Bayar gaji karyawan mar 12', 'KL'),
(6, '2012-02-24', ' penarikan bayar gaji ', 'KM'),
(7, '2012-03-28', ' penarikan utk gaji', 'KM'),
(8, '2012-04-28', 'u/ gaji apr 12', 'KL'),
(9, '2012-05-31', ' u/ gaji may 12', 'KL'),
(10, '2012-06-30', ' u/ gaji juni 12', 'KL'),
(11, '2012-07-31', ' u/ gaji jul 12', 'KL'),
(12, '2012-08-31', ' u/ gaji ags 12', 'KL'),
(13, '2012-09-29', ' u/ gaji sep 12', 'KL'),
(14, '2012-10-31', ' u/ gaji oct 12', 'KL'),
(15, '2012-11-30', ' u/ gaji nov 12', 'KL'),
(16, '2012-12-29', ' u/ gaji des 12', 'KL'),
(17, '2012-01-31', ' u/ gaji pabrik', 'KL'),
(18, '2012-02-29', ' u/ gaji pabrik feb 12', 'KL'),
(19, '2012-03-31', ' u/ gaji pabrik mar 12', 'KL'),
(20, '2012-04-30', ' u/ gaji pabrik apr 12', 'KL'),
(21, '2012-05-31', ' u/ gaji pabrik may 12', 'KL'),
(22, '2012-06-30', ' u/ gaji pabrik juni 12', 'KL'),
(23, '2012-07-31', ' u/ gaji juli 12', 'KL'),
(24, '2012-08-31', ' u/ gaji pabrik ags 12', 'KL'),
(25, '2012-10-01', ' u/ gaji sep 12', 'KL'),
(26, '2012-10-31', ' u/ gaji pabrik okt 12', 'KL'),
(27, '2012-11-30', ' u/ gaji pabrik nov 12', 'KL'),
(28, '2012-12-29', ' u/ gaji pabrik des 12', 'KL'),
(29, '2012-01-05', ' Beli size stripe d/ cipta lestari', 'PMB'),
(30, '2012-01-06', ' beli HT g & m JOKERTAG D/Sumber Makmur', 'PMB'),
(31, '2012-01-06', ' Beli Pita Nilon d/ sumber makmur', 'PMB'),
(32, '2012-01-09', ' Beli Ht speculation d/ dunia pelangi', 'PMB'),
(33, '2012-01-12', ' beli machine was cold d/Pt golden international', 'PMB'),
(34, '2012-01-13', ' Beli HT BCC KHAKI D/ Cipta Lestari', 'PMB'),
(35, '2012-01-16', ' Beli Hangtag GMX  d/Sinar Rejeki', 'PMB'),
(37, '2012-01-20', ' beli toyobo KF d/ teguh sukses mandiri', 'PMB');

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
(16, 'Penerimaan Piutang'),
(17, 'Penarikan dari Bank BCA'),
(18, 'Pembelian dengan credit');

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
  MODIFY `id_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `akun_a`
--
ALTER TABLE `akun_a`
  MODIFY `id_akun_a` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahanbaku` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buku_besar`
--
ALTER TABLE `buku_besar`
  MODIFY `id_buku_besar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `isi_jurnal`
--
ALTER TABLE `isi_jurnal`
  MODIFY `id_isi_jurnal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `isi_produksi`
--
ALTER TABLE `isi_produksi`
  MODIFY `id_isi_produksi` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `isi_relasi_akun`
--
ALTER TABLE `isi_relasi_akun`
  MODIFY `id_relasi_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id_persediaan` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relasi_akun`
--
ALTER TABLE `relasi_akun`
  MODIFY `id_relasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `req_pembelian`
--
ALTER TABLE `req_pembelian`
  MODIFY `id_req_pembelian` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_sup` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `userid`
--
ALTER TABLE `userid`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
