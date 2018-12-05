-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 08:27 AM
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
(1, 'Faizal Fahmi Aziz', 'faizaziz24', '1a0058d3f5ee8bf50cd1ada6cec4373f'),
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
(4, 'Pull-up Leather', 'lentur, patina, mudah tergores', 125000),
(5, 'Crazy Horse Leather', 'tampilan vintage,tidak mudah tergores', 100000),
(6, 'Suede Leather', 'lembut, rentan terkena kotoran', 100000),
(7, 'Nobuck Leather', 'bisa berubah warna, breathable, halus tapi tangguh', 100000),
(8, 'Vegetable-tanned Leather', 'natural, mahal', 125000);

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
(2, 1, 'Sepatu Pantofel Hitam', 250000, 'asdasdadsda dashasdbdasn nad nad masdas nda smd as dasn ksd jk2 kd ask dkas kdas kajsd', 'pexels-photo-292999.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--
CREATE TABLE `jenis` (
  `kd_jenis` int(3) NOT NULL,
  `nm_jenis` varchar(100) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `kategori` (
  `kd_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `gb_kategori` varchar(100) NOT NULL,
  `pj_kategori` text NOT NULL,
  `biaya_buat` int(12) NOT NULL DEFAULT '0',
  `disc_kategori` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `tmp_pembelian` (
  `id_tmp_pembelian` int(6) NOT NULL,
  `kd_invent` int(6) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `kd_pelanggan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `tmp_pemesanan` (
  `id_tmp_pemesanan` int(6) NOT NULL,
  `kd_invent` int(6) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `kd_pelanggan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nm_kategori`, `gb_kategori`, `pj_kategori`, `biaya_buat`, `disc_kategori`) VALUES
(1, 'Casual Leather', 'pexels-photo-267296.jpeg', '<p>as saddas sda ads adsdas sad sad asd c z x xccz</p>\r\n', 200000, 5);

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
(1, 1, 'Bandar Aceh', 100000),
(4, 2, 'Medan', 95000);

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
(1, 'Faizal Fahmi Aziz', 'Laki-laki', 'faizal.9366@students.amikom.ac.id', '082136549690', 'faizaziz24', '2006d10ea50ca429d85086cde117aa1f', '2018-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no_pemesanan` char(8) NOT NULL,
  `kd_pelanggan` char(6) NOT NULL,
  `tgl_pemesanan` date NOT NULL DEFAULT '0000-00-00',
  `nama_penerima` varchar(60) NOT NULL,
  `alamat_lengkap` varchar(200) NOT NULL,
  `kd_provinsi` char(3) NOT NULL,
  `kd_kota` char(3) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `status_bayar` enum('Pesan','Lunas','Batal') NOT NULL DEFAULT 'Pesan'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_item`
--

CREATE TABLE `pembelian_item` (
  `id` int(4) NOT NULL,
  `no_pemesanan` char(8) NOT NULL,
  `kd_invent` char(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `jumlah_stok` int(4) NOT NULL DEFAULT '0'
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
(1, 45, 'Dewasa', 20000),
(2, 44, 'Dewasa', 20000),
(4, 43, 'Dewasa', 20000);

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
  ADD PRIMARY KEY (`no_pemesanan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kd_provinsi`);

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
  MODIFY `kd_barang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kd_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kd_kota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `kd_provinsi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `kd_ukuran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `kd_waktu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
