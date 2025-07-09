-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2025 pada 00.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0f0fa580e6eca429f3adad4dedb32d01', 'i:1;', 1751664304),
('0f0fa580e6eca429f3adad4dedb32d01:timer', 'i:1751664304;', 1751664304),
('99f3cbb7dbf5bd092a217f293731b916', 'i:1;', 1751659755),
('99f3cbb7dbf5bd092a217f293731b916:timer', 'i:1751659755;', 1751659755),
('c845c27f60d32f030e0e1914b94235c6', 'i:1;', 1751666648),
('c845c27f60d32f030e0e1914b94235c6:timer', 'i:1751666648;', 1751666648),
('dc44958e29ffba8b810d21377ae366b5', 'i:2;', 1751667003),
('dc44958e29ffba8b810d21377ae366b5:timer', 'i:1751667003;', 1751667003);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_14_101047_create_tb_categories_table', 1),
(5, '2024_06_14_101358_create_tb_catalogues_table', 1),
(6, '2024_06_14_101521_create_tb_orders_table', 1),
(7, '2024_06_14_102442_create_tb_settings_table', 1),
(8, '2024_06_14_103326_add_two_factor_columns_to_users_table', 1),
(9, '2024_06_14_103842_add_new_columns_at_users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rB7osV921MfgSURfmPQnEUz4jQY27Q6RzEJEucQx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidTd1dXBYcnRTNVRnbWxjdnQwSzBWY0tGdTBxcjg5SlVPT0hhbEZJWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9vcmRlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1751667006);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_catalogues`
--

CREATE TABLE `tb_catalogues` (
  `catalogue_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_catalogues`
--

INSERT INTO `tb_catalogues` (`catalogue_id`, `image`, `package_name`, `description`, `price`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'storage/catalogue/_Mevah_dan_Wahh_Ngenahhh.jpg', 'Mevah dan Wahh Ngenahhh', 'jika anda memilih pasti puas rohani dan  jasmani', 40000000, 1, 1, '2025-07-04 14:22:37', '2025-07-04 14:31:22'),
(2, 'storage/catalogue/_Simpel_but_elegant.jpg', 'Simpel but elegant', 'Dekorasi, MUA, Entertaintment, Dokumentasi, Wedding Organizer.', 20000000, 2, 1, '2025-07-04 14:34:29', '2025-07-04 14:34:29'),
(3, 'storage/catalogue/_Minimalize_but_stylize.jpg', 'Minimalize but stylize', '100 Kursi, 1 set Dekor,1 Panggung', 10000000, 3, 1, '2025-07-04 14:36:30', '2025-07-04 14:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_categories`
--

CREATE TABLE `tb_categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_categories`
--

INSERT INTO `tb_categories` (`category_id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'All in one', 'Full Set', 1, '2025-07-04 14:17:59', '2025-07-04 14:17:59'),
(2, 'Intimate', 'ala kadarnya', 1, '2025-07-04 14:18:29', '2025-07-04 14:18:29'),
(3, 'Organize Only', 'Mc dan Peralatan', 1, '2025-07-04 14:19:01', '2025-07-04 14:19:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `catalogue_id` bigint(20) UNSIGNED NOT NULL,
  `wedding_date` date NOT NULL,
  `status` enum('requested','approved') NOT NULL DEFAULT 'requested',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `catalogue_id`, `wedding_date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2025-07-15', 'requested', 4, '2025-07-04 14:38:29', '2025-07-04 14:38:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_settings`
--

CREATE TABLE `tb_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `time_business_hour` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `role`) VALUES
(1, 'Administrator', 'admin@example.com', '2025-07-04 13:01:45', '$2y$12$62E36eqW3ibdno0EGdg00uo4Oj30KBCvcwQv4H/rllGXmT2FRzUq.', NULL, NULL, NULL, 'LheUXP2aGGZbzFri2iXdNSwu4Ilv6G5cZSqg4flL3HJWzhLhl1SN10IKaVuD', '2025-07-04 13:01:46', '2025-07-04 13:01:46', '08123456789', 'admin'),
(2, 'User', 'user@example.com', '2025-07-04 13:01:46', '$2y$12$QHQD1GwJBs0z4sserZ0JgOINcfJUit9S0UsraxkHbuIevphY.LpQe', NULL, NULL, NULL, 'UfNNr0Xwx4YLALDbjwlL5Tnl3qQXXhKPAE0OwQF5EuNtWDknp8knL3BrJlbl', '2025-07-04 13:01:46', '2025-07-04 13:01:46', '08123456789', 'user'),
(3, 'Ena', 'enacu@gmail.com', NULL, '$2y$12$TIwNRvGRJ5JjNl2pCj7Ize0MCBkvvnikYSxSqAIlPxUwA6bBEfXbW', NULL, NULL, NULL, NULL, '2025-07-04 13:02:51', '2025-07-04 13:02:51', '0898398787428', 'user'),
(4, 'Laras Ayu', 'larasayu@gmail.com', NULL, '$2y$12$ZzcEYziPZH3r2.GMc9n0UOEhjC1H.n2zIsi0zrarj526QWK3G2EyK', NULL, NULL, NULL, NULL, '2025-07-04 14:38:02', '2025-07-04 14:38:02', '087787898877', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  ADD PRIMARY KEY (`catalogue_id`),
  ADD KEY `tb_catalogues_category_id_foreign` (`category_id`),
  ADD KEY `tb_catalogues_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `tb_categories_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `tb_order_catalogue_id_foreign` (`catalogue_id`),
  ADD KEY `tb_order_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_settings_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  MODIFY `catalogue_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  ADD CONSTRAINT `tb_catalogues_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tb_categories` (`category_id`),
  ADD CONSTRAINT `tb_catalogues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD CONSTRAINT `tb_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_catalogue_id_foreign` FOREIGN KEY (`catalogue_id`) REFERENCES `tb_catalogues` (`catalogue_id`),
  ADD CONSTRAINT `tb_order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD CONSTRAINT `tb_settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
