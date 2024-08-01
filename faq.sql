-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 04:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loergrou_loergroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `ask` longtext NOT NULL,
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `ask`, `question`) VALUES
(2, ' Saya tidak mempunyai waktu untuk mengelola tapi ingin memiliki usaha coffeeshop atau F&B, apakah bisa saya join?', 'Sistem partnership dijalankan dengan loer group sebagai manajemen dan operator yang mengoperasikan kegiatan bisnis sehingga \r\npartner tidak pusing memikirkan operasional bisnisnya.'),
(3, 'Apakah saya akan mendapatkan informasi proses bisnis dan informasi keuangan secara transparan?', 'Loer group mengedepankan transparansi dalam pengelolaan bisnis sesuai prinsip-prinsip sistem tata Kelola bisnis yang baik dan berkelanjutan dengan memberikan gambaran seluruh potensi dan resiko bisnis di awal hingga laporan aktualisasi performa bisnis dalam bentuk laporan keuangan'),
(4, ' Apakah ini merupakan usaha baru dan akan sustain berkelanjutan?', 'Bisnis yang dikelola oleh loer group sudah sudah berdiri lebih dari 5 tahun dan malah berhasil mendapatkan pendanaan pengembangan bisnis pada masa pandemi covid.'),
(5, 'Berapa lama modal investasi kira-kira kembali dan bagaimana gambaran profitnya?', 'Bisnis loer group dijalan kan dengan risk management yang terstandar serta menerapkan pendekatan bisnis dengan prinsip GCG dan terbukti sudah memberikan return dan profit margin yang signifikan bagi para shareholdernya selama 5 tahun dengan rata-rata payback period kurang dari 2 tahun dan rata-rata annual yield investasi di atas 9% per tahun.'),
(6, 'Saya khawatir usaha tidak berjalan dan stagnan karena produk tidak fit dan tidak diterima marketnya?', 'Loer group menjalankan bisnis dengan mengedepankan inovasi produk dengan melalui tahapan product market fit dengan menyasar target pasar yang besar (tidak segmented) melalui rasa varian dan desain produk yang bisa diterima disemua kalangan sehingga bisa bersaing dengan competitor.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
