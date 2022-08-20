-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 30, 2021 la 03:17 PM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `proiect`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cart_rel1`
--

CREATE TABLE `cart_rel1` (
  `id` int(6) UNSIGNED NOT NULL,
  `cod_prod` int(6) NOT NULL,
  `cantitate` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cart_rel1`
--

INSERT INTO `cart_rel1` (`id`, `cod_prod`, `cantitate`) VALUES
(1, 21, 1),
(2, 22, 1),
(3, 30, 1),
(4, 14, 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(255) NOT NULL,
  `Pret` int(11) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Stoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`ID`, `Nume`, `Pret`, `Img`, `Categorie`, `Stoc`) VALUES
(12, 'Head radical', 350, 'head-radical-mp_0.jpg', 'Head', 10),
(13, 'G -360 Extreme', 450, 'Head-G-360-Extreme-S-2695113-00-218227.jpg', 'Head', 30),
(14, 'Wilson Blade', 400, 'Wilson-Blade-98-16x19-V7.jpg', 'Wilson', 30),
(15, 'Wilson Classic', 320, '2110019770_001_02.jpg-huge.jpg', 'Wilson', 40),
(16, 'Wilson-Blade 104', 165, 'wilson-blade.jpg', 'Wilson', 40),
(17, 'Barbolat Gravity S', 249, 'barbolat.jpg', 'Barbolat', 20),
(19, 'Barbolat -Copii S', 125, 'barbolat-copii.jpg', 'Barbolat', 24),
(20, 'Geo Speed S3', 255, 'Geo SPeed.jpg', 'Artengo', 24),
(21, 'Head -Gravity', 525, 'head-gravity.jpg', 'Head', 30),
(22, 'Head -Radical S', 225, 'head-radical-s.jpg', 'Head', 40),
(23, 'Wilson-Blade Feel', 350, 'wilson-balde-feel.jpg', 'Wilson', 10),
(24, 'Wilson Clash Pro', 1055, 'wilson-clash-pro.jpg', 'Wilson', 5),
(25, 'Wilson Pro Staff', 975, 'wilson-pro-staff.jpg', 'Wilson', 5),
(27, 'Set Court 3', 25, 'set_cort.jpg', 'Mingii', 12),
(28, 'Set Barbolat 3', 25, 'barbolat3.jpg', 'Mingii', 24),
(29, 'Barbolat Gold 3', 39, 'set_gold.jpg', 'Mingii', 30),
(30, 'Set Green 72 Pro', 220, 'set_pro.jpg', 'Mingii', 10),
(31, 'Set kids 36', 112, 'set_chids.jpg', 'Mingii', 10),
(32, 'Head Speed 125', 676, 'Geo SPeed.jpg', 'Head', 12),
(33, 'Unlimited Black 3', 99, 'set_unlimited.jpg', 'Mingii', 5);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Nume_prenume` varchar(255) NOT NULL,
  `Parola` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`ID`, `Username`, `Nume_prenume`, `Parola`) VALUES
(1, 'Admin', 'Admin test', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'rel1', 'test2 relatii', '202cb962ac59075b964b07152d234b70');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cart_rel1`
--
ALTER TABLE `cart_rel1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `cart_rel1`
--
ALTER TABLE `cart_rel1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `cart_rel1`
--
ALTER TABLE `cart_rel1`
  ADD CONSTRAINT `cart_rel1_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produse` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
