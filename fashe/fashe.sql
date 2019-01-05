-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 01:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashe`
--

-- --------------------------------------------------------

--
-- Table structure for table `ages`
--

CREATE TABLE `ages` (
  `age_id` int(11) NOT NULL,
  `age_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ages`
--

INSERT INTO `ages` (`age_id`, `age_name`, `created_at`) VALUES
(1, 'Women', '2018-12-05 07:43:40'),
(2, 'Men', '2018-12-05 07:43:40'),
(3, 'Kids', '2018-12-05 07:43:58'),
(5, 'Baby', '2019-01-03 15:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `buy_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buy_detail`
--

CREATE TABLE `buy_detail` (
  `buy_detail_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buy_tmp`
--

CREATE TABLE `buy_tmp` (
  `tmp_buy_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `category_body`, `created_at`) VALUES
(1, 'Sepatu', 'shoes-leather.jpeg', 'Sepatu kulit adalah sepatu yang terbuat dari kulit hewan. Sepatu kulit sudah dikenal sejak zaman pertama kali manusia ada di bumi. Manusia butuh alas kaki karena telapak kaki manusia tidak sekuat telapak kaki hewan. Manusia menggunakan kulit hewan sebagai pembungkus kakinya dari bahaya di jalan dan dari suhu yang dingin. Seiring dengan perkembangan kemajuan bentuk sepatu kulit semakin baik dan memiliki berbagai macam jenis, seperti sepatu kerja, sepatu olahraga, sepatu sekolah dan lain lain menurut kegunaannya.', '2018-12-06 02:58:14'),
(2, 'Jaket', 'jacket-leather.jpeg', 'Jaket kulit adalah pakaian luar terbuat dari kulit binatang bagi pria atau wanita yang digunakan sebagai pelindung atau baju rangkap untuk melindungi dari cuaca dingin dan angin.', '2018-12-06 02:58:50'),
(3, 'Sabuk', 'belt-leather.jpeg', 'Ikat pinggang atau sabuk ialah pita fleksibel, biasanya terbuat dari kulit atau pakaian keras, dan dikenakan di sekitar pinggang. Ikat pinggang berfungsi mengikat celana atau bahan pakaian lain, juga berguna untuk gaya atau mode.\r\n\r\nSabuk telah terdokumentasi untuk pria dan wanita sejak Zaman Perunggu. Pada masa modern, orang mulai mengenakan ikat pinggang sejak tahun 1920-an, agar celana panjang yang dikenakannya tidak melorot. Sebelum itu, sabuk hanya dikenakan untuk hiasan, dan banyak dikaitkan dengan militer.\r\n\r\nTerdapat berbagai jenis sabuk, antara lain sabuk tatahan, yang biasanya terbuat dari kulit atau bahan serupa, dan dihiasi dengan logam, umum di kalangan mode punk, emo, dan metal.', '2018-12-06 03:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `created_at`) VALUES
(1, 'Faizal Fahmi Aziz', '082136549690', 'faizaziz24@gmail.com', '712507e6eab5ad43ffee3f97c23d01c5', '2018-12-06 02:40:02'),
(2, 'Sophia Riska Wiraningrum', '0821231423124', 'sophiarizkaw@gmail.com', '2006d10ea50ca429d85086cde117aa1f', '2018-12-12 15:34:13'),
(3, 'Citra Avitka Mawar Stri', '08213321245231', 'citraav@gmail.com', 'c2aef62c97faf8631db4f1a769e2e1fb', '2019-01-03 15:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `material_image` varchar(255) NOT NULL,
  `material_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_id`, `material_name`, `material_image`, `material_body`, `created_at`) VALUES
(1, 'Full Grain Leather', 'full-grain-leather.jpg', 'Full-grain leather adalah jenis material kulit yang tetap mempertahankan karakteristik alami dari kulit itu sendiri alias tanpa menghilangkan kerutan dan guratan natural kulit\r\n\r\nSebagai jenis kulit paling baik, full-grain leather mempunyai dua keunggulan utama\r\n\r\nI. Tahan lama\r\n\r\nFull-grain kuat dan tahan lama, tidak mudah sobek, tergores dan terkelupas\r\n\r\nII. Makin Tua Makin Jadi\r\n\r\nSeiring bertambahnya usia, material full-grain leather akan semakin terlihat bagus dan membentuk patina jika dirawat dengan baik.', '2018-12-06 02:45:55'),
(2, 'Pull Up Leather', 'pull-up-leather.jpg', 'Pull-up leather pertama kali dikenal pada tahun 1920an dan telah menjadi salah satu material favorit untuk sepatu santai maupun sepatu ngantor.\r\n\r\nKulit pull-up sendiri adalah jenis kulit yang telah melalui proses koreksi dengan pewarnaan menggunakan anilin yang menyatu dengan minyak pada kulit.\r\n\r\nKulit pull-up punya beberapa fitur, yakni\r\n\r\nI. Lentur\r\n\r\nKulit pull-up memiliki fleksibilitas dan daya tahan yang tinggi serta tekstur yang lembut dan elastis. Uniknya,jika kamu meregangkan atau menarik kulit jenis ini, maka akan ada efek perubahan warna menjadi lebih terang, karena itulah kulit ini dinamakan pull- up.\r\n\r\nII. Patina\r\n\r\nSemakin lama sepatu akan terlihat keren karena terbentuknya patina yang disebabkan oleh kandungan minyak alami pada kulit\r\n\r\nIII. Mudah Tergores\r\n\r\nLayaknya hati, kulit pull-up mudah tergores, tapi tinggal digosok pakai tangan, kulit akan kembali ke bentuk semula', '2018-12-06 02:48:54'),
(3, 'Suede Leather', 'suede-leather.jpg', 'Sebutan suede sebenarnya berasal dari bahasa Perancis “Gants de suède”, yang artinya “sarung tangan Swedia”. Jenis kulit ini pertama kali dihasilkan di Swedia untuk sarung tangan wanita, lalu dibawa ke Perancis, kemudian dari Perancis disalurkan ke seluruh dunia\r\n\r\nKulit suede mempunyai beberapa karakteristik yakni,\r\n\r\nI. Lembut\r\n\r\nKulit dengan ciri khas tekstur yang berbulu halus, tidak mengkilap, dan lembut merupakan hasil olahan dari sisi dalam kulit yang disamak.\r\n\r\nII. Rentan\r\n\r\nKarakteristik kulit suede yang lembut, berserabut, dan berpori membuatnya sangat rentan terhadap kotoran.', '2018-12-06 02:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_body` text NOT NULL,
  `product_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `age_id`, `category_id`, `material_id`, `product_name`, `product_slug`, `product_image`, `product_body`, `product_cost`, `created_at`) VALUES
(1, 2, 1, 3, 'JOUSEN Men\'s Oxford Classic Suede Leather Shoes', 'jousen-mans-oxford-classic-suede-leather-shoes', 'jousen-mans-oxford-classic-suede-leather-shoes.jpg', 'These shoes are comfortable and look great. They can be used for a dressy occasion or just casual and worn with jeans. If you\'re looking for a pair of stylish and comfortable shoes, then you\'ve found them!!', 560000, '2018-12-06 12:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_name`, `slug`, `slider_image`, `slider_body`, `created_at`) VALUES
(1, 'lorem ipsu', 'lorem-ipsu', 'master-slide-01.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-12-12 17:34:25'),
(2, 'lorem ipsum', 'lorem-ipsum', 'master-slide-02.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-12-12 17:35:43'),
(3, 'Lorem ipsum dolor', 'Lorem-ipsum-dolor', 'master-slide-03.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-12-12 17:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ages`
--
ALTER TABLE `ages`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `buy_ibfk_1` (`customer_id`);

--
-- Indexes for table `buy_detail`
--
ALTER TABLE `buy_detail`
  ADD PRIMARY KEY (`buy_detail_id`),
  ADD KEY `buydetail_ibfk_1` (`buy_id`),
  ADD KEY `buydetail_ibfk_2` (`product_id`);

--
-- Indexes for table `buy_tmp`
--
ALTER TABLE `buy_tmp`
  ADD PRIMARY KEY (`tmp_buy_id`),
  ADD KEY `tmpbuy_ibfk_1` (`product_id`),
  ADD KEY `tmpbuy_ibfk_2` (`customer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_ibfk_1` (`age_id`),
  ADD KEY `products_ibfk_2` (`category_id`),
  ADD KEY `products_ibfk_3` (`material_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ages`
--
ALTER TABLE `ages`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buy_detail`
--
ALTER TABLE `buy_detail`
  MODIFY `buy_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buy_tmp`
--
ALTER TABLE `buy_tmp`
  MODIFY `tmp_buy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `buy_detail`
--
ALTER TABLE `buy_detail`
  ADD CONSTRAINT `buydetail_ibfk_1` FOREIGN KEY (`buy_id`) REFERENCES `buy` (`buy_id`),
  ADD CONSTRAINT `buydetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `buy_tmp`
--
ALTER TABLE `buy_tmp`
  ADD CONSTRAINT `tmpbuy_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `tmpbuy_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`age_id`) REFERENCES `ages` (`age_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
