-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 04, 2024 alle 07:11
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
(9, 'affondi_supini', 1),
(10, 'curl_con_bilanciere', 1),
(11, 'curl_hammer', 1),
(12, 'curl_su_panca_inclinata', 1),
(13, 'dip_tricipiti', 1),
(14, 'flessione_dei_tricipiti', 1),
(15, 'french_press_unilaterale', 1),
(16, 'pressa_per_tricipiti', 1),
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
(1, 21, 10, 3, 45, NULL, 30);

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
(1, 'Palestra di prova', 'via qualcosa', 'Napoli', 'ciao@ciao.it', 'password', '43353'),
(2, 'seconda palestra', 'via di prova', 'Napoli', 'fra@fra.com', 'password', '8758765');

-- --------------------------------------------------------

--
-- Struttura della tabella `schede`
--

CREATE TABLE `schede` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `id_utente` int(11) DEFAULT NULL,
  `attiva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `schede`
--

INSERT INTO `schede` (`id`, `data`, `id_utente`, `attiva`) VALUES
(1, '2023-12-29', 1, 1);

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
  `id_palestra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `data_nascita`, `email`, `password`, `telefono`, `id_palestra`) VALUES
(1, 'Luigi', 'Riccardis', '2020-12-12', 'lriccardis022@gmail.com', 'password', '3714550374', 2),
(2, 'Luigi', 'Lombardi', '2000-12-11', 'flombardi22@gmail.com', 'password', '3714550344', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
