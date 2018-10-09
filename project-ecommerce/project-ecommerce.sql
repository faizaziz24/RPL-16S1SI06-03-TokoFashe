-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 06:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nm_admin`, `username`, `password`) VALUES
(1, 'Faizal Fahmi Aziz', 'faizaziz24', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Natasya Khoiru Nissa', 'natasyaruni', '2006d10ea50ca429d85086cde117aa1f');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `kd_bahan` int(3) NOT NULL,
  `nm_bahan` varchar(100) NOT NULL,
  `pj_bahan` text NOT NULL,
  `biaya_buat` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`kd_bahan`, `nm_bahan`, `pj_bahan`, `biaya_buat`) VALUES
(1, 'Full-Grain Leather', 'tahan lama, makin tua makin bagus', 150000),
(2, 'Pull-up Leather', 'lentur, patina, mudah tergores', 125000),
(3, 'Crazy Horse Leather', 'tampilan vintage,tidak mudah tergores', 100000),
(4, 'Suede Leather', 'lembut, rentan terkena kotoran', 100000),
(5, 'Nobuck Leather', 'bisa berubah warna, breathable, halus tapi tangguh', 100000),
(6, 'Vegetable-tanned Leather', 'natural, mahal', 125000);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` int(6) NOT NULL,
  `kd_kategori` int(3) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `harga_barang` int(12) NOT NULL,
  `keterangan` text NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  `disc_barang` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `kd_kategori`, `nm_barang`, `harga_barang`, `keterangan`, `file_gambar`, `disc_barang`) VALUES
(1, 1, 'Sepatu Casual Cokelat', 200000, '<p>sdnjdsandaskas as ds sad ads asaaaaaaaaaaaaaaaaaaaaaaaaaaaaaad asd&nbsp; z z xzx zx z x</p>\r\n', 'pexels-photo-267296.jpeg', 0),
(2, 1, 'Sepatu Pantofel Hitam', 250000, 'asdasdadsda dashasdbdasn nad nad masdas nda smd as dasn ksd jk2 kd ask dkas kdas kajsd', 'pexels-photo-292999.jpeg', 5),
(4, 1, 'Sepatu Boot Hitam', 300000, '<p>asdnmasd asdsam asdm das asm da sakd</p>\r\n', 'boot-leather-shoe-old-60619.jpeg', 10),
(5, 3, 'Sepatu Hiking Cokelat', 350000, '<p>dskn d adsk kad&nbsp; dsakdaads ada kdad sk asdm aasd aa</p>\r\n', 'pexels-photo-40662.jpeg', 15),
(6, 1, 'Sepatu Strap Biru', 200000, '<p>adsdas jads ka sd q2l m ekeqww,e eqw eqw;lqwe</p>\r\n', 'pexels-photo-40377.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `kd_custom` int(10) NOT NULL,
  `kd_jenis` int(6) NOT NULL,
  `kd_kategori` int(6) NOT NULL,
  `kd_bahan` int(6) NOT NULL,
  `kd_ukuran` int(6) NOT NULL,
  `kd_waktu` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`kd_custom`, `kd_jenis`, `kd_kategori`, `kd_bahan`, `kd_ukuran`, `kd_waktu`) VALUES
(1, 4, 1, 1, 1, 1),
(2, 4, 1, 1, 1, 2),
(3, 4, 1, 1, 1, 3),
(4, 4, 1, 1, 1, 4),
(5, 4, 1, 1, 1, 5),
(6, 4, 1, 1, 1, 6),
(7, 4, 1, 1, 1, 7),
(8, 4, 1, 1, 1, 8),
(9, 4, 1, 1, 2, 1),
(10, 4, 1, 1, 2, 2),
(11, 4, 1, 1, 2, 3),
(12, 4, 1, 1, 2, 4),
(13, 4, 1, 1, 2, 5),
(14, 4, 1, 1, 2, 6),
(15, 4, 1, 1, 2, 7),
(16, 4, 1, 1, 2, 8),
(17, 4, 1, 1, 3, 1),
(18, 4, 1, 1, 3, 2),
(19, 4, 1, 1, 3, 3),
(20, 4, 1, 1, 3, 4),
(21, 4, 1, 1, 3, 5),
(22, 4, 1, 1, 3, 6),
(23, 4, 1, 1, 3, 7),
(24, 4, 1, 1, 3, 8),
(25, 4, 1, 1, 4, 1),
(26, 4, 1, 1, 4, 2),
(27, 4, 1, 1, 4, 3),
(28, 4, 1, 1, 4, 4),
(29, 4, 1, 1, 4, 5),
(30, 4, 1, 1, 4, 6),
(31, 4, 1, 1, 4, 7),
(32, 4, 1, 1, 4, 8),
(33, 4, 1, 1, 5, 1),
(34, 4, 1, 1, 5, 2),
(35, 4, 1, 1, 5, 3),
(36, 4, 1, 1, 5, 4),
(37, 4, 1, 1, 5, 5),
(38, 4, 1, 1, 5, 6),
(39, 4, 1, 1, 5, 7),
(40, 4, 1, 1, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `kd_jenis` int(3) NOT NULL,
  `nm_jenis` varchar(100) NOT NULL,
  `pj_jenis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`kd_jenis`, `nm_jenis`, `pj_jenis`) VALUES
(1, 'Topi', '<p>Suatu jenis penutup kepala. Penggunaan Topi dimaksudkan untuk beberapa alasan. Umumnya digunakan sebagai aksesoris pakaian. Dalam beberapa upacara seremonial dan keagamaan penggunaan topi dapat menjadi keharusan.</p>\r\n'),
(2, 'Jaket', 'Baju luar yang panjangnya hingga pinggang atau pinggul, dipakai untuk menahan angin dan cuaca dingin. Bukaan jaket terletak di bagian depan dari leher ke bawah. Ritsleting, kancing, atau sabuk dipakai sebagai alat untuk membuka dan menutup bukaan jaket.'),
(3, 'Celana', 'Pakaian luar yang menutup pinggang sampai mata kaki, kadang-kadang hanya sampai lutut, yang membungkus batang kaki secara terpisah, terutama merupakan pakaian lelaki.'),
(4, 'Sepatu', 'Suatu jenis alas kaki (footwear) yang biasanya terdiri bagian-bagian sol, hak, kap, tali, dan lidah.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` int(3) NOT NULL,
  `kd_jenis` int(3) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `inisial_kategori` varchar(100) NOT NULL,
  `gb_kategori` varchar(100) NOT NULL,
  `pj_kategori` text NOT NULL,
  `biaya_buat` int(12) NOT NULL DEFAULT '0',
  `disc_kategori` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `kd_jenis`, `nm_kategori`, `inisial_kategori`, `gb_kategori`, `pj_kategori`, `biaya_buat`, `disc_kategori`) VALUES
(1, 4, 'Casual Leather', 'casual-leather', 'pexels-photo-267296.jpeg', '<p>as saddas sda ads adsdas sad sad asd c z x xccz</p>\r\n', 100000, 5),
(3, 4, 'Hiking Shoes', 'hiking-shoes', 'pexels-photo-40662.jpeg', '<p>dmsadmsa kad l sl dlsa dsaldsa,sda ads</p>\r\n', 250000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kd_kota` int(3) NOT NULL,
  `kd_provinsi` int(3) NOT NULL,
  `nm_kota` varchar(100) NOT NULL,
  `biaya_kirim` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kd_kota`, `kd_provinsi`, `nm_kota`, `biaya_kirim`) VALUES
(1, 1, 'Banda Aceh', 100000),
(4, 2, 'Medan', 95000),
(5, 13, 'Kota Yogyakarta', 10000),
(6, 12, 'Semarang', 15000),
(7, 15, 'Surabaya', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` int(10) NOT NULL,
  `nm_pelanggan` varchar(100) NOT NULL,
  `kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nm_pelanggan`, `kelamin`, `email`, `no_telepon`, `username`, `password`, `tgl_daftar`) VALUES
(1, 'Faizal Fahmi Aziz', 'Laki-laki', 'faizal.9366@students.amikom.ac.id', '082136549690', 'faizaziz24', '2006d10ea50ca429d85086cde117aa1f', '2018-04-27'),
(4, 'Natasya Khoiru Nissa', 'Perempuan', 'nndtasyarunni@gmail.com', '085647318006', 'nndtasyarunni', '2006d10ea50ca429d85086cde117aa1f', '2018-05-10'),
(5, 'Royhan', 'Laki-laki', 'royhan90@gmail.com', '0854953298', 'roy', '202cb962ac59075b964b07152d234b70', '2018-06-28'),
(6, 'Miftakhur', 'Laki-laki', 'mitha@gmail.com', '085129312341', 'mitha1234', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-28'),
(7, 'fashe', 'Perempuan', 'fashe@gmail.com', '085129312341', 'fashe', '08cd7517ad013c1ca10aafd4c163b9b8', '2018-06-28'),
(8, 'Fashe.', 'Laki-laki', 'aad@gmail.com', '0854953298', 'fashe.', '71b8b0ac2c103c60e9ecd7b49aa966a1', '2018-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `kd_pembelian` int(8) NOT NULL,
  `kd_pelanggan` char(6) NOT NULL,
  `tgl_pembelian` date NOT NULL DEFAULT '0000-00-00',
  `nama_penerima` varchar(60) NOT NULL,
  `alamat_lengkap` varchar(200) NOT NULL,
  `kd_provinsi` char(3) NOT NULL,
  `kd_kota` char(3) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `status_bayar` enum('Pesan','Lunas','Batal') NOT NULL DEFAULT 'Pesan'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kd_pembelian`, `kd_pelanggan`, `tgl_pembelian`, `nama_penerima`, `alamat_lengkap`, `kd_provinsi`, `kd_kota`, `kode_pos`, `no_telepon`, `status_bayar`) VALUES
(5, '1', '2018-06-26', 'Faizal Fahmi Aziz', 'Bangsan', '1', '1', '57511', '082136549690', 'Pesan'),
(6, '1', '2018-06-27', 'Lenka No Rinka', 'Bangsan', '1', '1', '57511', '082136549690', 'Pesan'),
(7, '1', '2018-06-28', 'Aditya Sulistyo', 'Condong Catur', '1', '1', '57511', '082136549690', 'Pesan'),
(8, '1', '2018-06-28', 'Royhan', 'ajkbdaabds', '2', '4', '57511', '082136549690', 'Pesan'),
(9, '6', '2018-06-28', 'Aditya Sulistyo', 'Sleman', '2', '4', '57511', '082136549690', 'Pesan'),
(10, '7', '2018-06-28', 'Fashe', 'Banda', '1', '1', '57511', '082136549690', 'Pesan'),
(11, '7', '2018-06-28', 'Faizal Fah', 'bgyc', '13', '5', '57511', '082136549690', 'Pesan'),
(12, '8', '2018-06-28', 'Faizal Fahmi Aziz', 'Condongcatur', '13', '5', '57511', '082136549690', 'Pesan');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_item`
--

CREATE TABLE `pembelian_item` (
  `id` int(12) NOT NULL,
  `kd_pembelian` int(8) NOT NULL,
  `kd_invent` int(6) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_item`
--

INSERT INTO `pembelian_item` (`id`, `kd_pembelian`, `kd_invent`, `harga`, `jumlah`) VALUES
(4, 6, 17, 190000, 1),
(3, 5, 14, 297500, 2),
(5, 7, 17, 190000, 2),
(6, 7, 11, 270000, 1),
(7, 8, 10, 237500, 4),
(8, 9, 16, 297500, 2),
(9, 10, 9, 237500, 5),
(10, 11, 8, 237500, 2),
(11, 12, 9, 237500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kd_pesan` int(12) NOT NULL,
  `nm_pesan` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tgl_pesan` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kd_pesan`, `nm_pesan`, `no_telepon`, `email`, `isi_pesan`, `tgl_pesan`) VALUES
(2, 'Faizal Fahmi Aziz', '082136549690', 'faizaziz24@gmail.com', 'Hei kakaku :D\r\n', '2018-05-14'),
(3, 'Natasya Khoiru Nissa', '082136549690', 'nndtasyarunni@gmail.com', 'SO sweet', '2018-05-14'),
(4, 'Aditya', '0854953298', 'aad@gmail.com', 'bagaimana cara memesan??', '2018-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kd_provinsi` int(3) NOT NULL,
  `nm_provinsi` varchar(100) NOT NULL,
  `nm_ibukota` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kd_provinsi`, `nm_provinsi`, `nm_ibukota`) VALUES
(1, 'Nanggro Aceh Darussalam', 'Bandar Aceh'),
(2, 'Sumatera Utara', 'Medan'),
(3, 'Sumatera Barat', 'Padang'),
(4, 'Riau', 'Pekan Baru'),
(5, 'Kepulauan Riau ', 'Tanjung Pinang'),
(6, 'Jambi', 'Jambi'),
(7, 'Bangka Belitung', 'Pangkal Pinang'),
(8, 'Lampung ', 'Bandar Lampung'),
(9, 'DKI Jakarta', 'Jakarta'),
(10, 'Jawa Barat', 'Bandung'),
(11, 'Banten', 'Serang'),
(12, 'Jawa Tengah', 'Semarang'),
(13, 'Daerah Istimewa Yogyakarta', 'Yogyakarta'),
(15, 'Jawa Timur', 'Surabaya'),
(16, 'Bali', 'Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `kd_invent` int(6) NOT NULL,
  `kd_barang` int(6) NOT NULL,
  `kd_bahan` int(3) NOT NULL,
  `kd_ukuran` int(3) NOT NULL,
  `jumlah_stok` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`kd_invent`, `kd_barang`, `kd_bahan`, `kd_ukuran`, `jumlah_stok`) VALUES
(1, 5, 2, 4, 26),
(2, 1, 1, 3, 30),
(5, 1, 1, 2, 30),
(6, 1, 1, 1, 20),
(7, 1, 1, 5, 30),
(8, 2, 2, 1, 30),
(9, 2, 2, 2, 22),
(10, 2, 2, 3, 26),
(11, 4, 3, 5, 10),
(12, 4, 3, 4, 15),
(13, 4, 3, 3, 20),
(14, 5, 5, 5, 5),
(15, 5, 5, 4, 8),
(16, 5, 5, 3, 10),
(17, 6, 6, 5, 10),
(18, 6, 6, 4, 12),
(19, 6, 6, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pembelian`
--

CREATE TABLE `tmp_pembelian` (
  `id_tmp_pembelian` int(6) NOT NULL,
  `kd_invent` int(6) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `kd_pelanggan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_pembelian`
--

INSERT INTO `tmp_pembelian` (`id_tmp_pembelian`, `kd_invent`, `harga`, `jumlah`, `tanggal`, `kd_pelanggan`) VALUES
(38, 14, 297500, 1, '2018-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pemesanan`
--

CREATE TABLE `tmp_pemesanan` (
  `id_tmp_pemesanan` int(6) NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  `kd_jenis` int(3) NOT NULL,
  `kd_kategori` int(3) NOT NULL,
  `kd_bahan` int(3) NOT NULL,
  `kd_ukuran` int(3) NOT NULL,
  `kd_waktu` int(3) NOT NULL,
  `pj_pemesanan` text NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `kd_pelanggan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `kd_ukuran` int(3) NOT NULL,
  `nm_ukuran` int(2) NOT NULL,
  `usia_ukuran` varchar(50) NOT NULL,
  `biaya_buat` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`kd_ukuran`, `nm_ukuran`, `usia_ukuran`, `biaya_buat`) VALUES
(1, 45, 'Dewasa', 10000),
(2, 44, 'Dewasa', 10000),
(3, 43, 'Dewasa', 10000),
(4, 42, 'Dewasa', 10000),
(5, 41, 'Dewasa', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `kd_waktu` int(3) NOT NULL,
  `lama_waktu` int(3) NOT NULL DEFAULT '7',
  `biaya_buat` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`kd_waktu`, `lama_waktu`, `biaya_buat`) VALUES
(1, 7, 20000),
(2, 14, 15000),
(3, 21, 10000),
(4, 28, 7500),
(6, 35, 5000),
(7, 42, 2500),
(8, 49, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`kd_bahan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`),
  ADD KEY `barang_ibfk_1` (`kd_kategori`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`kd_custom`),
  ADD KEY `kd_jenis` (`kd_jenis`),
  ADD KEY `kd_kategori` (`kd_kategori`),
  ADD KEY `kd_bahan` (`kd_bahan`),
  ADD KEY `kd_ukuran` (`kd_ukuran`),
  ADD KEY `kd_waktu` (`kd_waktu`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kd_kota`),
  ADD KEY `kd_provinsi` (`kd_provinsi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kd_pembelian`);

--
-- Indexes for table `pembelian_item`
--
ALTER TABLE `pembelian_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beli_item_ibfk_1` (`kd_pembelian`),
  ADD KEY `beli_item_ibfk_2` (`kd_invent`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kd_provinsi`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`kd_invent`),
  ADD KEY `stock_ibfk_1` (`kd_barang`),
  ADD KEY `stock_ibfk_2` (`kd_bahan`),
  ADD KEY `stock_ibfk_3` (`kd_ukuran`);

--
-- Indexes for table `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  ADD PRIMARY KEY (`id_tmp_pembelian`);

--
-- Indexes for table `tmp_pemesanan`
--
ALTER TABLE `tmp_pemesanan`
  ADD PRIMARY KEY (`id_tmp_pemesanan`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`kd_ukuran`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`kd_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `kd_bahan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_barang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `kd_custom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `kd_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kd_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kd_kota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `kd_pembelian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian_item`
--
ALTER TABLE `pembelian_item`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `kd_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `kd_provinsi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `kd_invent` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tmp_pembelian`
--
ALTER TABLE `tmp_pembelian`
  MODIFY `id_tmp_pembelian` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `kd_ukuran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `kd_waktu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
