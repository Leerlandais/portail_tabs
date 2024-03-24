-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2024 at 11:36 AM
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
-- Table structure for table `tab_artist`
--

DROP TABLE IF EXISTS `tab_artist`;
CREATE TABLE IF NOT EXISTS `tab_artist` (
  `art_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `art_name` varchar(255) NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab_artist`
--

INSERT INTO `tab_artist` (`art_id`, `art_name`) VALUES
(1, 'Leonard Cohen'),
(2, 'Gordon Lightfoot'),
(3, 'Gilbert O&#039;Sullivan');

-- --------------------------------------------------------

--
-- Table structure for table `tab_song`
--

DROP TABLE IF EXISTS `tab_song`;
CREATE TABLE IF NOT EXISTS `tab_song` (
  `song_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `artist_id` int UNSIGNED NOT NULL,
  `song_name` varchar(100) NOT NULL,
  `song_slug` varchar(255) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab_song`
--

INSERT INTO `tab_song` (`song_id`, `artist_id`, `song_name`, `song_slug`) VALUES
(1, 1, 'Chelsea Hotel', 'chelsea-hotel'),
(2, 1, 'Take This Waltz', 'take-this-waltz');

-- --------------------------------------------------------

--
-- Table structure for table `tab_tab`
--

DROP TABLE IF EXISTS `tab_tab`;
CREATE TABLE IF NOT EXISTS `tab_tab` (
  `tab_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tab_slug` varchar(255) NOT NULL,
  `tab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`tab_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab_tab`
--

INSERT INTO `tab_tab` (`tab_id`, `tab_slug`, `tab`) VALUES
(1, 'chelsea-hotel', 'Intro: C\r\n\r\n     C          G            F        C\r\nI remember you well in the Chelsea Hotel\r\n                      G            Am\r\nYou were talking so brave and so sweet\r\n C         G          F       C\r\nGiving me head on the unmade bed\r\n           F                        G\r\nWhile the limousines wait in the street\r\n  Am                         F\r\nThose were the reasons and that was New York\r\n         C               E/b            Am\r\nWe were running for the money and the flesh\r\n      F                           C\r\nAnd that was called love for the workers in song\r\n           F                         G\r\nProbably still is for those of them left\r\n\r\n        F             C\r\nAh but you got away, didn&#039;t you babe\r\n                      E/b          Am\r\nYou just turned your back on the crowd\r\n F                          C\r\nYou got away, I never once heard you say\r\n   F                 C\r\nI need you, I don&#039;t need you\r\n   F                 C\r\nI need you, I don&#039;t need you\r\n    F                    Am      G\r\nAnd all of that jiving around\r\n\r\nI remember you well in the Chelsea Hotel\r\nYou were famous, your heart was a legend\r\nYou told me again you preferred handsome men\r\nBut for me you would make an exception\r\nAnd clenching your fist for the ones like us\r\nWho are oppressed by the figures of beauty\r\nYou fixed yourself, you said, &quot;Well never mind\r\nWe are ugly but we have the music.&quot;\r\n\r\nAnd then you got away, didn&#039;t you babe\r\nYou just turned your back on the crowd\r\nYou got away, I never once heard you say\r\nI need you, I don&#039;t need you\r\nI need you, I don&#039;t need you\r\nAnd all of that jiving around\r\n\r\n         C          G                      F      C\r\nI don&#039;t mean to suggest that I loved you the best\r\n                      G            Am\r\nI can&#039;t keep track of each fallen robin\r\n     C          G            F        C\r\nI remember you well in the Chelsea Hotel\r\n       F                                   G\r\nThat&#039;s all, I don&#039;t even think of you that often'),
(2, 'take-this-waltz', 'Intro: C . . |Gsus4 . . |G . . |. . . |           \r\nC                        Am \r\nNow in Vienna there`s ten pretty women           \r\nC               Em/b            Am \r\nThere`s a shoulder where Death comes to cry\r\n           F                        G \r\nThere`s a lobby with nine hundred windows\r\n F               F    Em  Dm  C   E7/b \r\nThere`s a tree where the doves go to die\r\n            Am \r\nThere`s a piece that was torn from the morning\r\n         Dm           A7         Dm . . |. . C/e | \r\nAnd it hangs in the Gallery of Frost \r\nF  C/e  Dm  C\r\nAy, Ay, Ay, Ay\r\n            E7/g#            Am \r\nTake this waltz, take this waltz            \r\nD/f#                        F . . |. . . | \r\nTake this waltz with the clamp on its jaws\r\n  G . . |Am . . |G/b . . |G . . |\r\n        C           Em/b         \r\nAm Oh I want you, I want you, I want you\r\n        C                    Am \r\nOn a chair with a dead magazine         \r\nF                      G \r\nIn the cave at the tip of the lily\r\n          F              F   Em  Dm   C   E7/b \r\nIn some hallways where love`s never been\r\n      Am\r\nOn a bed where the moon has been sweating\r\n      Dm               A7            Dm . . |. . C/e |\r\nIn a cry filled with footsteps and sand\r\nF  C/e  Dm  C \r\nAy, Ay, Ay, Ay\r\n            E7/g#            A7/g \r\nTake this waltz, take this waltz            \r\nF6                  F#m7-5 . . |. . . | \r\nTake its broken waist in your hand\r\n  Fdim . . |G#dim . . |Am . . |F . . |        \r\nAm \r\nThis waltz, this waltz, this waltz, this waltz\r\n           Dm                 \r\nAm With its very own breath of brandy and Death\r\n   F6                      C . . |. . . |Gsus4 . . |G . . |\r\nDragging its tail in the sea\r\n             C                Am \r\nThere`s a concert hall in Vienna            \r\nC             Em/b      Am \r\nWhere your mouth had a thousand reviews            \r\nF                               G \r\nThere`s a bar where the boys have stopped talking\r\n               F              F  Em  Dm   C    E7/b \r\nThey`ve been sentenced to death by the blues         \r\nAm \r\nAh, but who is it climbs to your picture\r\n         Dm          A7         Dm . . |. . C/e | \r\nWith a garland of freshly cut tears? \r\nF  C/e  Dm  C \r\nAy, Ay, Ay, Ay\r\n            E7/g#            Am \r\nTake this waltz, take this waltz            \r\nDm                        F . . |. . . | \r\nTake this waltz it`s been dying for years  \r\nC . . |. . . |G . . |. . . |              \r\nC            Em/b          Am \r\nThere`s an attic where children are playing             \r\nC                        Am \r\nWhere I`ve got to lie down with you soon\r\n       F                   G \r\nIn a dream of Hungarian lanterns         \r\nF             F Em  Dm  C    E7/b \r\nIn the mist of some sweet afternoon\r\n          Am \r\nAnd I`ll see what you`ve chained to your sorrow\r\n          Dm              A7         Dm . . |. . C/e | \r\nAll your sheep and your lilies of snow \r\nF  C/e  Dm  C \r\nAy, Ay, Ay, Ay\r\n            E7/g#            A7/g \r\nTake this waltz, take this waltz                 \r\nF6                     F#m7-5 . . |. . . | \r\nWith its &quot;I`ll never forget you, you know!&quot;\r\n  Fdim . . |G#dim . . |Am . . |F . . |        \r\nAm \r\nThis waltz, this waltz, this waltz, this waltz           \r\nDm                 Am \r\nWith its very own breath of brandy and Death\r\n   F6                      C . . |. . . |Gsus4 . . |G . . | \r\nDragging its tail in the sea            \r\nC                  Am \r\nAnd I`ll dance with you in Vienna\r\n           C        Em/b       Am \r\nI`ll be wearing a river`s disguise\r\n       F                   G \r\nThe hyacinth wild on my shoulder\r\n      F           F  Em  Dm    C \r\nMy mouth on the dew of your thighs                              \r\nAm \r\nAnd I`ll bury my soul in a scrapbook            \r\nC              Em/b       Am \r\nWith the photographs there, and the moss           \r\nF                          G \r\nAnd I`ll yield to the flood of your beauty\r\n      F       F  Em  Dm   C    E7/b \r\nMy cheap violin and my cross             \r\nAm \r\nAnd you`ll carry me down on your dancing\r\n         Dm             A7            Dm \r\nTo the pools that you lift on your wrist \r\nDm  C/e  F  C/e  Dm  C \r\nOh my love, Oh my love            \r\nE7/g#            Am \r\nTake this waltz, take this waltz\r\n       Dm                            F . . |. . . | \r\nIt`s yours now, it`s all that there is  \r\nC . . |. . . |G . . |. . . |   C           \r\nAm\r\nLa, la, la... La, la, la...\r\n  C      Em/b   Am \r\nLa, la, la... La, la, la...\r\n  F             G \r\nLa,la, la... La, la, la...\r\n  F     Em  Dm  C         E7/b \r\nLa, la, la... La, la, la...\r\n  Am \r\nLa,la, la... La, la, la...\r\n Dm     A7     Dm          Dm  C/e \r\nLa, la, la... La, la, la...\r\n F  C/e  Dm  C      E7/g# \r\nAy, Ay, Ay, Ay\r\n\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
