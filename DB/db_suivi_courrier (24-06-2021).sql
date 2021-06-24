-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 24, 2021 at 01:18 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_suivi_courrier`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `code_compte` varchar(200) NOT NULL,
  `nom_compte` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type_compte` varchar(200) NOT NULL,
  PRIMARY KEY (`code_compte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`code_compte`, `nom_compte`, `username`, `password`, `type_compte`) VALUES
('000001', 'Administrateur', 'admin', 'admin', 'ADMINISTRATEUR');

-- --------------------------------------------------------

--
-- Table structure for table `courrier`
--

DROP TABLE IF EXISTS `courrier`;
CREATE TABLE IF NOT EXISTS `courrier` (
  `code_courrier` varchar(200) NOT NULL,
  `ref_courrier` varchar(200) NOT NULL,
  `code_compte` varchar(200) NOT NULL,
  `obj_courrier` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `expediteur` varchar(300) NOT NULL,
  `type_document` varchar(300) NOT NULL,
  `suivi_courrier` varchar(300) NOT NULL,
  `imputation` varchar(300) NOT NULL,
  `annotation` varchar(300) NOT NULL,
  `date_courrier` varchar(200) NOT NULL,
  `numero_ordre_ar` varchar(300) NOT NULL,
  PRIMARY KEY (`code_courrier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courrier_compte`
--

DROP TABLE IF EXISTS `courrier_compte`;
CREATE TABLE IF NOT EXISTS `courrier_compte` (
  `code_courrier_compte` varchar(200) NOT NULL,
  `code_courrier` varchar(200) NOT NULL,
  `code_compte` varchar(200) NOT NULL,
  `date_entre` varchar(200) NOT NULL,
  `date_sortie` varchar(200) NOT NULL,
  `etat_courrier` varchar(200) NOT NULL,
  `etat_envoi` varchar(200) NOT NULL,
  PRIMARY KEY (`code_courrier_compte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courrier_depart`
--

DROP TABLE IF EXISTS `courrier_depart`;
CREATE TABLE IF NOT EXISTS `courrier_depart` (
  `code_c_depart` varchar(200) NOT NULL,
  `date_c_depart` varchar(200) NOT NULL,
  `destinat_c_depart` varchar(200) NOT NULL,
  `objet_c_depart` varchar(200) NOT NULL,
  `type_doc_depart` varchar(200) NOT NULL,
  `ref_c_depart` varchar(200) NOT NULL,
  `code_compte` varchar(200) NOT NULL,
  `numero_ordre_dp` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`code_c_depart`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courrier_sortant`
--

DROP TABLE IF EXISTS `courrier_sortant`;
CREATE TABLE IF NOT EXISTS `courrier_sortant` (
  `code_courrier_sortant` varchar(200) NOT NULL,
  `code_compte_exp` varchar(200) NOT NULL,
  `code_compte_dest` varchar(200) NOT NULL,
  `code_courrier` varchar(200) NOT NULL,
  PRIMARY KEY (`code_courrier_sortant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `code_doc` varchar(200) NOT NULL,
  `code_courrier` varchar(200) NOT NULL,
  `nom_doc` varchar(200) NOT NULL,
  `type_courrier` varchar(200) NOT NULL,
  PRIMARY KEY (`code_doc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
