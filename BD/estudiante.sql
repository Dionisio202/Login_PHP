-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 10:50 PM
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
-- Database: `computacion_visual`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `cedula` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`cedula`, `nombre`, `apellido`, `edad`, `telefono`) VALUES
('1111111111', '22222222222222', '3333333333333', 55, '88'),
('18500856', 'Edison', 'Ortiz', 16, '983860122'),
('185099', 'Mario', 'Izurieta', 30, '0933'),
('3', 'Fredy', 'wdwe', 43, '4wed'),
('4444', 'tfgf', 'fgfg', 45, '56556'),
('44444444', '444444', '44444', 44444, '444444'),
('5', '5', '5', 5, '5'),
('888888888', 'Josue', 'Robayo', 25, '9945454'),
('gggggggg', 'ggggggg', 'ggggg', 12, '2323'),
('ññññññññññ', 'ñññññññññññ', 'ñññññññññññ', 1212121, '12121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
