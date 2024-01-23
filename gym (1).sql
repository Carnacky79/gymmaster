-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 23, 2024 alle 15:47
-- Versione del server: 5.7.40-log
-- Versione PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categorieesercizi`
--

CREATE TABLE `categorieesercizi` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categorieesercizi`
--

INSERT INTO `categorieesercizi` (`id`, `nome`) VALUES
(1, 'braccia'),
(2, 'gambe'),
(3, 'petto'),
(4, 'polpacci'),
(5, 'schiena'),
(6, 'spalle');

-- --------------------------------------------------------

--
-- Struttura della tabella `esercizi`
--

CREATE TABLE `esercizi` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `esercizi`
--

INSERT INTO `esercizi` (`id`, `nome`, `id_categoria`) VALUES
(17, 'affondi_supini', 1),
(18, 'curl_con_bilanciere', 1),
(19, 'curl_hammer', 1),
(20, 'curl_su_panca_inclinata', 1),
(21, 'dip_tricipiti', 1),
(22, 'flessione_dei_tricipiti', 1),
(23, 'french_press_unilaterale', 1),
(24, 'pressa_per_tricipiti', 1),
(25, 'affondo_camminando', 2),
(26, 'barbell_squat', 2),
(27, 'leg_press', 2),
(28, 'salita_sul_gradino', 2),
(29, 'split_squat_bulgaro', 2),
(30, 'squat_frontale', 2),
(31, 'squat_pistol', 2),
(32, 'stacco_da_terra', 2),
(33, 'apertura_panca_2_manubri', 3),
(34, 'aperture_manubri_stability_ball', 3),
(35, 'apertuta_pianca_piana_2_manubri', 3),
(36, 'chiusura_cavi_alti', 3),
(37, 'chiusura_cavi_bassi', 3),
(38, 'calf_in_piedi', 4),
(39, 'calf_press', 4),
(41, 'calf_singola_gamba', 4),
(42, 'lat_machine_avanti', 5),
(43, 'lat_machine_dietro', 5),
(44, 'lat_machine_inverso', 5),
(45, 'lombari_a_terra', 5),
(46, 'pull_down', 5),
(47, 'alzate_laterali', 6),
(48, 'alzate_posteriori', 6),
(49, 'arnold_press', 6),
(50, 'dip_alle_parallele', 6),
(51, 'lento_avanti_con_manubri_su_panca', 6),
(52, 'military_press', 6),
(53, 'panca_piana', 6),
(54, 'tirate_al_mento', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `esercizi_scheda`
--

CREATE TABLE `esercizi_scheda` (
  `id_scheda` int(11) DEFAULT NULL,
  `id_esercizio` int(11) DEFAULT NULL,
  `rep` int(11) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `recupero` int(11) DEFAULT NULL,
  `durata` int(11) DEFAULT NULL,
  `carico` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `esercizi_scheda`
--

INSERT INTO `esercizi_scheda` (`id_scheda`, `id_esercizio`, `rep`, `serie`, `recupero`, `durata`, `carico`) VALUES
(1, 27, 8, 3, 45, NULL, 30),
(1, 21, 10, 3, 45, NULL, 30),
(26, 9, 34, 2, NULL, NULL, 35),
(26, 39, 44, 43, NULL, NULL, 90),
(26, 41, 44, 22, NULL, NULL, 90),
(36, 22, 45, 3, NULL, NULL, 90),
(36, 22, 45, 3, NULL, NULL, 90),
(36, 22, 45, 3, NULL, NULL, 90),
(37, 47, NULL, NULL, NULL, NULL, NULL),
(37, 48, NULL, NULL, NULL, NULL, NULL),
(38, 17, 12, 4, 60, NULL, 45),
(38, 18, 12, 4, 50, NULL, 44);

-- --------------------------------------------------------

--
-- Struttura della tabella `palestre`
--

CREATE TABLE `palestre` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `palestre`
--

INSERT INTO `palestre` (`id`, `nome`, `indirizzo`, `citta`, `email`, `password`, `telefono`) VALUES
(1, 'Ciro', 'via qualcosa', 'Napoli', 'ciao@ciao.it', 'password', '43353'),
(2, 'Ciro', 'via di prova', 'Napoli', 'fra@fra.com', 'password', '8758765');

-- --------------------------------------------------------

--
-- Struttura della tabella `schede`
--

CREATE TABLE `schede` (
  `id` int(11) NOT NULL,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_utente` int(11) DEFAULT NULL,
  `attiva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `schede`
--

INSERT INTO `schede` (`id`, `data`, `id_utente`, `attiva`) VALUES
(1, '2023-12-28 23:00:00', 1, 1),
(2, '2023-12-06 23:00:00', 1, 0),
(4, '2024-01-14 13:13:04', 1, 0),
(5, '2024-01-18 23:14:02', 1, 0),
(6, '2024-01-18 23:14:52', 1, 0),
(7, '2024-01-18 23:23:43', 1, 0),
(8, '2024-01-18 23:24:12', 1, 0),
(9, '2024-01-18 23:28:57', 1, 0),
(10, '2024-01-18 23:30:07', 1, 0),
(11, '2024-01-18 23:30:40', 1, 0),
(12, '2024-01-18 23:41:55', 1, 0),
(13, '2024-01-18 23:43:44', 1, 0),
(14, '2024-01-18 23:44:21', 1, 0),
(15, '2024-01-18 23:47:51', 1, 0),
(16, '2024-01-18 23:48:44', 1, 0),
(17, '2024-01-18 23:49:29', 1, 0),
(18, '2024-01-18 23:49:50', 1, 0),
(19, '2024-01-18 23:52:38', 1, 0),
(20, '2024-01-18 23:53:04', 1, 0),
(21, '2024-01-18 23:56:55', 1, 0),
(22, '2024-01-18 23:57:14', 1, 0),
(23, '2024-01-18 23:57:56', 1, 0),
(24, '2024-01-18 23:58:35', 1, 0),
(25, '2024-01-19 00:00:56', 1, 0),
(26, '2024-01-19 00:17:49', 1, 0),
(27, '2024-01-19 09:38:37', 1, 0),
(28, '2024-01-19 09:39:59', 1, 0),
(29, '2024-01-19 09:41:08', 1, 0),
(30, '2024-01-19 09:43:57', 1, 0),
(31, '2024-01-19 09:45:46', 1, 0),
(32, '2024-01-19 09:47:47', 1, 0),
(33, '2024-01-19 09:48:46', 1, 0),
(34, '2024-01-19 09:52:36', 1, 0),
(35, '2024-01-19 09:53:44', 1, 0),
(36, '2024-01-19 09:54:08', 1, 0),
(37, '2024-01-19 11:34:37', 1, 0),
(38, '2024-01-19 11:35:57', 1, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `data_iscrizione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_palestra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `data_nascita`, `email`, `password`, `telefono`, `data_iscrizione`, `id_palestra`) VALUES
(1, 'Luigi', 'Riccardis', '2020-12-12', 'lriccardis022@gmail.com', 'password', '3714550374', '2024-01-06 16:56:55', 2),
(2, 'Luigi', 'Lombardi', '2000-12-11', 'flombardi22@gmail.com', 'password', '3714550344', '2024-01-06 16:56:55', 2),
(3, 'Francesco', 'Lombardi', '1979-07-07', 'f.lombardi79@gmail.com', NULL, '3483760064', '2024-01-08 11:58:16', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorieesercizi`
--
ALTER TABLE `categorieesercizi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indici per le tabelle `esercizi`
--
ALTER TABLE `esercizi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `palestre`
--
ALTER TABLE `palestre`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `schede`
--
ALTER TABLE `schede`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categorieesercizi`
--
ALTER TABLE `categorieesercizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `esercizi`
--
ALTER TABLE `esercizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT per la tabella `palestre`
--
ALTER TABLE `palestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `schede`
--
ALTER TABLE `schede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
