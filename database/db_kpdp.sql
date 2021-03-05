-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 06:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `kategori`, `tanggal`) VALUES
(1, '<p>\r\n\r\n<h1>Sekilas KBS</h1><p>Dengan bangga, kami sebagai Badan Usaha Pelabuhan, PT Krakatau Bandar Samudera memperkenalkan Pelabuhan Cigading sebagai pintu gerbang menuju keunggulan kompetitif regional dan global. Pelabuhan Cigading, sebagai pelabuhan terdalam di indonesia disiapkan untuk menangani segala jenis cargo baik curah kering, curah cair maupun container. Sejalan dengan meningkatnya kegiatan eksport import barang melalui laut, maka sarana dan prasarana terus dikembangkan, meliputi dermaga, ship unloader (crane), conveyor maupun pergudangan.</p><p>Kapasitas Pelabuhan Cigading saat ini mampu manangani cargo hingga 12 juta ton, dalam waktu dekat dan sesuai dengan perkembangan maka pelabuhan cigading akan mampu menangani hingga 20 – 30 juta ton. Dengan pengalaman luas dalam menangani aneka jenis cargo curah, Krakatau Bandar Samudera berkomitmen untuk menjadi pelabuhan penyedia layanan curah kelas dunia.</p>\r\n\r\n</p>', 'sekilas', '2021-01-22'),
(2, '<p>adsasdasdasdsd</p>', 'sertifikat', '2021-01-22'),
(3, '<p>dsas fefeg fdsdsfdsf</p>', 'corporate', '2021-01-22'),
(4, '<p>\r\n\r\n<p><strong>Visi</strong></p><p>Menjadi Perusahaan Pelabuhan Terkemuka di Indonesia yang Terintegrasi dengan Jasa Logistik.</p><p><strong>Misi</strong></p><p>Memberikan Pelayanan Bernilai Tambah di Bidang Kepelabuhanan dan Logistik Berbasis pada Konsep Smart Port yang Berwawasan Lingkungan.</p><p><strong>Nilai-nilai &nbsp;Budaya Perusahaan</strong></p><p>ACTION (Agile, Customer Focus, Technology, Integrity, One Team,Newness)</p><p><strong>Kebijakan Mutu:</strong></p><p><em>Kami selalu berkomitmen untuk menawarkan layanan yang memuaskan untuk pelanggan kami dengan cepat, efisien, nyaman, layanan aman dan handal dengan berpegang pada nilai-nilai utuh kompetensi ketulusan, inovasi, kehandalan dan integritas.</em></p><p><em>Meningkatkan kualitas - berkesinambungan / terus-menerus - melalui program transformasi bisnis - untuk mengejar - kepuasan pelanggan, karyawan, stakeholder, pemerintah dan masyarakat.</em></p>\r\n\r\n</p>', 'visi', '2021-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_02_27_072151_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_lengkap` datetime DEFAULT NULL,
  `sts` int(5) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `isi`, `gambar`, `tanggal`, `tanggal_lengkap`, `sts`, `link`) VALUES
(1, 'Apresiasi Konsumen Terakhir di Tahun 2020 dan Pertama di Tahun 2021', '<p>\r\n\r\n<p>Kamis, 31 Desember 2020, PT Krakatau Bandar Samudera (KBS) mengadakan acara refleksi akhir tahun 2020 dan menyambut awal tahun 2021 bersama para karyawan PT KBS dan konsumen melalui media virtual ZOOM.</p><p>Acara ini terdiri dari Tausiyah yang disampaikan oleh Ustadz Ismail Nahdi LC MA dilanjutkan dengan apresiasi terhadap konsumen terakhir di tahun 2020 dan pertama di tahun 2021.</p><p>Direktur Utama PT KBS, Alugoro Mulyowahyudi juga menyampaikan apresiasinya kepada Insan KBS &nbsp;atas semangat dan ketangguhannya dalam menghadapi tahun 2020 sehingga menghasilkan kinerja yang maksimal.</p>\r\n\r\n<br></p>', '20210122100820.jpeg', '2021-01-22', '2021-01-22 10:08:20', 0, NULL),
(2, 'Bongkar Perdana Kargo LPG di Pelabuhan Cigading', '<p>\r\n\r\nPT Krakatau Bandar Samudera (KBS) melakukan pelayanan perdana pembongkaran kargo Liquid Petroleum Gas (LPG) milik PT Kimia Yasa di Pelabuhan Cigading, Cilegon.<br><br>Pembongkaran ini dilakukan oleh PT Multi Sentana Baja yang merupakan anak usaha PT KBS dengan total tonase LPG sebesar 1.457 MT. PT KBS berkomitmen untuk terus meningkatkan pelayanan melalui berbagai inovasi.\r\n\r\n<br></p>', '20210122102046.jpeg', '2021-01-22', '2021-01-22 10:20:46', 0, NULL),
(3, 'Penjualan barang terbaru', '<p>\r\n\r\n<div><div><p>Many businesses, large and small, have a huge source of great ideas that can help them improve, innovate, and grow, and yet so many of these companies never think of using this amazing corporate asset. What is this highly valuable asset? Its own people. Says Morgan Fraud, the author of The Thinking Corporation, “Given that we are all capable of contributing new ideas, the question becomes how do you successfully generate, capture, process and implement ideas?” Becoming an organization capable of answering this question can benefit in a number of ways:</p></div></div><div><div><div><div><div><div><ul><li><strong>Growth through innovation/creativity:</strong><br>Rather than be constrained by ideas for new products, services and new markets coming from just a few people, a Thinking Corporation can tap into the employees.</li><li><strong>Increased profits:</strong><br>The corporation will experience an increase in profits due to savings in operating costs as well as sales from new products, services and ventures.</li></ul></div></div></div></div></div><div><div><div><div><div><ul><li><strong>Higher business values:</strong><br>The link between profits and business value means that the moment a corporation creates a new sustainable level of profit, the business value is adjusted accordingly.</li><li><strong>Lower staff turnover:</strong><br>This, combined with the culture that must exist for innovation and creativity to flourish, means that new employees will be attracted to the organization.</li></ul></div></div></div></div></div></div>\r\n\r\n<br></p>', '20210123030209.jpeg', '2021-01-23', '2021-01-23 03:02:09', 0, 'Penjualan_barang_terbaru');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uconbeton@gmail.com', '$2y$10$avsDCljzsGz8L0Ec08kkHuMNCq/J4yQ11aTaT6sWmxPkb/SmOjH26', '2020-03-06 00:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ucon beton', NULL, 'uconbetoddn@gmail.com', NULL, '$2y$10$4DMxXwuFR6nfLutHWg2rg.5bHZ4DkOLesDG35TWuj04D5zlJIyaY.', NULL, '2020-02-27 01:45:59', '2020-02-27 01:45:59'),
(2, 'beton', NULL, 'betonucon@gmail.com', NULL, '$2y$10$OzI7Lrpc64V15jNI1GckMOcUCwELdlylyXVACadRUZKdJt8WBDw3O', NULL, '2020-02-27 01:48:47', '2020-02-27 01:48:47'),
(3, 'ucon', NULL, 'uconbeton@gmail.com', NULL, '$2y$10$g/ck8IFPtmB9TZz65xWVpeUuOUMdrBGgcB7RIHyxXDaKZxWkNIZK.', NULL, '2020-03-02 19:35:15', '2020-03-02 19:35:15'),
(4, 'PAKET ALL', NULL, 'mailerucin@gmail.com', NULL, '$2y$10$uTw8kQ6mhQy3GVYQb8Rtcej0Y.R06StGUpDY33C882ElTZ5a2XVxC', NULL, '2021-01-13 23:19:02', '2021-01-13 23:19:02'),
(5, 'admin', 'admin', 'admin@example.com', NULL, '$2y$10$.oadQXOqmFmdsI8JOP9qX.E9ii2dbDFgvFqOPTmbTnSBQbcFY/OZK', NULL, '2021-01-21 20:46:17', '2021-01-21 20:46:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
