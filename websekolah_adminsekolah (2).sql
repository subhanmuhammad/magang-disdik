-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 01:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah_adminsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `nama`, `tanggal`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'jalan jalan', '2022-04-08', 1, 2, '2022-04-25 20:10:09', '2022-04-25 20:10:09'),
(3, 'tes tes', '2022-05-17', 1, 2, '2022-05-12 01:04:22', '2022-05-12 01:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urutan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `gambar`, `urutan`, `user_id`, `created_at`, `updated_at`) VALUES
('BNR042120220880', 'BNR042120220882070608.jfif', 3, 1, '2022-04-21 00:06:08', '2022-04-21 00:06:08'),
('BNR051320221852', 'BNR051320221854025818.png', 2, 1, '2022-05-12 19:58:20', '2022-05-12 19:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plain_deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug`, `deskripsi`, `plain_deskripsi`, `penulis`, `gambar`, `user_id`, `created_at`, `updated_at`, `body`) VALUES
('GBR042620224081', 'musik dini hari', 'judul-kedua', 'immi judl pertama', 'judul kedua co a', 'rizall', 'GBR042820221040020310.jpg', 5, '2022-04-25 20:53:41', '2022-04-27 19:03:11', 'saya coba coba'),
('GBR042620224969', 'musdik', 'musik', 'musik', 'musik yuu yukkk', 'ariel noah', 'GBR042620224966014349.jfif', 3, '2022-04-25 18:43:49', '2022-04-25 19:09:11', ''),
('GBR051220220012', 'musik dini hari', 'judul-kedua', 'coba coba', 'inihcind', 'saya', 'GBR051220220015080200.JPG', 2, '2022-05-12 01:02:03', '2022-05-12 01:02:03', '<div>coba tes tes</div>');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_06_054918_create_banner_table', 1),
(6, '2022_04_06_055301_create_profil_table', 1),
(7, '2022_04_09_062354_create_beritas_table', 1),
(8, '2022_04_09_062538_create_banners_table', 1),
(9, '2022_04_09_063900_create_agendas_table', 1),
(10, '2022_04_09_064536_create_profil_jenis_table', 1),
(11, '2022_04_09_064719_create_sekolahs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_id` int(11) DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `jenis`, `deskripsi`, `sekolah_id`, `last_used_at`, `created_at`, `updated_at`) VALUES
(5, 'SEJARA SINGKAT', 'Pada tahun 1964, bertempat di gedung SMP Negeri 2 Palu Jalan Wolter Monginsidi Palu digagaslah berdirinya SGKP berstatus swasta dengan kepala sekolah Dra. Rahel Bugin. Setahun kemudian, yakni tahun 1965 berdirilah SGKP berstatus negeri. Berdirinya sekolah kepandaian putri ini tidak lepas dari dukungan penuh dari Gubernur Sulawesi Tengah yang kala itu dijabat oleh Anwar Gelar Datuk Baso Majo Nangkuni. Jurusan yang dibuka pada awal berdirinya adalah Menjahit dan Masak-Memasak. Di samping memperoleh dukungan dari pemerintah daerah Sulawesi Tengah, pemerintah pusat pun, yakni Departemen Pendidikan dan Kebudayaan memberikan dukungan secara hukum dengan menerbitkan SK Pendirian Nomor B3/600/Kej. Tanggal 25 September 1965. Sejak penerbitkan SK Pendirian itu, maka secara resmi di Sulawesi Tengah berdiri satu-satunya sekolah kepandaian putri yang berlokasi di Jalan RA kartini No. 14 Palu.\r\nSeiring dengan perjalanan waktu dan perkembangan zaman, terjadi beberapa kali pergantian nama dari SGKP ke SMK. Berikut ini adalah proses perubahan nama sekolah ini dari tahun 1965 sampai sekarang, sebagai berikut:\r\n1.	Tahun 1964, berdiri SGKP\r\n2.	Tahun 1965, berdiri SGKP berstatus negeri\r\n3.	Tahun 1970, berganti nama menjadi SKKKA (Sekolah Kejuruan Kesejahteraan Keluarga)\r\n4.	Tahun 1979, berubah nama menjadi SMKK (Sekolah Menengah Kesejahteraan Keluarga)\r\n5.	Tahun 1997 sampai sekarang, berganti nama menjadi SMK Negeri 1 Palu\r\nSejak berdirinya sekolah ini hingga sekarang telah terjadi beberapa kali pergantian kepemimpinan. Berikut ini adalah nama-nama Kepala SMK Negeri 1 Palu dari tahun 1964 sampai sekarang, sebagai berikut:\r\n1.	Tahun 1964, SGKP dipimpin oleh Dra. Rahel Bugin\r\n2.	Tahun 1965 sampai 1979, SGKP dipimpin oleh Ny. Kartini Pandan Yotolemba\r\n3.	Tahun 1980, sekolah ini dipimpin oleh Dra. Farida Lasahido, sementara Ny. Kartini Pandan dilantik menjadi pengawas di Kanwil P & K Provinsi Sulawesi Tengah\r\n4.	Tahun 1988, kepemimpinan diganti oleh Ny. Isah Dumalang Jodjo\r\n5.	Tahun 1988, Ny. Isah Dumalang purna tugas, kepemimpinan diganti oleh Dra. Rahmah Hi. Mongki sebagai pejabat sementara\r\n6.	Tahun 2000, berdasarkan Keputusan Menteri Pendidikan Nasional Republik Indonesia Nomor: 7877/A.2.I.2/KP/1999 tanggal 3 Desember 1999 dan terhitung tanggal 8 Februari 2000 Dra. Hj. Andi Simpursiah memimpin SMK Negeri 1 Palu\r\n7.	Pada tahun 2003, sesuai Surat Keputusan Wali Kota Palu Nomor: 59/82.2/KP/2003 tanggal 6 Agustus 2003, SMK Negeri 1 Palu dipimpin oleh Dra. Hj. Selvi Ladupa\r\n8.	Tahun 2013, berdasarkan Surat keputusan Wali Kota Palu Nomor: 821.2/150/BKD/2013, tanggal 25 Januari 2013, tentang pengangkatan Dra. Hj. Misran sebagai kepala SMK Negeri 1 Palu sampai sekarang menggantikan Dra. Hj. Selvi Ladupa yang selanjutnya dilantik menjadi pengawas di lingkungan Dinas Pendidikan dan Kebudayaan Kota Palu.\r\nSekolah ini sejak berdiri tahun 1964 sampai sekarang tetap berorientasi pada sekolah kejuruan yang berfokus pada pengembangan kompetensi kehalian. Sejak berdiri sampai sekarang jurusan kompetensi yang difokuskan sekolah ini adalah seperti berikut:\r\n1.	Tahun 1965, jurusan yang dibuka adalah Menjahit dan Masak-Memasak\r\n2.	Tahun 1970, dibuka satu jurusan lagi adalah Tata Laksana\r\n3.	Sejak tahun 1979 seiring dengan perubahan nama menjadi SMKK jurusan pun dikelompokkan: Menjahit ke kelompok Tata Busana, Masak-Memasak ke kelompok Tata Boga, dan ditambah satu jurusan lagi, yakni Tata Graha\r\n4.	Tahun 1990, di bawah kepemimpinan Ny. Isah Dumalang Jodjo mmembuka kembali dua jurusan, yakni Tata Rias dan Akomodasi Perhotelan. Dengan demikian, di tahun 1990 SMK Negeri 1 Palu sudah membuka 4 jurusan.\r\n5.	Tahun pelajaran 2013/2014 di masa kepemimpinan Dra. Hj. Selvi Ladupa dibuka satu program studi keahlian yaitu Teknologi Informasi dan Komputer dengan kosentrasi kompetensi pada Teknik Komputer dan Jaringan (TKJ). Dengan demikian SMK Negeri 1 Palu memiliki 2 Program Studi Keahlian, yakni (1) Pariwisata yang berfokus pada 4 kompetensi keahlian: (a) Perhotelan, (b) Tata Boga, (c) Tata Kecantikan, (d) Tata Busana, dan (2) Teknik Komputer dan Jaringan.\r\n6.	Farmasi Klinis Dan Komunitas (FKK)\r\n7.	Asisten Keperwatan (ASKEP)\r\nGuna membantu pengembangan pariwista di daerah Sulawesi Tengah, maka satu lagi kompetensi keahlian yang didorong oleh Pemerintah Daerah untuk dibuka di SMK Negeri 1 Palu adalah Usaha Perjalanan Wisata (UPW). Kompetensi keahlian ini dibuka di SMK Negri 1 Palu tahun 2018.', NULL, NULL, '2022-06-09 00:51:06', '2022-06-09 00:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `profil_jenis`
--

CREATE TABLE `profil_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'subhan', 'subhan@gmail.com', NULL, '$2y$10$oxX71E7fThTMEDXD2QlMueUGwlnhkri6laNJjhnh2U3e34KCc8xZ.', 'cQj5L6xDAItVDWQzbtaNxHPxoFhmal89EJFITdDKaAqsjujBIKTXF6rvuFbG', '2022-04-20 23:45:47', '2022-04-20 23:45:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
