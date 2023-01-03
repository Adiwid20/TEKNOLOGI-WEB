-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Des 2022 pada 13.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categorys`
--

CREATE TABLE `categorys` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categorys`
--

INSERT INTO `categorys` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', NULL, NULL),
(2, 'Paket 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comunity_wisatas`
--

CREATE TABLE `comunity_wisatas` (
  `comunity_id` bigint(20) UNSIGNED NOT NULL,
  `comunity_name` varchar(255) NOT NULL,
  `comunity_descriptions` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comunity_wisatas`
--

INSERT INTO `comunity_wisatas` (`comunity_id`, `comunity_name`, `comunity_descriptions`, `created_at`, `updated_at`) VALUES
(1, 'Camperia', 'csahjcsdcucnksdbvfghyheuiwjenjdbfghre', NULL, NULL);

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
(5, '2022_12_14_175427_create_package_table', 1),
(6, '2022_12_14_235831_create_comunity_wisatas_table', 1),
(7, '2022_12_14_175427_create_packages_table', 2),
(8, '2022_12_17_061805_create_locations_table', 3),
(9, '2022_12_27_113518_categorys', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `comunity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_category` bigint(20) UNSIGNED DEFAULT NULL,
  `name_package` varchar(255) DEFAULT NULL,
  `img_package` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `facility` varchar(500) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`package_id`, `comunity_id`, `id_category`, `name_package`, `img_package`, `price`, `status`, `facility`, `descriptions`, `location`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Kecak Fire Dance Gianyar', 'KecakFireDanceGianyar', 'Rp100.000', 'Ready', 'Tempat duduk, Air minum, Foto Gratis', 'Pertunjukan Tari Kecak dan Api Bali, Tidak diketahui secara pasti dari mana tari Kecak berasal dan yang pertama kali dikembangkan, namun ada beberapa macam kesepakatan bahwa Kecak Bali pertama kali dikembangkan menjadi sebuah seni pertunjukan di desa Bona, Gianyar, sebagai tambahan pengetahuan tari Kecak. pada mulanya merupakan lagu atau musik yang dihasilkan dari perpaduan bunyi-bunyian yang membentuk melodi yang biasanya digunakan untuk mengiringi tarian sakral Sanghyang. Dan hanya bisa dipentaskan di pura. Kemudian pada awal tahun 1930-an oleh seniman dari desa Bona, Gianyar mencoba mengembangkan tari Kecak dengan mengambil cerita Ramayana yang ditarikan sebagai pengganti Tari Sanghyang sehingga tarian ini akhirnya dapat ditampilkan di depan umum sebagai seni pertunjukan. Bagian dari kisah Ramayana yang pertama diambil sebagai Dewi Sita diculik oleh Raja Rahwana.', 'https://www.google.com/maps/place/Kecak+%26+Fire+Dance+-+Ubud+Kaja+at+Pura+Dalem+Ubud/@-8.50509,115.2560104,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd23dc90ff3009f:0xc4cd0ec215be61a6!8m2!3d-8.5050935!4d115.2581978!16s%2Fg%2F11rycvq3v4', 'Open 9.00 - 12.00 WITA', NULL, NULL),
(8, 1, NULL, 'Sekumpul Waterfall', NULL, 'Rp50.000', 'REady', 'aduhdsguwd', 'hfewdjhueygwwihfcgeded', 'https://www.google.com/maps/place/Sekumpul+Waterfall/@-8.1775308,115.1782051,17z/data=!4m10!1m2!2m1!1ssekumpul+waterfall!3m6!1s0x2dd18f2016762a37:0x18e8b8bb069da935!8m2!3d-8.1775308!4d115.1825825!15sChJzZWt1bXB1bCB3YXRlcmZhbGySARJ0b3VyaXN0X2F0dHJhY3Rpb27gAQA!16s%2Fg%2F11pclg13f6', '07.00 - 18.00 WITA', '2022-12-28 02:26:46', '2022-12-28 02:26:46'),
(9, 1, 1, 'Sekumpul Waterfall', NULL, 'Rp50.000', 'dsds', 'hdcjisjbhcsdsdsd', 'dsdsd', 'https://www.google.com/maps/place/Sekumpul+Waterfall/@-8.1775308,115.1782051,17z/data=!4m10!1m2!2m1!1ssekumpul+waterfall!3m6!1s0x2dd18f2016762a37:0x18e8b8bb069da935!8m2!3d-8.1775308!4d115.1825825!15sChJzZWt1bXB1bCB3YXRlcmZhbGySARJ0b3VyaXN0X2F0dHJhY3Rpb27gAQA!16s%2Fg%2F11pclg13f6', 'dsds', '2022-12-28 02:36:59', '2022-12-28 02:36:59'),
(10, NULL, NULL, 'aaaaaa', 'img/packages/1672231026SekumoulWaterfall.png', NULL, NULL, 'aaaa', 'aaaa', 'aaa', 'aaa', '2022-12-28 04:37:06', '2022-12-28 04:37:06'),
(11, NULL, NULL, 'aaaaaa', 'img/packages/1672231096SekumoulWaterfall.png', NULL, NULL, 'aaaa', 'aaaa', 'aaa', 'aaa', '2022-12-28 04:38:16', '2022-12-28 04:38:16');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Adi', 'adiwidd20@gmail.com', NULL, '$2y$10$YiTbk2ozVoQqiYiMmKQ3texxJbjaZxcQfxOOlRCjWMl9AqgkN.lKO', NULL, '2022-12-24 19:30:19', '2022-12-24 19:30:19'),
(6, 'Nama', 'adi.widyantara@undiksha.ac.id', NULL, '$2y$10$PgJeVOZceLXYE88ggKZ52.zRLjOb507VO3WWOfAglgRdwlJ.j9Izy', NULL, '2022-12-25 06:31:13', '2022-12-25 06:31:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `comunity_wisatas`
--
ALTER TABLE `comunity_wisatas`
  ADD PRIMARY KEY (`comunity_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `comunity_id` (`comunity_id`) USING BTREE;

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categorys`
--
ALTER TABLE `categorys`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `comunity_wisatas`
--
ALTER TABLE `comunity_wisatas`
  MODIFY `comunity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`id_category`) REFERENCES `categorys` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comunity` FOREIGN KEY (`comunity_id`) REFERENCES `comunity_wisatas` (`comunity_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
