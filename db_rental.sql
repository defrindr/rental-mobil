-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2019 at 10:11 PM
-- Server version: 10.1.40-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_module`
--

CREATE TABLE `admin_module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_module`
--

INSERT INTO `admin_module` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Laila', 'admin@rental.com', '$2y$10$ZOWTBgqKGdKXYNEBpTwq6eaUt/aXnzNNArwPWDSWe399hThLno6ma', '2019-09-21 03:41:46', '2019-09-23 22:10:27'),
(2, 'Hesti', 'defrindr@gmail.com', '$2y$10$ZOWTBgqKGdKXYNEBpTwq6eaUt/aXnzNNArwPWDSWe399hThLno6ma', '2019-09-22 05:11:20', '2019-09-22 22:38:23'),
(4, 'Vanya', 'ymahendra@gmail.com', '$2y$10$D/AK0rC57BgmXeqYqdOfZeF6AKQBeFnH5IpuxpmogpOQo90Z/kvUe', '2019-09-21 13:34:43', '2019-09-23 13:38:07'),
(5, 'Indah', 'bsuwarno@prabowo.my.id', '$2y$10$R7jZZNmoz/35X2gq31bzS.ZNVnx5eRK9GjfmSpU9wb8w655F074Fq', '2019-09-22 03:17:28', '2019-09-22 21:58:30'),
(7, 'Sakti', 'jwibisono@yahoo.com', '$2y$10$RO8KkIkcnbDNvlfH3p2//.bPgwBYrLVRxjoIK8LWOqoyb1tw/v6dC', '2019-09-21 11:16:25', '2019-09-23 22:38:00'),
(9, 'Novi', 'gaman09@gmail.com', '$2y$10$HJ6/bqoSqIe8ApnN/VyL5OKbGxOAMeJv5/C5OV3FB5QKi4WLvwzE2', '2019-09-21 03:11:26', '2019-09-23 11:20:10'),
(10, 'Karya', 'talia45@puspita.web.id', '$2y$10$0sAeOF7.Ikwf5lU3v6i5aOHzgKhuETnBRf5XSBQSrz/0exdhEFV/u', '2019-09-22 08:39:19', '2019-09-23 22:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `costumers_module`
--

CREATE TABLE `costumers_module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costumers_module`
--

INSERT INTO `costumers_module` (`id`, `nama`, `no_ktp`, `alamat`, `no_hp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Taufik Yahya Utama S.Gz', '361411291237566844', 'Kpg. Bacang No. 235, Pekanbaru 87474, SulTeng', '+3824489638367', 'purwadi.susanti@yahoo.com', '2019-09-20 21:14:20', '2019-09-24 08:28:50'),
(3, 'Jamalia Handayani M.Ak', '760453378903467553', 'Jln. Bakin No. 369, Tomohon 63203, SulBar', '+1901010583432', 'daliman.utama@pratama.name', '2019-09-21 22:22:30', '2019-09-22 21:39:39'),
(4, 'Hendra Pradana', '228495724172168073', 'Ds. Banceng Pondok No. 877, Bogor 72085, SulTra', '+2943380983075', 'anastasia64@saragih.biz', '2019-09-22 07:27:55', '2019-09-23 11:49:16'),
(5, 'Gina Nuraini', '675140680052960006', 'Jln. Pasteur No. 735, Banjarbaru 75683, KalTim', '+8565601355148', 'wasis.pradana@haryanti.my.id', '2019-09-22 07:30:46', '2019-09-23 03:10:19'),
(6, 'Jail Sinaga S.Kom', '850908666285671523', 'Kpg. Ki Hajar Dewantara No. 521, Bitung 77086, SulUt', '+3487524628508', 'namaga.safina@haryanti.web.id', '2019-09-21 03:51:15', '2019-09-23 14:23:55'),
(7, 'Yani Dina Riyanti M.Farm', '984192956307374503', 'Jr. Baha No. 487, Administrasi Jakarta Utara 49090, SulTeng', '+8440288638149', 'tantri46@nasyidah.go.id', '2019-09-22 02:13:12', '2019-09-22 21:44:47'),
(8, 'Agus Situmorang S.E.', '719469837529610885', 'Jr. BKR No. 462, Gunungsitoli 10097, DIY', '+2292328949536', 'ulva.wahyuni@yahoo.com', '2019-09-21 03:51:55', '2019-09-23 19:26:59'),
(9, 'Vanya Nasyiah', '825802997279442618', 'Ki. Bakti No. 457, Bandung 25506, JaBar', '+6772800862846', 'pratiwi.cecep@yahoo.com', '2019-09-21 13:53:58', '2019-09-22 14:39:24'),
(10, 'Harto Waluyo S.E.I', '561919500308806621', 'Dk. Soekarno Hatta No. 226, Subulussalam 75495, Maluku', '+3729832823093', 'yunita94@mayasari.info', '2019-09-21 19:09:44', '2019-09-23 01:08:35'),
(11, 'Hamima Samiah Halimah S.IP', '585396067744149661', 'Gg. Daan No. 909, Bontang 54222, DIY', '+2544274404550', 'iusada@gmail.co.id', '2019-09-21 13:55:59', '2019-09-23 00:42:38'),
(12, 'Margana Santoso', '264755093282173921', 'Psr. Bakit  No. 968, Tidore Kepulauan 41907, MalUt', '+6872964232722', 'prabowo.sinaga@maulana.ac.id', '2019-09-20 11:13:31', '2019-09-24 00:16:27'),
(13, 'Anggabaya Ardianto', '500390819488455683', 'Jln. Daan No. 723, Administrasi Jakarta Pusat 96355, SulUt', '+5720291448938', 'usamah.yahya@kusmawati.org', '2019-09-21 06:26:52', '2019-09-24 05:02:26'),
(14, 'Uchita Namaga', '821438245582960982', 'Ds. Baik No. 883, Makassar 21445, NTT', '+7339589024736', 'novi.anggraini@nuraini.or.id', '2019-09-21 10:10:44', '2019-09-24 04:18:38'),
(15, 'Rina Sudiati', '439963533388455155', 'Jr. Salatiga No. 990, Kotamobagu 62911, Maluku', '+2769509756078', 'ufarida@kurniawan.name', '2019-09-21 15:39:46', '2019-09-24 02:21:25'),
(16, 'Lantar Simanjuntak S.Sos', '436107618663117508', 'Psr. Bhayangkara No. 344, Administrasi Jakarta Pusat 81215, SumUt', '+3034815368141', 'zelaya68@gmail.co.id', '2019-09-21 21:32:45', '2019-09-23 11:00:40'),
(17, 'Diana Handayani', '698197242404343521', 'Ki. Raya Ujungberung No. 591, Sawahlunto 39067, Bengkulu', '+8514847695513', 'irawan.prasetya@gmail.com', '2019-09-20 11:11:32', '2019-09-23 14:25:51'),
(18, 'Ika Astuti', '273604041987551436', 'Jr. Setia Budi No. 16, Metro 58372, SulBar', '+6312133829776', 'haryanti.oni@safitri.mil.id', '2019-09-21 21:33:10', '2019-09-23 04:59:27'),
(19, 'Iriana Astuti', '496376760694963783', 'Ki. Teuku Umar No. 131, Bontang 10784, SumUt', '+1388230407682', 'xnovitasari@yahoo.com', '2019-09-22 05:13:20', '2019-09-23 08:25:12'),
(20, 'Citra Najwa Mayasari', '639357791589520028', 'Dk. Suniaraja No. 525, Bekasi 36571, Bengkulu', '+9561906281189', 'tampubolon.dipa@gmail.co.id', '2019-09-20 22:44:32', '2019-09-22 10:09:21'),
(21, 'Daliman Radika Wahyudin S.E.I', '230259695791706526', 'Ds. Jambu No. 141, Gunungsitoli 94918, SumUt', '+7559230348215', 'ira06@fujiati.info', '2019-09-22 01:49:02', '2019-09-22 12:48:50'),
(22, 'Hasna Rahmawati', '586894697865841166', 'Ki. Cikutra Timur No. 120, Dumai 16015, Maluku', '+9634703441342', 'viktor.sihombing@gmail.co.id', '2019-09-21 15:11:54', '2019-09-22 17:51:08'),
(23, 'Belinda Hastuti', '379333950037458461', 'Psr. Tangkuban Perahu No. 438, Madiun 84828, Gorontalo', '+2872947117695', 'daruna.lailasari@wasita.desa.id', '2019-09-21 12:01:44', '2019-09-22 16:02:13'),
(24, 'Farhunnisa Sudiati', '910120955117298748', 'Ki. Jambu No. 961, Administrasi Jakarta Utara 53773, KepR', '+6982489306246', 'wahyudin.caket@yahoo.co.id', '2019-09-22 03:32:32', '2019-09-24 05:27:34'),
(25, 'Fathonah Kusmawati', '754651111772845209', 'Jln. R.E. Martadinata No. 582, Padangpanjang 90277, MalUt', '+1134788596398', 'jasmani.prastuti@usamah.biz', '2019-09-22 00:27:19', '2019-09-23 12:32:06'),
(26, 'Dwi Aris Saputra', '351047463468164505', 'Kpg. Hasanuddin No. 830, Blitar 21356, KalTim', '+4987533513237', 'karma92@usada.tv', '2019-09-20 11:44:49', '2019-09-22 15:16:06'),
(27, 'Kania Anggraini', '813255652426227151', 'Jr. Achmad Yani No. 654, Sabang 67559, Lampung', '+3331693955613', 'tirtayasa20@gmail.com', '2019-09-21 11:14:33', '2019-09-23 17:56:44'),
(28, 'Gina Qori Farida S.E.I', '755592425580250743', 'Dk. Bak Air No. 280, Administrasi Jakarta Barat 96876, SumBar', '+2836349099870', 'mandasari.viman@yahoo.co.id', '2019-09-22 08:40:16', '2019-09-22 18:07:24'),
(29, 'Saiful Hutapea M.Ak', '596627815126409620', 'Gg. Yoga No. 870, Tangerang Selatan 87863, SumUt', '+5906153307601', 'astuti.kambali@permata.co', '2019-09-21 05:02:51', '2019-09-22 09:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_22_121651_admin', 1),
(2, '2019_08_22_122405_mobil', 1),
(3, '2019_08_22_123116_costumers', 1),
(4, '2019_08_22_125758_pinjam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobil_module`
--

CREATE TABLE `mobil_module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_nomer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil_module`
--

INSERT INTO `mobil_module` (`id`, `merk`, `plat_nomer`, `harga`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Honda', 'Oa 098 51 Ah', 16000, 'Honda_Oa_098_51_Ah.jpg', 1, '2019-09-21 22:42:22', '2019-09-28 11:30:24'),
(2, 'Honda', 'Tw 727 25 Tk', 3000, 'Honda_Tw_727_25_Tk.jpg', 1, '2019-09-21 02:25:32', '2019-09-28 11:26:02'),
(3, 'Honda', 'Uw 452 17 Mk', 4000, 'Honda_Uw_452_17_Mk.jpg', 1, '2019-09-20 12:25:31', '2019-09-24 05:08:04'),
(4, 'Avanza', 'Vq 250 10 Ll', 12000, 'Honda_Vq_250_10_Ll.jpg', 1, '2019-09-21 01:36:26', '2019-09-28 11:32:38'),
(5, 'Marcedez', 'Ny 841 70 Eu', 4000, 'Honda_Ny_841_70_Eu.jpg', 1, '2019-09-20 18:00:22', '2019-09-23 02:58:00'),
(6, 'Honda', 'Fk 881 58 Yc', 10000, 'Honda_Fk_881_58_Yc.jpg', 1, '2019-09-22 03:07:28', '2019-09-22 09:01:59'),
(7, 'Honda', 'Eq 732 66 Di', 4000, 'Honda_Eq_732_66_Di.jpeg', 1, '2019-09-22 07:05:07', '2019-09-28 11:32:33'),
(10, 'Honda', 'ZXC 123 UWU', 3000, 'Honda_ZXC_123_UWU.jpg', 1, '2019-09-22 12:50:43', '2019-09-22 12:50:43'),
(11, 'Daihatsu', 'QAC 123 WW', 5000, 'Daihatsu_QAC_123_WW.jpg', 1, '2019-09-28 00:08:40', '2019-09-28 23:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_module`
--

CREATE TABLE `pinjam_module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mobil` bigint(20) UNSIGNED NOT NULL,
  `id_costumer` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_kembali` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjam_module`
--

INSERT INTO `pinjam_module` (`id`, `id_mobil`, `id_costumer`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `total`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 4, 20, '2019-09-16 09:10:00', '2019-09-18 11:10:00', 1, '600000', 2, '2019-09-22 09:11:01', '2019-09-22 11:16:03'),
(2, 3, 13, '2019-05-17 10:33:00', '2019-05-22 10:34:04', 1, '480071', 1, '2019-09-22 10:34:01', '2019-09-22 10:34:04'),
(4, 5, 20, '2019-09-16 13:35:00', '2019-09-23 02:58:00', 1, '629533', 1, '2019-09-22 13:35:05', '2019-09-23 02:58:00'),
(5, 3, 23, '2019-05-22 13:21:00', '2019-05-24 13:22:00', 1, '192000', 2, '2019-09-23 13:21:58', '2019-09-23 13:22:23'),
(6, 3, 20, '2019-09-24 05:07:00', '2019-09-25 05:07:00', 1, '96000', 1, '2019-09-24 05:07:48', '2019-09-24 05:08:04'),
(7, 7, 24, '2019-09-25 12:19:00', '2019-09-28 11:32:33', 1, '284903', 1, '2019-09-24 12:19:16', '2019-09-28 11:32:33'),
(8, 4, 21, '2019-07-28 11:32:00', '2019-07-28 11:32:38', 1, '126', 1, '2019-09-28 11:32:16', '2019-09-28 11:32:38'),
(9, 11, 23, '2019-09-28 23:22:00', '2019-10-01 23:22:00', 1, '360000', 1, '2019-09-28 23:22:37', '2019-09-28 23:23:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_module`
--
ALTER TABLE `admin_module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_module_username_unique` (`username`),
  ADD UNIQUE KEY `admin_module_email_unique` (`email`);

--
-- Indexes for table `costumers_module`
--
ALTER TABLE `costumers_module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `costumers_module_no_ktp_unique` (`no_ktp`),
  ADD UNIQUE KEY `costumers_module_no_hp_unique` (`no_hp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil_module`
--
ALTER TABLE `mobil_module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobil_module_plat_nomer_unique` (`plat_nomer`);

--
-- Indexes for table `pinjam_module`
--
ALTER TABLE `pinjam_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjam_module_id_mobil_foreign` (`id_mobil`),
  ADD KEY `pinjam_module_id_costumer_foreign` (`id_costumer`),
  ADD KEY `pinjam_module_created_by_foreign` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_module`
--
ALTER TABLE `admin_module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `costumers_module`
--
ALTER TABLE `costumers_module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobil_module`
--
ALTER TABLE `mobil_module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pinjam_module`
--
ALTER TABLE `pinjam_module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam_module`
--
ALTER TABLE `pinjam_module`
  ADD CONSTRAINT `pinjam_module_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admin_module` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pinjam_module_id_costumer_foreign` FOREIGN KEY (`id_costumer`) REFERENCES `costumers_module` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pinjam_module_id_mobil_foreign` FOREIGN KEY (`id_mobil`) REFERENCES `mobil_module` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
