-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Agu 2023 pada 03.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persib_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasets`
--

CREATE TABLE `datasets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `emosional` int(11) NOT NULL,
  `perilaku` int(11) NOT NULL,
  `hiperaktif` int(11) NOT NULL,
  `temansebaya` int(11) NOT NULL,
  `sosial` int(11) NOT NULL,
  `hasil` enum('Kurang','Baik') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `do`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `do` (
`id` bigint(20) unsigned
,`user_id` int(11)
,`Dominasi_otak` double
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `gb`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `gb` (
`id` bigint(20) unsigned
,`user_id` int(11)
,`Kinestetik` double
,`Auditori` double
,`Visual` double
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `kme`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `kme` (
`id` bigint(20) unsigned
,`user_id` int(11)
,`Emosional` double
,`Perilaku` double
,`Hiperaktif` double
,`Teman_sebaya` double
,`Sosial` double
,`Total` double
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisoner_do`
--

CREATE TABLE `kuisoner_do` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `do1` varchar(255) NOT NULL,
  `do2` varchar(255) NOT NULL,
  `do3` varchar(255) NOT NULL,
  `do4` varchar(255) NOT NULL,
  `do5` varchar(255) NOT NULL,
  `do6` varchar(255) NOT NULL,
  `do7` varchar(255) NOT NULL,
  `do8` varchar(255) NOT NULL,
  `do9` varchar(255) NOT NULL,
  `do10` varchar(255) NOT NULL,
  `do11` varchar(255) NOT NULL,
  `do12` varchar(255) NOT NULL,
  `do13` varchar(255) NOT NULL,
  `do14` varchar(255) NOT NULL,
  `do15` varchar(255) NOT NULL,
  `do16` varchar(255) NOT NULL,
  `do17` varchar(255) NOT NULL,
  `do18` varchar(255) NOT NULL,
  `do19` varchar(255) NOT NULL,
  `do20` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuisoner_do`
--

INSERT INTO `kuisoner_do` (`id`, `user_id`, `do1`, `do2`, `do3`, `do4`, `do5`, `do6`, `do7`, `do8`, `do9`, `do10`, `do11`, `do12`, `do13`, `do14`, `do15`, `do16`, `do17`, `do18`, `do19`, `do20`, `created_at`, `updated_at`) VALUES
(1, 3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2023-08-07 05:20:12', '2023-08-07 05:20:12'),
(2, 4, '0', '1', '1', '1', '1', '1', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '1', '1', '2023-08-07 07:07:22', '2023-08-07 07:07:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisoner_gb`
--

CREATE TABLE `kuisoner_gb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `gb1` varchar(255) NOT NULL,
  `gb2` varchar(255) NOT NULL,
  `gb3` varchar(255) NOT NULL,
  `gb4` varchar(255) NOT NULL,
  `gb5` varchar(255) NOT NULL,
  `gb6` varchar(255) NOT NULL,
  `gb7` varchar(255) NOT NULL,
  `gb8` varchar(255) NOT NULL,
  `gb9` varchar(255) NOT NULL,
  `gb10` varchar(255) NOT NULL,
  `gb11` varchar(255) NOT NULL,
  `gb12` varchar(255) NOT NULL,
  `gb13` varchar(255) NOT NULL,
  `gb14` varchar(255) NOT NULL,
  `gb15` varchar(255) NOT NULL,
  `gb16` varchar(255) NOT NULL,
  `gb17` varchar(255) NOT NULL,
  `gb18` varchar(255) NOT NULL,
  `gb19` varchar(255) NOT NULL,
  `gb20` varchar(255) NOT NULL,
  `gb21` varchar(255) NOT NULL,
  `gb22` varchar(255) NOT NULL,
  `gb23` varchar(255) NOT NULL,
  `gb24` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuisoner_gb`
--

INSERT INTO `kuisoner_gb` (`id`, `user_id`, `gb1`, `gb2`, `gb3`, `gb4`, `gb5`, `gb6`, `gb7`, `gb8`, `gb9`, `gb10`, `gb11`, `gb12`, `gb13`, `gb14`, `gb15`, `gb16`, `gb17`, `gb18`, `gb19`, `gb20`, `gb21`, `gb22`, `gb23`, `gb24`, `created_at`, `updated_at`) VALUES
(1, 3, '1', '2', '2', '3', '1', '3', '3', '2', '1', '1', '1', '2', '1', '2', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '2023-08-07 05:19:52', '2023-08-07 05:19:52'),
(2, 4, '3', '2', '2', '3', '2', '3', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '3', '2', '2', '2', '2', '2023-08-07 07:03:09', '2023-08-07 07:03:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisoner_kme`
--

CREATE TABLE `kuisoner_kme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `kme1` varchar(255) NOT NULL,
  `kme2` varchar(255) NOT NULL,
  `kme3` varchar(255) NOT NULL,
  `kme4` varchar(255) NOT NULL,
  `kme5` varchar(255) NOT NULL,
  `kme6` varchar(255) NOT NULL,
  `kme7` varchar(255) NOT NULL,
  `kme8` varchar(255) NOT NULL,
  `kme9` varchar(255) NOT NULL,
  `kme10` varchar(255) NOT NULL,
  `kme11` varchar(255) NOT NULL,
  `kme12` varchar(255) NOT NULL,
  `kme13` varchar(255) NOT NULL,
  `kme14` varchar(255) NOT NULL,
  `kme15` varchar(255) NOT NULL,
  `kme16` varchar(255) NOT NULL,
  `kme17` varchar(255) NOT NULL,
  `kme18` varchar(255) NOT NULL,
  `kme19` varchar(255) NOT NULL,
  `kme20` varchar(255) NOT NULL,
  `kme21` varchar(255) NOT NULL,
  `kme22` varchar(255) NOT NULL,
  `kme23` varchar(255) NOT NULL,
  `kme24` varchar(255) NOT NULL,
  `kme25` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuisoner_kme`
--

INSERT INTO `kuisoner_kme` (`id`, `user_id`, `kme1`, `kme2`, `kme3`, `kme4`, `kme5`, `kme6`, `kme7`, `kme8`, `kme9`, `kme10`, `kme11`, `kme12`, `kme13`, `kme14`, `kme15`, `kme16`, `kme17`, `kme18`, `kme19`, `kme20`, `kme21`, `kme22`, `kme23`, `kme24`, `kme25`, `created_at`, `updated_at`) VALUES
(1, 3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2023-08-07 05:20:26', '2023-08-07 05:20:26'),
(2, 4, '2', '1', '1', '1', '0', '0', '2', '1', '2', '1', '2', '0', '1', '1', '2', '1', '2', '0', '1', '1', '2', '0', '0', '1', '1', '2023-08-07 07:13:57', '2023-08-07 07:13:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_31_074019_create_kuisoner_gb_table', 1),
(6, '2021_12_31_074140_create_kuisoner_do_table', 1),
(7, '2021_12_31_074212_create_kuisoner_kme_table', 1),
(8, '2021_12_31_074407_create_rekap_table', 1),
(9, '2022_01_04_032624_create_rekap_do_table', 1),
(10, '2022_01_04_033152_create_rekap_kme_table', 1),
(11, '2022_01_09_071212_create_siswas_table', 1),
(12, '2022_01_27_014952_create_datasets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_do`
--

CREATE TABLE `rekap_do` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `rdo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_gb`
--

CREATE TABLE `rekap_gb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `rgb_audiotori` int(11) NOT NULL,
  `rgb_visual` int(11) NOT NULL,
  `rgb_kinestetik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_kme`
--

CREATE TABLE `rekap_kme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `rk_emosional` int(11) NOT NULL,
  `rk_perilaku` int(11) NOT NULL,
  `rk_hiperaktif` int(11) NOT NULL,
  `rk_temansebaya` int(11) NOT NULL,
  `rk_sosial` int(11) NOT NULL,
  `rk_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `rombel` varchar(255) NOT NULL,
  `rayon` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `user_id`, `nama`, `nis`, `rombel`, `rayon`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, '3', 'Jikri Ramadhan', '100090009', 'RPL', 'al-ikrom 2', '085772307968', '2023-08-07 05:18:21', '2023-08-07 05:18:21'),
(2, '4', 'ZIDAN', '100090008', 'RPL', 'MALANG', '085772307968', '2023-08-07 06:58:32', '2023-08-07 06:58:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('ortu','siswa','admin') DEFAULT 'siswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aziz', 'aziz@gmail.com', NULL, '$2y$10$VkrVh5vmH3MpfvqVRBMWx..h9ECH2Aj8EmEaB2P29.O/2Ren/2pgK', 'admin', NULL, NULL, NULL),
(3, 'jikri', 'jikri@gmail.com', NULL, '$2y$10$8bQB7QILyiWqWzh.7rwhH.QYznvmVF3UPW7tkWATgQRgzQQy/ASyO', 'siswa', NULL, '2023-08-07 05:18:21', '2023-08-07 05:18:21'),
(4, 'zidan', 'zidan@gmail.com', NULL, '$2y$10$/6o3.zRnRvthPxHNsLDkXOqwkjLt5xkRfEmqPnU0zunNAhSeTq9MG', 'siswa', NULL, '2023-08-07 06:58:32', '2023-08-07 06:58:32');

-- --------------------------------------------------------

--
-- Struktur untuk view `do`
--
DROP TABLE IF EXISTS `do`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `do`  AS   (select `kuisoner_do`.`id` AS `id`,`kuisoner_do`.`user_id` AS `user_id`,`kuisoner_do`.`do1` + `kuisoner_do`.`do2` + `kuisoner_do`.`do3` + `kuisoner_do`.`do4` + `kuisoner_do`.`do5` + `kuisoner_do`.`do6` + `kuisoner_do`.`do7` + `kuisoner_do`.`do8` + `kuisoner_do`.`do9` + `kuisoner_do`.`do10` + `kuisoner_do`.`do11` + `kuisoner_do`.`do12` + `kuisoner_do`.`do13` + `kuisoner_do`.`do14` + `kuisoner_do`.`do15` + `kuisoner_do`.`do16` + `kuisoner_do`.`do17` + `kuisoner_do`.`do18` + `kuisoner_do`.`do9` + `kuisoner_do`.`do20` AS `Dominasi_otak`,`kuisoner_do`.`created_at` AS `created_at`,`kuisoner_do`.`updated_at` AS `updated_at` from `kuisoner_do`)  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `gb`
--
DROP TABLE IF EXISTS `gb`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gb`  AS   (select `kuisoner_gb`.`id` AS `id`,`kuisoner_gb`.`user_id` AS `user_id`,`kuisoner_gb`.`gb7` + `kuisoner_gb`.`gb10` + `kuisoner_gb`.`gb18` + `kuisoner_gb`.`gb19` + `kuisoner_gb`.`gb20` + `kuisoner_gb`.`gb21` + `kuisoner_gb`.`gb22` + `kuisoner_gb`.`gb24` AS `Kinestetik`,`kuisoner_gb`.`gb3` + `kuisoner_gb`.`gb6` + `kuisoner_gb`.`gb12` + `kuisoner_gb`.`gb13` + `kuisoner_gb`.`gb14` + `kuisoner_gb`.`gb15` + `kuisoner_gb`.`gb16` + `kuisoner_gb`.`gb17` AS `Auditori`,`kuisoner_gb`.`gb1` + `kuisoner_gb`.`gb2` + `kuisoner_gb`.`gb4` + `kuisoner_gb`.`gb5` + `kuisoner_gb`.`gb8` + `kuisoner_gb`.`gb9` + `kuisoner_gb`.`gb11` + `kuisoner_gb`.`gb23` AS `Visual`,`kuisoner_gb`.`created_at` AS `created_at`,`kuisoner_gb`.`updated_at` AS `updated_at` from `kuisoner_gb`)  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `kme`
--
DROP TABLE IF EXISTS `kme`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kme`  AS   (select `kuisoner_kme`.`id` AS `id`,`kuisoner_kme`.`user_id` AS `user_id`,`kuisoner_kme`.`kme3` + `kuisoner_kme`.`kme8` + `kuisoner_kme`.`kme13` + `kuisoner_kme`.`kme16` + `kuisoner_kme`.`kme24` AS `Emosional`,`kuisoner_kme`.`kme5` + `kuisoner_kme`.`kme7` + `kuisoner_kme`.`kme12` + `kuisoner_kme`.`kme18` + `kuisoner_kme`.`kme22` AS `Perilaku`,`kuisoner_kme`.`kme2` + `kuisoner_kme`.`kme10` + `kuisoner_kme`.`kme15` + `kuisoner_kme`.`kme21` + `kuisoner_kme`.`kme25` AS `Hiperaktif`,`kuisoner_kme`.`kme6` + `kuisoner_kme`.`kme11` + `kuisoner_kme`.`kme14` + `kuisoner_kme`.`kme19` + `kuisoner_kme`.`kme23` AS `Teman_sebaya`,`kuisoner_kme`.`kme1` + `kuisoner_kme`.`kme4` + `kuisoner_kme`.`kme9` + `kuisoner_kme`.`kme17` + `kuisoner_kme`.`kme20` AS `Sosial`,`kuisoner_kme`.`kme3` + `kuisoner_kme`.`kme8` + `kuisoner_kme`.`kme13` + `kuisoner_kme`.`kme16` + `kuisoner_kme`.`kme24` + `kuisoner_kme`.`kme5` + `kuisoner_kme`.`kme7` + `kuisoner_kme`.`kme12` + `kuisoner_kme`.`kme18` + `kuisoner_kme`.`kme22` + `kuisoner_kme`.`kme2` + `kuisoner_kme`.`kme10` + `kuisoner_kme`.`kme15` + `kuisoner_kme`.`kme21` + `kuisoner_kme`.`kme25` + `kuisoner_kme`.`kme6` + `kuisoner_kme`.`kme11` + `kuisoner_kme`.`kme14` + `kuisoner_kme`.`kme19` + `kuisoner_kme`.`kme23` AS `Total`,`kuisoner_kme`.`created_at` AS `created_at`,`kuisoner_kme`.`updated_at` AS `updated_at` from `kuisoner_kme`)  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datasets`
--
ALTER TABLE `datasets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kuisoner_do`
--
ALTER TABLE `kuisoner_do`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisoner_gb`
--
ALTER TABLE `kuisoner_gb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisoner_kme`
--
ALTER TABLE `kuisoner_kme`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rekap_do`
--
ALTER TABLE `rekap_do`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap_gb`
--
ALTER TABLE `rekap_gb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap_kme`
--
ALTER TABLE `rekap_kme`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datasets`
--
ALTER TABLE `datasets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuisoner_do`
--
ALTER TABLE `kuisoner_do`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuisoner_gb`
--
ALTER TABLE `kuisoner_gb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuisoner_kme`
--
ALTER TABLE `kuisoner_kme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekap_do`
--
ALTER TABLE `rekap_do`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekap_gb`
--
ALTER TABLE `rekap_gb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekap_kme`
--
ALTER TABLE `rekap_kme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
