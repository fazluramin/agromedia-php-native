-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 06:24 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_trf`
--

CREATE TABLE IF NOT EXISTS `bukti_trf` (
`id` int(10) NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `bukti_transfer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_trf`
--

INSERT INTO `bukti_trf` (`id`, `tanggal_konfirmasi`, `id_pembeli`, `id_transaksi`, `nama_pengirim`, `bukti_transfer`) VALUES
(1, '2018-07-09', 2, 198, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(2, '2018-07-09', 2, 200, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(3, '2018-07-09', 2, 202, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(4, '2018-07-09', 2, 204, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(5, '2018-07-09', 2, 206, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(6, '2018-07-09', 2, 208, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(7, '2018-07-09', 2, 210, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(8, '2018-07-09', 2, 211, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(9, '2018-07-09', 2, 217, 'siuas', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(10, '2018-07-09', 2, 219, 'sultanos', '150c6a215660d20100115b54f683c7fe.png'),
(11, '2018-07-09', 2, 220, 'sultanos', '150c6a215660d20100115b54f683c7fe.png'),
(12, '2018-07-09', 2, 222, 'sultanosa', '893d5e9c19e537423ab5097b3048622e.png'),
(13, '2018-07-09', 1, 3, 'a', '9b7467e7e9bd8e7bc252293e936ba5e0.png'),
(14, '2018-07-09', 1, 4, 'a', '9b7467e7e9bd8e7bc252293e936ba5e0.png'),
(15, '2018-07-09', 1, 5, 'a', '9b7467e7e9bd8e7bc252293e936ba5e0.png'),
(16, '2018-07-09', 1, 6, 'a', '9b7467e7e9bd8e7bc252293e936ba5e0.png'),
(17, '2018-07-09', 1, 8, 'as', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(18, '2018-07-09', 1, 10, 'a', '42cb5aae741cf28a186fa3151d58cc7a.png'),
(19, '2018-07-10', 1, 18, 'S7s', '81c015d6baa76e29b8dea8acb7f8ee5c.png'),
(20, '2018-07-10', 1, 20, 'S7s', '81c015d6baa76e29b8dea8acb7f8ee5c.png'),
(21, '2018-07-10', 1, 22, 'S7s', '81c015d6baa76e29b8dea8acb7f8ee5c.png'),
(22, '2018-07-10', 3, 24, 'asep', '2042c76d78c82d569312abe9e04b2ced.png'),
(23, '2018-07-10', 3, 26, 'asep', 'da8e851af27026201341e8a135d95e88.png'),
(24, '2018-07-10', 3, 28, 'asep', 'af99137944b0da90711ef58a16e8d2f5.png'),
(25, '2018-07-21', 1, 30, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(26, '2018-07-21', 1, 32, 'asep', 'b747dc9b6adb68013fe5735ad4f007eb.png'),
(27, '2018-07-21', 1, 34, 'sultanos', 'd41d8cd98f00b204e9800998ecf8427e.png'),
(28, '2018-07-21', 2, 36, 'sultanosa', '8d9ffe56387d2f504fd9731c0056c0e5.png'),
(29, '2018-07-21', 1, 38, 'a', '388753e76cc96a5eaa207599ee25226b.png'),
(30, '2018-07-21', 1, 42, 'sultanosa', '881cf2229ec19de1a67d20d6ae63a55c.png'),
(31, '2018-07-21', 1, 43, 'sultanosa', '881cf2229ec19de1a67d20d6ae63a55c.png'),
(32, '2018-07-21', 1, 44, 'sultanosa', '881cf2229ec19de1a67d20d6ae63a55c.png'),
(33, '2018-07-21', 1, 46, 'asep', '4a40e760450ab26072bb4671cd3f1540.png'),
(34, '2018-07-21', 1, 48, 's', '3769c3947e689a832f9cecb20e58c3da.png'),
(35, '2018-07-21', 1, 50, 'a', '48da304212ec520ccc68f102bdd286e3.png'),
(36, '2018-07-22', 1, 52, 'doni', 'a949c81c72bcdf8506d16ebe1917b4b8.png'),
(37, '2018-07-22', 3, 54, 'alfro', '098a796223dd1bcf24eac68f1160519b.png'),
(38, '2018-07-22', 2, 57, 'budi', '31b07ab2dbac70fcdbd7fb0dade01c1d.png'),
(39, '2018-07-22', 2, 58, 'budi', '31b07ab2dbac70fcdbd7fb0dade01c1d.png'),
(40, '2018-07-22', 4, 60, 'ferry', '95b10371d1781b3f7e7b1baca7a19dd4.png');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_handphone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `nama`, `alamat`, `nomor_handphone`, `email`) VALUES
(1, 'doni', 'Dimana Mana', '08579898003', 'doni@gmail.com'),
(2, 'Budimantara', 'Pekanbaru', '085798980043', 'budi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `k_buku`
--

CREATE TABLE IF NOT EXISTS `k_buku` (
  `kategori` varchar(30) NOT NULL,
`id_kategori` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_buku`
--

INSERT INTO `k_buku` (`kategori`, `id_kategori`) VALUES
('pertanian', 1),
('bisnis_dan_ekonomi', 2),
('pendidikan', 3),
('keluarga', 4),
('sejarah', 5),
('hukum', 6),
('sastra', 7),
('agama', 8),
('Sains Terapan', 9),
('ilmu_sosial', 10),
('komputer_dan_teknologi', 11),
('matematika', 12),
('psikologi', 13),
('seni_dan_desain', 14),
('anak-anak', 15),
('psikologi', 16),
('finansial', 17),
('pengembangan_diri', 18),
('gaya_hidup', 19),
('keterampilan_profesional', 20),
('pertanian', 21),
('bisnis_dan_ekonomi', 22),
('pendidikan', 23),
('keluarga', 24),
('sejarah', 25),
('hukum', 26),
('sastra', 27),
('agama', 28),
('sains', 29),
('ilmu_sosial', 30),
('komputer_dan_teknologi', 31),
('matematika', 32),
('psikologi', 33),
('seni_dan_desain', 34),
('anak-anak', 35),
('psikologi', 36),
('pengembangan_diri', 38),
('keterampilan_profesional', 40),
('Gaya Hidup', 41);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_handphone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `nomor_handphone`, `email`) VALUES
(1, 'coba1', 'Pekanbaru kota', '034452332', 'coba1@gmail.com'),
(2, 'irvan Mustafa', 'Pekanbaru', '08969995004', 'irvan@gmail.com'),
(3, 'Alfrosta Deteronjos', 'Marpoyan', '9899939985', 'alfro@gmail.com'),
(4, 'ferry', 'Cipta Karya', '087765478998', 'ferry@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
`id_transaksi` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_rekening` int(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_transaksi`, `id_pembeli`, `id_produk`, `jumlah`, `tanggal`, `status`, `id_rekening`, `role`) VALUES
(52, 1, 4, 1, '2018-07-22', 'konfirmasi_admin', 3, 'b2b'),
(54, 3, 11, 3, '2018-07-22', 'konfirmasi_admin', 3, 'member'),
(57, 2, 4, 1, '2018-07-22', 'konfirmasi_admin', 3, 'b2b'),
(58, 2, 11, 1, '2018-07-22', 'konfirmasi_admin', 3, 'b2b'),
(60, 4, 3, 2, '2018-07-22', 'konfirmasi_admin', 3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE IF NOT EXISTS `pimpinan` (
`id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `nama`, `level`) VALUES
(1, 'Pimpinan', 'pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
`id_rekening` int(10) NOT NULL,
  `nomor_rekening` varchar(15) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `nama_bank` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nomor_rekening`, `atas_nama`, `nama_bank`) VALUES
(2, '15412145788', 'Budimantara', 'BCA'),
(3, '5454122456', 'Syahrul', 'BRI'),
(4, '554584215466', 'Anton', 'BNI');

-- --------------------------------------------------------

--
-- Table structure for table `stok_buku`
--

CREATE TABLE IF NOT EXISTS `stok_buku` (
`id_produk` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `photo` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `stok_buku` int(5) NOT NULL,
  `best_seller` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_buku`
--

INSERT INTO `stok_buku` (`id_produk`, `nama_produk`, `harga`, `photo`, `kategori`, `keterangan`, `stok_buku`, `best_seller`) VALUES
(2, ' Ekosistem Pesisir & Laut Indonesia    ', 135000, '3342c1092f4bcdf344e9d49231c42c20.png', '1', 'Ahmad Muhtadi Rangkuti,Dkk|508|2018-07-20|9786024440893|Indonesia|Bumi Aksara Group|0.52 kg|                                                                                        ini telah di update                                                                                                                     ', 17, 1),
(3, 'Rahasia Sukses Budidaya Ikan Nila     ', 42000, '8b3f36ebcc7b50abdca6123308096c67.png', '1', 'Tim Karya Tani Mandiri|144|2014-06-11|9789790713130|Indonesia|Nuansa Aulia|0.165 kg|                                                                                                                                    ini juga diupdate                                                                                                                                                    ', 1996, 1),
(4, 'Menangkarkan Lovebird Beauty Contest', 60500, '4.png', '1', 'Iskandar Mirza|88|Jan 12, 2018|9789790066076|Indonesia|Agromedia Pustaka|0.160 kg|<kosong>|1', 42, 0),
(8, 'Menerima kehidupan ini', 120000, '4995803fd362491a47a464819785bdb2.png', '13', 'Axioma Protoza|400|2018-07-13|99288939994|Mindo|Blavados Mediatama|0,3 kg|ini buku aneh|1', 11, 0),
(11, 'Menerima kehidupan ini aja', 150000, 'af78e9e91ba1b3fa6d61a8fea678d8cd.png', '11', 'Axioma Protoza|300|2018-07-19|99288939994|asd|Blavados Mediatama|2kg|ini buku aneh memang|1', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@agromedia.com', 'admin', 'admin'),
(1, 'pimpinan@agromedia.com', 'pimpinan', 'pimpinan'),
(1, 'coba1@gmail.com', 'coba1', 'member'),
(1, 'doni@gmail.com', 'donisaja', 'b2b'),
(2, 'budi@gmail.com', 'budimantara123', 'b2b'),
(2, 'irvan@gmail.com', 'irvan123', 'member'),
(3, 'alfro@gmail.com', 'alfro123', 'member'),
(4, 'ferry@gmail.com', 'ferry123', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_trf`
--
ALTER TABLE `bukti_trf`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k_buku`
--
ALTER TABLE `k_buku`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
 ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `stok_buku`
--
ALTER TABLE `stok_buku`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bukti_trf`
--
ALTER TABLE `bukti_trf`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `k_buku`
--
ALTER TABLE `k_buku`
MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
MODIFY `id_rekening` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stok_buku`
--
ALTER TABLE `stok_buku`
MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
