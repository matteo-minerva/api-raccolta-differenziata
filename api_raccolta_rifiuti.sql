-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 10, 2021 alle 15:50
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_raccolta_rifiuti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
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
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_04_09_115114_create_raccoltas_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `raccoltas`
--

CREATE TABLE `raccoltas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rifiuto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `istruzioni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giorni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `raccoltas`
--

INSERT INTO `raccoltas` (`id`, `rifiuto`, `istruzioni`, `giorni`, `orario`, `created_at`, `updated_at`) VALUES
(1, 'Vetro e lattine', 'Svuotare e gettare sfusi nel contenitore, senza sacchetti di alcun tipo', 'Lunedì', 'Dalle 20:00 del giorno prima alle 6:00 del giorno di raccolta', '2021-04-09 13:47:55', '2021-04-09 13:47:55'),
(2, 'Carta, cartone e tetrapak', 'Piegare sempre gli imballaggi per ridurre l\'ingombro e verificare che siano privi di residui', 'Lunedì', 'Dalle 20:00 del giorno prima alle 6:00 del giorno di raccolta', '2021-04-09 13:47:55', '2021-04-09 13:47:55'),
(3, 'Organico', 'Usare sempre sacchetti compostabili', 'Lunedì e Giovedì', 'Dalle 20:00 del giorno prima alle 6:00 del giorno di raccolta', '2021-04-09 13:47:55', '2021-04-09 13:47:55'),
(4, 'Frazione secca residua(indifferenziato)', 'Utilizzare i sacchi arancioni. Non saranno raccolti sacchi diversi', 'Lunedì e Giovedì', 'Dalle 20:00 del giorno prima alle 6:00 del giorno di raccolta', '2021-04-09 13:47:56', '2021-04-09 13:47:56'),
(5, 'Imballaggi in plastica', 'Verificare che i contenitore siano privi di residui e schiacciare le bottiglie', 'Giovedì', 'Dalle 20:00 del giorno prima alle 6:00 del giorno di raccolta', '2021-04-09 13:47:57', '2021-04-09 13:47:57');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `raccoltas`
--
ALTER TABLE `raccoltas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `raccoltas`
--
ALTER TABLE `raccoltas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
