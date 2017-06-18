-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.34 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5173
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table hmvc.ci_ajax_gallery
DROP TABLE IF EXISTS `ci_ajax_gallery`;
CREATE TABLE IF NOT EXISTS `ci_ajax_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `thumb_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.ci_ajax_gallery: ~3 rows (approximately)
/*!40000 ALTER TABLE `ci_ajax_gallery` DISABLE KEYS */;
INSERT INTO `ci_ajax_gallery` (`id`, `path`, `thumb_path`, `created_at`) VALUES
	(9, 'KIOSK.jpg', 'KIOSK_thumb.jpg', '2017-06-15 16:11:03'),
	(10, 'pin.png', 'pin_thumb.png', '2017-06-15 16:11:03'),
	(11, 'tv.png', 'tv_thumb.png', '2017-06-15 16:20:27');
/*!40000 ALTER TABLE `ci_ajax_gallery` ENABLE KEYS */;

-- Dumping structure for table hmvc.event
DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `latlong` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(100) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(230) CHARACTER SET latin1 NOT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table hmvc.event: 0 rows
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_barang
DROP TABLE IF EXISTS `nng_barang`;
CREATE TABLE IF NOT EXISTS `nng_barang` (
  `kd_barang` varchar(20) NOT NULL,
  `nm_barang` varchar(80) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT '0',
  `spek` varchar(150) NOT NULL,
  `tahun` varchar(150) NOT NULL,
  `status_barang` varchar(150) NOT NULL,
  `group` varchar(150) NOT NULL,
  `ruang` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `gambar` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_barang: ~18 rows (approximately)
/*!40000 ALTER TABLE `nng_barang` DISABLE KEYS */;
INSERT INTO `nng_barang` (`kd_barang`, `nm_barang`, `stok`, `spek`, `tahun`, `status_barang`, `group`, `ruang`, `status`, `gambar`) VALUES
	('01.003.2008.000004', 'Vas Bunga (Pendukung)', -1, 'Vas bunga dengan ukuran p=22cm, l=22cm,dan t=78cm', '2008', 'HIBAH', 'BK', 'LOBY', 1, ''),
	('01.003.2008.000014', 'Papan Motto (Pendukung)', 0, 'Tulisan Motto Museum Sandi dengan bingkai p=79cm,l=60cm. ', '2008', '', 'BK', 'LOBY', 1, ''),
	('01.003.2009.000001', 'Display panel meja (Pendukung)', 0, 'Display Panel Meja digunakan untuk tempat kentongan', '2009', 'HIBAH', 'BK', 'LOBY', 1, ''),
	('01.003.2009.000002', 'Kentongan Suka Rena 1 (Pendukung)', 0, 'Alat komunikasi yang digunakan pada jaman dahulu yang disumbangkan oleh paguyuban orkes kentongan suka rena, >Kentongan kecil dengan diameter=13,5 cm ', '2009', '', 'BK', 'LOBY', 1, ''),
	('01.003.2009.000003', 'Kentongan Suka Rena 2 (Pendukung)', 0, 'Alat komunikasi yang digunakan pada jaman dahulu yang disumbangkan oleh paguyuban orkes kentongan suka rena,>Kentongan Besar dengan diameter=13,5cm da', '2009', '', 'BK', 'LOBY', 1, ''),
	('01.003.2009.000011', 'Display Tema Museum (Pendukung)', 0, 'Papan yang berisikan tulisan tentang Tema Museum Sandi', '2009', '', 'BK', 'LOBY', 1, ''),
	('01.003.2013.000009', 'Meja Resepsionist (Pendukung)', 0, 'Sebagai tempat menaruh dan mengisi buku tamu', '2013', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000005', 'Foto Gedung Museum Sandi (Pendukung)', 0, 'Foto Museum Sandi dengan ukuran p=90cm,l=59cm dan bingkai Ukuran p=107cm,l=76,5cm dengan ketebalan 4,5cm', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000006', 'Jam digital (Pendukung)', 0, 'Jam digital dengan bentuk persegi panjang pada layarnya terdiri dari waktu,tanggal,dan temperatur.', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000007', 'Kursi Recepsionist 1 (Pendukung)', 0, 'Tempat untuk duduk resepsionist', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000008', 'Kursi Recepsionist 2 (Pendukung)', 0, 'Tempat untuk duduk resepsionist', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000012', 'Batu Peresmian Museum (Pendukung)', 0, 'Batu Peresmian yang berisi tandatangan Dr.Joko Setiadi dan Bapak Hamengkubuwono IX', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.003.2014.000013', 'Meja Batu Peresmian Museum (Pendukung)', 0, 'Meja yang digunakan untuk meletakkan Batu Peresmian  yang berisi tandatangan Dr.Joko Setiadi dan Bapak Hamengkubuwono IX', '2014', '', 'BK', 'LOBY', 1, ''),
	('01.023.3320.015', 'baju roebiono', 0, 'pemberian dari keluarga', '2015', 'HIBAH', 'PK', 'TOKOH', 1, 'tebar-kurban-nusantara-bina_6429085754.jpg'),
	('02.222.2222.22222', 'foto soeharto', 0, 'beli', '2000', 'HIBAH', 'PK', 'DUKUH', 1, ''),
	('08.888.8888.888888', 'TUGU SANAPATI', 0, 'BLABALA', '2008', 'HIBAH', 'BK', 'GLOBAL', 1, 'bginventoryn_1432013413.jpg'),
	('09.888.8888.888888', 'VITRIN', 0, 'BLABLABLA', '2008', 'HIBAH', 'PK', 'MERDEKA', 1, ''),
	('09.999.9998.888888', 'PATUNG', 0, 'TV LCD Merk Samsung Berwarna hitam dengan ukuran 60 inchi dipajang didinding ruang intro.', '2009', 'HIBAH', 'BK', 'GLOBAL', 1, 'bgvisitorn_7076070066.jpg');
/*!40000 ALTER TABLE `nng_barang` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_chat
DROP TABLE IF EXISTS `nng_chat`;
CREATE TABLE IF NOT EXISTS `nng_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(20) NOT NULL,
  `teks` varchar(200) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_chat: ~4 rows (approximately)
/*!40000 ALTER TABLE `nng_chat` DISABLE KEYS */;
INSERT INTO `nng_chat` (`id`, `usename`, `teks`, `waktu`, `status`) VALUES
	(1, 'ATAKU', 'Selamat datang di aplikasi offline Aset Desa', '2017-05-16 17:49:39', 1),
	(2, 'ATAKU', 'Kerja Kerja Kerja....', '2017-05-16 19:39:15', 1),
	(3, 'admin', '', '2017-05-22 02:57:36', 1),
	(4, 'admin', 'hmmmm', '2017-05-22 02:57:43', 1);
/*!40000 ALTER TABLE `nng_chat` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_menu
DROP TABLE IF EXISTS `nng_menu`;
CREATE TABLE IF NOT EXISTS `nng_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `file` varchar(29) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `modul` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `route` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `icon` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'world_link.png',
  `frame` tinyint(4) NOT NULL DEFAULT '1',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `aktif` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table hmvc.nng_menu: 81 rows
/*!40000 ALTER TABLE `nng_menu` DISABLE KEYS */;
INSERT INTO `nng_menu` (`id`, `parent_id`, `title`, `url`, `file`, `modul`, `route`, `icon`, `frame`, `menu_order`, `status`, `aktif`) VALUES
	(1, 0, 'Menu Master', '', '', '', '', 'cog.png', 1, 0, 1, 1),
	(2, 6, 'User Sistem', 'admin/index.php?mn=user', 'user/user_v', 'core/admin', '', '', 1, 1, 1, 1),
	(3, 33, 'Login Log', 'admin/index.php?mn=log_login', 'master_absen', 'core/admin', '', '', 1, 2, 1, 1),
	(4, 0, 'General Ledger', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(5, 4, 'Setup', '', '', '', '', '', 1, 0, 1, 1),
	(6, 1, 'Setup', '', '', '', '', '', 1, 0, 1, 1),
	(20, 5, 'Rekening', 'gli/index.php?mn=rek', 'rekening/rekening_v', 'accounting/gli', '', '', 1, 0, 1, 1),
	(21, 5, 'Rekening Pembantu', 'gli/index.php?mn=rekp', '', '', '', '', 1, 0, 0, 1),
	(22, 6, 'Divisi', 'gli/index.php?mn=div', 'divisi_ls', 'accounting/gli', '', '', 1, 0, 1, 1),
	(23, 4, 'Transaksi', '', '', '', '', '', 1, 0, 1, 1),
	(24, 4, 'Laporan', '', '', '', '', '', 1, 0, 1, 1),
	(25, 23, 'Jurnal Umum', 'gli/index.php?mn=trans_jurnal', 'acc_jurnalumum', 'accounting/gli', '', '', 1, 0, 1, 1),
	(26, 5, 'Inventaris', 'gli/index.php?mn=inv', 'inventaris_ls', 'accounting/gli', '', '', 1, 0, 1, 1),
	(27, 24, 'Data', 'gli/index.php?mn=jurnal', 'jurnal_ls', 'accounting/gli', '', '', 1, 0, 1, 1),
	(28, 24, 'Jurnal', 'gli/index.php?mn=lap_jurnal', 'laporan_jurnal', 'accounting/gli', '', '', 1, 1, 1, 1),
	(29, 24, '1.Buku Besar', 'gli/index.php?mn=lap_bb', 'laporan_bb', 'accounting/gli', '', '', 1, 2, 1, 1),
	(30, 24, '2.Neraca Saldo', 'gli/index.php?mn=neraca', 'laporan_neraca', 'accounting/gli', '', '', 1, 3, 1, 1),
	(31, 24, '3.Laba Rugi', 'gli/cetak_rl.php', 'cetak_rl_dagang_html', 'accounting/gli', '', '', 1, 4, 1, 1),
	(52, 24, '5.Neraca', 'gli/cetak_neraca99.php', 'cetak_neraca_html', 'accounting/gli', '', '', 1, 6, 1, 1),
	(33, 1, 'Laporan', '', '', '', '', '', 1, 0, 1, 1),
	(35, 6, 'Menu Sistem', 'admin/index.php?mn=menu', 'master_menu', 'core/admin', '', '', 1, 0, 1, 1),
	(51, 24, '4.Lap. Perubahan Modal', 'gli/lap_modal.php', 'lap_modal', 'accounting/gli', '', '', 1, 5, 1, 1),
	(54, 0, 'Aset Desa', '', '', '', '', 'calendar.png', 1, 0, 0, 1),
	(55, 54, 'Transaksi', '', '', '', '', '', 1, 0, 0, 1),
	(56, 55, 'Data Master', '', 'index', 'sekolah/ci214', '', '', 1, 0, 0, 1),
	(57, 54, 'Transaksi', '', '', '', '', '', 1, 0, 0, 1),
	(58, 57, 'Input Nilai', '', 'nilai_form', 'sekolah/native/skrip', '', '', 1, 0, 0, 1),
	(59, 54, 'Laporan', '', '', '', '', '', 1, 0, 0, 1),
	(60, 59, 'Nilai Akademik', '', 'nilai_print', 'sekolah/native/skrip', '', '', 1, 0, 0, 1),
	(61, 6, 'Setting Laporan', '', 'infoclient', 'core/include', '', '', 1, 0, 1, 1),
	(62, 55, 'Export, import Data', '', 'index', 'sekolah/native/excell/excell', '', '', 1, 0, 0, 1),
	(63, 5, 'Tutup Tahun', '', 'tutup_tahun', 'accounting/gli', '', 'world_link.png', 1, 0, 1, 1),
	(64, 23, 'Kas Masuk', '', 'jurnal_form_kasmasuk', 'accounting/gli', '', 'world_link.png', 1, 1, 1, 1),
	(65, 23, 'Kas Keluar', '', 'jurnal_form_kaskeluar', 'accounting/gli', '', 'world_link.png', 1, 2, 1, 1),
	(66, 0, 'Inventory', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(67, 66, 'Setup', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(68, 66, 'Transaksi', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(69, 66, 'Laporan', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(70, 67, 'Data Barang', '', 'stok_ls', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(71, 68, 'Barang Masuk', '', 'pembelian', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(72, 68, 'Barang Keluar', '', 'penjualan_retail', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(73, 0, 'Kepegawaian', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(74, 73, 'Setup', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(75, 74, 'Data Pegawai', '', 'master_pegawai', 'kepegawaian', '', 'world_link.png', 1, 0, 1, 1),
	(76, 23, 'Penggajian', '', 'jurnal_gaji', 'accounting/gli', '', 'world_link.png', 1, 3, 1, 1),
	(77, 74, 'Jabatan', '', 'master_jabatan', 'kepegawaian', '', 'world_link.png', 1, 0, 1, 1),
	(78, 74, 'Departemen', '', 'master_departemen', 'kepegawaian', '', 'world_link.png', 1, 0, 1, 1),
	(79, 0, 'Grafik & Kalender', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(80, 79, 'Laporan', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(81, 80, 'Grafik Persediaan', '', 'persediaan', 'chart/skrip', '', 'world_link.png', 1, 0, 1, 1),
	(82, 80, 'Grafik Ketersediaan Kas', '', 'kas', 'chart/skrip', '', 'world_link.png', 1, 0, 1, 1),
	(83, 80, 'Kalender', '', 'index', 'calendar', '', 'world_link.png', 1, 0, 1, 1),
	(84, 69, 'Penjualan', '', 'summary_produk', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(85, 69, 'Mutasi', '', 'mutasi_ls', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(86, 67, 'Konsumen', '', 'konsumen_ls', 'pos/inventory', '', 'world_link.png', 1, 0, 1, 1),
	(87, 67, 'Supplier', '', 'supplier_ls', 'pos/inventory', '', 'world_link.png', 1, 0, 1, 1),
	(88, 69, 'Pembelian, Hutang', '', 'hutang_ls', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(89, 68, 'Penjualan', '', 'penjualan_kredit', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(90, 69, 'Penjualan, Piutang', '', 'piutang_ls', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(91, 6, 'Upload Logo Usaha', '', 'upload_foto', 'core/admin', '', 'world_link.png', 1, 0, 1, 1),
	(92, 23, 'Memorial', '', 'memorial_input', 'accounting/gli', '', 'world_link.png', 1, 5, 1, 1),
	(93, 23, 'Piutang Karyawan', '', 'jurnal_kasbon', 'accounting/gli', '', 'world_link.png', 1, 4, 1, 1),
	(94, 0, 'Expedisi', '', '', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(95, 94, 'Transaksi', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(96, 95, 'Penerimaan Barang', '', 'barang_in', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(97, 95, 'Input Pengiriman', '', 'kirim', 'expedisi', '', 'world_link.png', 1, 0, 0, 1),
	(98, 68, 'PO', '', 'po_quick', 'pos/inventory', '', 'world_link.png', 1, 0, 1, 1),
	(99, 94, 'Master', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(100, 99, 'Jenis Layanan', '', 'jenis_layanan', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(101, 94, 'Laporan', '', '', '', '', 'world_link.png', 1, 0, 1, 1),
	(102, 101, 'Expedisi', '', 'barang_ls', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(103, 99, 'Reset No Urut per Bulan', '', 'reset_resi', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(105, 95, 'Daftar Muatan', '', 'daftar_muatan', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(106, 101, 'Muatan', '', 'muatan_ls', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(107, 99, 'Data Angkutan', '', 'sopir', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(108, 95, 'Route Detail', '', 'route', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(109, 95, 'Route Status', '', 'route_status', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(110, 99, 'Route Tarif', '', 'route_tarif', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(111, 95, 'Closing Expedisi', '', 'closing_ex', 'expedisi', '', 'world_link.png', 1, 0, 1, 1),
	(112, 69, 'PO List', '', 'po_list', 'pos/cafe', '', 'world_link.png', 1, 0, 1, 1),
	(113, 23, 'Iklan', '', 'iklan', 'accounting/gli', '', 'world_link.png', 1, 0, 1, 1);
/*!40000 ALTER TABLE `nng_menu` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_menu_akses
DROP TABLE IF EXISTS `nng_menu_akses`;
CREATE TABLE IF NOT EXISTS `nng_menu_akses` (
  `username` varchar(20) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_menu_akses: ~13 rows (approximately)
/*!40000 ALTER TABLE `nng_menu_akses` DISABLE KEYS */;
INSERT INTO `nng_menu_akses` (`username`, `menu_id`) VALUES
	('admin', 26),
	('admin', 25),
	('admin', 30),
	('admin', 21),
	('admin', 22),
	('admin', 23),
	('admin', 24),
	('admin', 27),
	('admin', 28),
	('admin', 29),
	('admin', 13),
	('admin', 14),
	('admin', 19);
/*!40000 ALTER TABLE `nng_menu_akses` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_rekening
DROP TABLE IF EXISTS `nng_rekening`;
CREATE TABLE IF NOT EXISTS `nng_rekening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `group` char(1) NOT NULL,
  `transaksi` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_rekening: ~9 rows (approximately)
/*!40000 ALTER TABLE `nng_rekening` DISABLE KEYS */;
INSERT INTO `nng_rekening` (`id`, `parent_id`, `nama`, `kode`, `group`, `transaksi`) VALUES
	(1, 0, 'ASET', '1', 'Y', 'T'),
	(2, 0, 'KEWAJIBAN', '2', 'Y', 'T'),
	(3, 0, 'ASET NETO', '3', 'Y', 'T'),
	(4, 0, 'PENERIMAAN', '4', 'Y', 'T'),
	(5, 0, 'PENGELUARAN', '5', 'Y', 'T'),
	(6, 1, 'Aset Lancar', '1.0', 'Y', 'T'),
	(7, 6, 'Kas', '1.0.1', 'Y', 'T'),
	(8, 7, 'Kas Kecil', '1.0.1.0', 'T', 'Y'),
	(9, 7, 'Kas', '1.0.1.1', 'T', 'Y');
/*!40000 ALTER TABLE `nng_rekening` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_supplier
DROP TABLE IF EXISTS `nng_supplier`;
CREATE TABLE IF NOT EXISTS `nng_supplier` (
  `kodesupplier` varchar(10) NOT NULL DEFAULT '',
  `namasupplier` varchar(60) DEFAULT NULL,
  `status` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_supplier: ~5 rows (approximately)
/*!40000 ALTER TABLE `nng_supplier` DISABLE KEYS */;
INSERT INTO `nng_supplier` (`kodesupplier`, `namasupplier`, `status`) VALUES
	('JOGI', 'JOGJAIDE', '1'),
	('LSN', 'LEMSANEG', '1'),
	('MSANDI', 'MUSEUM SANDI', '1'),
	('MTGW', 'Mario Teguh', '1'),
	('SP001', 'Jogja', '1');
/*!40000 ALTER TABLE `nng_supplier` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_things
DROP TABLE IF EXISTS `nng_things`;
CREATE TABLE IF NOT EXISTS `nng_things` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logox` varchar(255) COLLATE latin1_general_ci DEFAULT 'logo_blank.jpg',
  `jenis_barang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `asal_usul_barang` enum('APBDesa','Perolehan lain yang Sah','Aset / Kekayaan Asli Desa') COLLATE latin1_general_ci NOT NULL,
  `kekayaan` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `lain` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `apbdesa` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `kode_barang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `identitas_barang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `asal_usul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tanggal_asset` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `keterangan` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `sesi` int(11) NOT NULL DEFAULT '0',
  `updated` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table hmvc.nng_things: 0 rows
/*!40000 ALTER TABLE `nng_things` DISABLE KEYS */;
/*!40000 ALTER TABLE `nng_things` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_todo
DROP TABLE IF EXISTS `nng_todo`;
CREATE TABLE IF NOT EXISTS `nng_todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(250) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_todo: ~1 rows (approximately)
/*!40000 ALTER TABLE `nng_todo` DISABLE KEYS */;
INSERT INTO `nng_todo` (`id`, `todo`, `waktu`, `status`) VALUES
	(2, 'Nunggu Program Aset konawe Aset........', '2017-05-22 02:46:20', 1);
/*!40000 ALTER TABLE `nng_todo` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_transaksi
DROP TABLE IF EXISTS `nng_transaksi`;
CREATE TABLE IF NOT EXISTS `nng_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_barang` varchar(50) NOT NULL DEFAULT '0',
  `kd_supplier` varchar(50) NOT NULL DEFAULT '0',
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `ket` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_transaksi: ~1 rows (approximately)
/*!40000 ALTER TABLE `nng_transaksi` DISABLE KEYS */;
INSERT INTO `nng_transaksi` (`id`, `kd_barang`, `kd_supplier`, `jumlah`, `ket`) VALUES
	(1, '01.003.2008.000004', 'JOGI', 1, 'Bersih Terawat');
/*!40000 ALTER TABLE `nng_transaksi` ENABLE KEYS */;

-- Dumping structure for table hmvc.nng_users
DROP TABLE IF EXISTS `nng_users`;
CREATE TABLE IF NOT EXISTS `nng_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.nng_users: 3 rows
/*!40000 ALTER TABLE `nng_users` DISABLE KEYS */;
INSERT INTO `nng_users` (`id`, `username`, `password`, `nama`, `status`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nanang Rustianto', 1),
	(14, 'Anton', 'e0aa021e21dddbd6d8cecec71e9cf564', 'Saptono Mualim', 1),
	(13, 'ira', 'ac627ab1ccbdb62ec96e702f07f6425b', 'A. Zahira Putri', 1);
/*!40000 ALTER TABLE `nng_users` ENABLE KEYS */;

-- Dumping structure for table hmvc.tiger_desa
DROP TABLE IF EXISTS `tiger_desa`;
CREATE TABLE IF NOT EXISTS `tiger_desa` (
  `id` char(13) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kode_desa` varchar(10) DEFAULT NULL,
  `id_kecamatan` char(13) NOT NULL,
  `kelompok` int(10) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_kecamatan` (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hmvc.tiger_desa: ~0 rows (approximately)
/*!40000 ALTER TABLE `tiger_desa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiger_desa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
