-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2024 at 06:20 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portail_tabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabs_artist`
--

DROP TABLE IF EXISTS `tabs_artist`;
CREATE TABLE IF NOT EXISTS `tabs_artist` (
  `artist_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabs_artist`
--

INSERT INTO `tabs_artist` (`artist_id`, `artist_name`) VALUES
(1, 'Tom Waits'),
(2, 'Leonard Cohen'),
(3, 'Bob Dylan'),
(4, 'Georges Brassens');

-- --------------------------------------------------------

--
-- Table structure for table `tabs_song`
--

DROP TABLE IF EXISTS `tabs_song`;
CREATE TABLE IF NOT EXISTS `tabs_song` (
  `song_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `artists_id` int UNSIGNED NOT NULL,
  `tabs_id` int UNSIGNED NOT NULL,
  `song_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabs_song`
--

INSERT INTO `tabs_song` (`song_id`, `artists_id`, `tabs_id`, `song_name`) VALUES
(1, 1, 1, 'Martha'),
(2, 1, 2, 'Dead and Lovely'),
(3, 2, 3, 'Chelsea Hotel'),
(4, 2, 4, 'So Long, Marianne'),
(5, 3, 5, 'One More Cup of Coffee'),
(6, 4, 6, 'Gorille'),
(7, 4, 7, 'Je Suis Un Voyou'),
(8, 4, 8, 'Putain de Toi'),
(9, 4, 9, 'La Non-Demande en mariage');

-- --------------------------------------------------------

--
-- Table structure for table `tabs_tab`
--

DROP TABLE IF EXISTS `tabs_tab`;
CREATE TABLE IF NOT EXISTS `tabs_tab` (
  `tab_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tab_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chord1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chord2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chord3` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chord4` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chord5` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chord6` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse1` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse2` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse3` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse4` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse5` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verse6` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`tab_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabs_tab`
--

INSERT INTO `tabs_tab` (`tab_id`, `tab_name`, `chord1`, `chord2`, `chord3`, `chord4`, `chord5`, `chord6`, `verse1`, `verse2`, `verse3`, `verse4`, `verse5`, `verse6`) VALUES
(1, 'Martha', 'Martha', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Dead_and_Lovely', 'Dead_and_Lovely', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Chelsea_Hotel', '     C          G            F        C<br>\r\n     G            Am<br>\r\n     C         G          F       C<br>\r\n     F                        G<br>\r\n     Am                         F<br>\r\n     C               E            Am<br>\r\n     F                           C<br>\r\n     F                         G<br>', 'F             C\r\nE          Am\r\nF                          C\r\nF                 C\r\nF                 C\r\nF                    Am      G', '         C          G                      F      C\r\n         G            Am\r\n         C          G            F        C\r\n         F                                   G', '', '', '', 'I remember you well in the Chelsea Hotel\r\nYou were talking so brave and so sweet\r\nGiving me head on the unmade bed\r\nWhile the limousines wait in the street\r\nThose were the reasons and that was New York\r\nWe were running for the money and the flesh\r\nAnd that was called love for the workers in song\r\nProbably still is for those of them left', 'Ah but you got away, didnt you babe\r\nYou just turned your back on the crowd\r\nYou got away, I never once heard you say\r\nI need you, I dont need you\r\nI need you, I dont need you\r\nAnd all of that jiving around', 'I remember you well in the Chelsea Hotel\r\nYou were famous, your heart was a legend\r\nYou told me again you preferred handsome men\r\nBut for me you would make an exception\r\nAnd clenching your fist for the ones like us\r\nWho are oppressed by the figures of beauty\r\nYou fixed yourself, you said, Well never mind\r\nWe are ugly but we have the music.', 'repeat verse 2', 'I dont mean to suggest that I loved you the best\r\nI cant keep track of each fallen robin\r\nI remember you well in the Chelsea Hotel\r\nThats all, I dont even think of you that often', ''),
(4, 'So_Long_Marianne', 'So_Long_Marianne', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'One_More_Cup', 'One_More_Cup', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Gorille', 'Gorille', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Voyou', 'Voyou', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Putain', 'Putain', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Demande_en_Mariage', 'Demande_en_Mariage', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
