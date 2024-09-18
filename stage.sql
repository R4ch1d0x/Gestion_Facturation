-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 mai 2024 à 11:15
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `code_client`, `type_client`, `name`, `email`, `telephone`, `created_at`, `updated_at`) VALUES
(1, '6804', 'B', 'Domenic Runolfsdottir', 'turner.karli@roob.info', '845-953-3939', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(2, '8435', 'C', 'Ms. Katlynn Roob', 'auer.mona@bogan.com', '+1.559.816.4825', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(3, '3161', 'C', 'Dr. Anahi Howe', 'benedict18@kassulke.biz', '+1-601-421-4202', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(4, '6417', 'C', 'Norval Cummerata', 'watsica.lacy@boyle.com', '+1-559-804-1198', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(5, '5415', 'C', 'Lemuel Abbott II', 'murphy.imani@kessler.com', '+17603459885', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(6, '3934', 'C', 'Dr. Nikki Kub', 'bode.chelsie@stamm.com', '+1 (267) 637-3679', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(7, '7408', 'C', 'Abagail Sawayn I', 'lbreitenberg@crooks.biz', '+1-351-357-4181', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(8, '8091', 'B', 'Prof. Thora Lindgren Sr.', 'bernhard.cleve@koss.com', '+1-717-942-3289', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(9, '1842', 'B', 'Dr. Joany Waelchi', 'andre.runolfsson@kiehn.org', '862.761.6372', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(10, '3355', 'C', 'Candace Hill', 'watsica.claudia@bogisich.info', '+1-845-523-9815', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(12, '9545', 'B', 'Prof. Merritt Crist', 'ostroman@olson.net', '618.432.3539', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(13, '9663', 'B', 'Cathrine Schoen', 'dominic.klocko@windler.com', '+13046605400', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(14, '9349', 'C', 'Miss Ofelia Johnston', 'wcorkery@heaney.net', '253.492.7419', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(15, '7902', 'B', 'Yvonne Boyle', 'dewayne49@ritchie.com', '+17698638929', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(16, '2335', 'B', 'Lucius Ullrich', 'cecilia97@stroman.com', '+18016793413', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(17, '6689', 'C', 'Prof. Rodolfo Langworth PhD', 'emmerich.russ@heidenreich.com', '+12708843786', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(18, '8576', 'B', 'Mr. Doug Schultz II', 'gkris@willms.biz', '1-757-735-9047', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(19, '1415', 'B', 'Miss Victoria Satterfield', 'emckenzie@russel.com', '+1-551-374-2582', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(20, '4225', 'C', 'Victor Marvin', 'wanda89@sipes.net', '848-265-4335', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(21, '7159', 'C', 'Dr. Gaetano Lind', 'fredy.mckenzie@doyle.org', '+1-747-366-3641', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(22, '8743', 'B', 'Jordi Lind', 'jacobs.vernon@maggio.com', '+1-704-889-8804', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(23, '2520', 'C', 'Abbie Hill Jr.', 'vritchie@nader.com', '+1 (678) 470-1144', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(24, '5346', 'C', 'River Wiza', 'kkiehn@walter.info', '1-210-639-9003', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(25, '1856', 'B', 'Dr. Bernhard Fritsch I', 'gcarter@schinner.com', '1-614-246-2183', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(26, '4312', 'C', 'Tillman Schuppe', 'era.schumm@hamill.com', '845-560-3806', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(27, '3445', 'B', 'Electa Willms DVM', 'bernita.schneider@kilback.org', '(901) 795-0365', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(28, '7419', 'C', 'Mrs. Ethyl Fritsch', 'avis.kerluke@cummings.org', '918-670-4477', '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(29, '8626', 'C', 'Mertie Ruecker', 'jody.anderson@king.com', '220.717.4405', '2024-05-02 20:06:58', '2024-05-02 20:06:58');

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_facture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `prix_hors_taxes` double NOT NULL,
  `tva` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `echéance` date NOT NULL,
  `prix_total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `factures`
--

INSERT INTO `factures` (`id`, `code_facture`, `client_id`, `prix_hors_taxes`, `tva`, `status`, `echéance`, `prix_total`, `created_at`, `updated_at`) VALUES
(1, '9828', 1, 3406, 11.00, 'en attande', '2024-12-23', 17265, '2025-05-02 20:06:58', '2024-05-03 12:59:00'),
(2, '1181', 2, 13935, 15.00, 'en attande', '2025-02-04', 15869, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(3, '8529', 3, 5649, 25.00, 'en attande', '2025-01-24', 19457, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(4, '3628', 4, 10124, 22.00, 'en attande', '2024-11-24', 11405, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(5, '6391', 5, 12847, 9.00, 'payé', '2025-03-11', 14775, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(6, '5001', 6, 3767, 15.00, 'en attande', '2025-02-11', 19021, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(7, '3963', 7, 19090, 6.00, 'payé', '2024-08-10', 9872, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(8, '1619', 8, 1865, 2.00, 'en attande', '2025-03-26', 1708, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(9, '9542', 9, 8743, 12.00, 'en attande', '2024-05-19', 3937, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(10, '9060', 10, 7782, 13.00, 'en attande', '2024-10-12', 14199, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(12, '9573', 12, 4286, 13.00, 'en attande', '2024-09-09', 15358, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(13, '8522', 13, 15676, 3.00, 'payé', '2024-11-14', 18086, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(14, '1328', 14, 17642, 2.00, 'en attande', '2025-03-15', 4953, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(15, '9365', 15, 10404, 21.00, 'en attande', '2024-05-04', 15509, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(16, '1435', 16, 19939, 0.00, 'payé', '2024-06-17', 1069, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(17, '5766', 17, 15679, 17.00, 'payé', '2024-10-06', 7204, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(18, '1680', 18, 14249, 22.00, 'payé', '2024-05-07', 5388, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(19, '1353', 19, 3563, 9.00, 'payé', '2024-06-25', 1052, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(20, '3978', 20, 7511, 9.00, 'en attande', '2024-06-21', 1111, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(21, '3172', 21, 4173, 0.00, 'payé', '2024-05-22', 18043, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(22, '2288', 22, 14680, 17.00, 'en attande', '2024-05-22', 6586, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(23, '3812', 23, 8855, 22.00, 'payé', '2025-01-13', 10468, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(24, '4309', 24, 11572, 5.00, 'en attande', '2025-02-07', 354, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(25, '2729', 25, 18024, 18.00, 'payé', '2024-09-16', 16102, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(26, '5815', 26, 18714, 9.00, 'payé', '2024-06-12', 15802, '2024-05-02 20:06:58', '2024-05-02 20:06:58'),
(27, '9770', 27, 5143, 25.00, 'payé', '2025-04-05', 390, '2024-05-02 20:06:58', '2024-05-02 20:06:58');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `lines`
--

CREATE TABLE `lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facture_id` bigint(20) UNSIGNED NOT NULL,
  `qte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taxes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lines`
--

INSERT INTO `lines` (`id`, `facture_id`, `qte`, `description`, `taxes`, `montant_ht`, `created_at`, `updated_at`) VALUES
(1, 6, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-02 22:59:13', '2024-05-02 22:59:13'),
(2, 1, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-02 22:59:26', '2024-05-02 22:59:26'),
(3, 1, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-02 22:59:34', '2024-05-02 22:59:34'),
(4, 1, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-03 00:02:29', '2024-05-03 00:02:29'),
(5, 8, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-03 00:02:58', '2024-05-03 00:02:58'),
(6, 1, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-03 12:57:46', '2024-05-03 12:57:46'),
(7, 1, '12', 'Réparation camoin 222', '254.36', '14.2', '2024-05-03 16:31:46', '2024-05-03 16:31:46');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_14_122636_create_clients_table', 1),
(7, '2024_04_14_122641_create_factures_table', 1),
(8, '2024_05_02_134903_create_lines_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$i0DoieTAgWSyf9kmN8jZVuKdf/Qkt7GjMiJXLPKq81jlsue42lEoa', NULL, '2024-05-02 20:22:05', '2024-05-02 20:22:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_client` (`code_client`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_facture` (`code_facture`),
  ADD KEY `factures_client_id_foreign` (`client_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `lines`
--
ALTER TABLE `lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lines_facture_id_foreign` (`facture_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lines`
--
ALTER TABLE `lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lines`
--
ALTER TABLE `lines`
  ADD CONSTRAINT `lines_facture_id_foreign` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
