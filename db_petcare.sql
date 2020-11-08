-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2020 pada 15.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petcare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regis_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_perkembangan`
--

CREATE TABLE `hasil_perkembangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kuis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_perkembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `P1` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P3` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P4` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P9` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q3` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q4` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q5` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q6` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q7` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Q8` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '2', '1', '2', '1', '2', '1', '2', '1', '2', '2', '1', '1', '2', '2020-11-08 03:50:44', '2020-11-08 03:50:44'),
(2, '2', '1', '2', '1', '2', '1', '2', '1', '2', '2', '1', '2', '1', '2', '1', '2', '2020-11-08 05:16:46', '2020-11-08 05:16:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis_perkembangan`
--

CREATE TABLE `kuis_perkembangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_kuis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kuis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_05_041139_create_admin_table', 1),
(4, '2020_11_05_041413_create_hasil_perkembangan_table', 1),
(5, '2020_11_05_041448_create_kuis_perkembangan_table', 1),
(6, '2020_11_05_041510_periode_perkembangan_table', 1),
(7, '2020_11_05_041532_create_pet_table', 1),
(8, '2020_11_05_041559_create_userregistration_table', 1),
(9, '2020_11_06_014951_create_table_kuisioner', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_perkembangan`
--

CREATE TABLE `periode_perkembangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan_periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pet`
--

CREATE TABLE `pet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namahewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenishewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `userregistration`
--

CREATE TABLE `userregistration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regis_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koderole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userrole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wasila Maulidiyah', 'admin', 'admin@gmail.com', NULL, '$2y$10$XWdbbeW/FY76B0ErNsHn/u8OI39SPA.6mmTCc3Bsg.8vt.4Kf.3uu', NULL, '2020-11-08 03:49:38', '2020-11-08 03:49:38'),
(2, 'Jihan', 'admin', 'jihan123@gmail.com', NULL, '$2y$10$MJPx/TztJu60IV71hwsKBeGIsc/lT58F4Lfh3B/2FJh2z1jDB5MlC', NULL, '2020-11-08 05:13:07', '2020-11-08 05:13:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_perkembangan`
--
ALTER TABLE `hasil_perkembangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuis_perkembangan`
--
ALTER TABLE `kuis_perkembangan`
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
-- Indeks untuk tabel `periode_perkembangan`
--
ALTER TABLE `periode_perkembangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userregistration`
--
ALTER TABLE `userregistration`
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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_perkembangan`
--
ALTER TABLE `hasil_perkembangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuis_perkembangan`
--
ALTER TABLE `kuis_perkembangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `periode_perkembangan`
--
ALTER TABLE `periode_perkembangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pet`
--
ALTER TABLE `pet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
