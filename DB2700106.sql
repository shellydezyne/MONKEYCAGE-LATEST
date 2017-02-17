-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Host: rdbms
-- Generation Time: Feb 06, 2017 at 08:40 AM
-- Server version: 5.6.35-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DB2700106`
--
CREATE DATABASE IF NOT EXISTS `DB2700106` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci;
USE `DB2700106`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'admin@monkeycage.com', 'mnbvcx098');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `satclo` varchar(255) DEFAULT NULL,
  `sunclo` varchar(255) DEFAULT NULL,
  `monclo` varchar(255) DEFAULT NULL,
  `tueclo` varchar(255) DEFAULT NULL,
  `wedclo` varchar(255) DEFAULT NULL,
  `thuclo` varchar(255) DEFAULT NULL,
  `friclo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(4000) DEFAULT NULL,
  `tf1` varchar(255) DEFAULT NULL,
  `tc1` varchar(255) DEFAULT NULL,
  `tf2` varchar(255) DEFAULT NULL,
  `tc2` varchar(255) DEFAULT NULL,
  `tf3` varchar(255) DEFAULT NULL,
  `tc3` varchar(255) DEFAULT NULL,
  `to1` varchar(255) DEFAULT NULL,
  `co1` varchar(2000) DEFAULT NULL,
  `to2` varchar(255) DEFAULT NULL,
  `co2` varchar(2000) DEFAULT NULL,
  `to3` varchar(255) DEFAULT NULL,
  `co3` varchar(2000) DEFAULT NULL,
  `to4` varchar(255) DEFAULT NULL,
  `co4` varchar(2000) DEFAULT NULL,
  `a1day` varchar(20) DEFAULT NULL,
  `ah1day` varchar(20) DEFAULT NULL,
  `a1month` varchar(20) DEFAULT NULL,
  `a3month` varchar(20) DEFAULT NULL,
  `a6month` varchar(20) DEFAULT NULL,
  `ayear` varchar(20) DEFAULT NULL,
  `ayyear` varchar(20) DEFAULT NULL,
  `s1day` varchar(20) DEFAULT NULL,
  `sh1day` varchar(20) DEFAULT NULL,
  `s1month` varchar(20) DEFAULT NULL,
  `s3month` varchar(20) DEFAULT NULL,
  `s6month` varchar(20) DEFAULT NULL,
  `syear` varchar(20) DEFAULT NULL,
  `syyear` varchar(20) DEFAULT NULL,
  `k1day` varchar(20) DEFAULT NULL,
  `kh1day` varchar(20) DEFAULT NULL,
  `k1month` varchar(20) DEFAULT NULL,
  `k3month` varchar(20) DEFAULT NULL,
  `k6month` varchar(20) DEFAULT NULL,
  `kyear` varchar(20) DEFAULT NULL,
  `kyyear` varchar(20) DEFAULT NULL,
  `f1day` varchar(20) DEFAULT NULL,
  `fh1day` varchar(20) DEFAULT NULL,
  `kk1day` varchar(20) DEFAULT NULL,
  `kkh1day` varchar(20) DEFAULT NULL,
  `eel` varchar(20) DEFAULT NULL,
  `eec` varchar(20) DEFAULT NULL,
  `eeb` varchar(20) DEFAULT NULL,
  `ekl` varchar(20) DEFAULT NULL,
  `ekc` varchar(20) DEFAULT NULL,
  `ekb` varchar(20) DEFAULT NULL,
  `pic1` text,
  `pic2` text,
  `pic3` text,
  `pic4` text,
  `pic5` text,
  `pic6` text,
  `pdf` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`satclo`, `sunclo`, `monclo`, `tueclo`, `wedclo`, `thuclo`, `friclo`, `title`, `content`, `tf1`, `tc1`, `tf2`, `tc2`, `tf3`, `tc3`, `to1`, `co1`, `to2`, `co2`, `to3`, `co3`, `to4`, `co4`, `a1day`, `ah1day`, `a1month`, `a3month`, `a6month`, `ayear`, `ayyear`, `s1day`, `sh1day`, `s1month`, `s3month`, `s6month`, `syear`, `syyear`, `k1day`, `kh1day`, `k1month`, `k3month`, `k6month`, `kyear`, `kyyear`, `f1day`, `fh1day`, `kk1day`, `kkh1day`, `eel`, `eec`, `eeb`, `ekl`, `ekc`, `ekb`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pdf`) VALUES
('3 : 00 <br> 13 : 00', NULL, NULL, NULL, NULL, NULL, NULL, 'Newsfeed                                                             ', '                                                                Die Starttermine fÃ¼r unsere Boulderkurse stehen fest und wir freuen uns auf reges Interesse eurerseits!! //\r\n\r\nAls Schmankerl gibt es auf die erste Kursreihe 20 % ErmÃ¤ÃŸigung auf den regulÃ¤ren Preis. //\r\n\r\n\r\nDie Affen sind los! DI 18:30-20:00 \r\nStart 10.01.2017 //\r\n\r\n\r\nPump up the volume! FR 17:30 - 18:30\r\nStart 06.01.2017 //\r\n\r\n\r\nMonkeygang! SA 17:30 - 19:00\r\nStart 07.01.2017 //\r\n\r\n\r\nDesweiteren startet am 30.12.2016 unser wÃ¶chentlicher Kidsclub fÃ¼r die ambitionierten kleinen Kletterchampions von Morgen, betreut durch Roxana Wienand! \r\n\r\nDieser findet immer statt Freitags, 15:30 - 17:30 //\r\n\r\nWir freuen uns auf euch & euer Kommen,\r\n\r\nMonkeycrew Aschaffenburg\r\n\r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                ', 'SpaÃŸzeiten:                                                                                                                                          ', 'Bouldern & Monkeybar:\r\nTÃ¤glich 10:00 bis 23:00 Uhr \r\n(auch an den meisten gesetzlichen Feiertagen, bei Abweichungen findet Ihr einen entsprechenden Hinweis hier im Newsfeed)                                                                                 ', 'Kidsbouldern:                                                                                                 ', 'Mo bis Fr 11:00 bis 19:00 Uhr\r\nSa & So 10:00 bis 16:00 Uhr                                                                                                       ', 'Sauna:             ', 'Mo bis Fr 18:00 bis 23:00 Uhr \r\nSa & So 11:00 bis 21:00 Uhr // 5â‚¬ Aufpreis zum Tageseintritt, ab einer 11er-Karte inklusive      ', 'Die Affen sind los!\r\nZiel: Bouldersucht!                                                         ', 'Eindrehen, Hooken, Sloper usw. kennst du nur vom HÃ¶ren, oder noch garnicht, aber du willst unbedingt etwas mehr darÃ¼ber wissen? Dann bist du hier richtig!\r\n10x 90 Min fÃ¼r nur 220â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-12\r\nImmer Dienstags 18:30 - 20:00 Uhr                                  ', 'Monkeygang!\r\nZiel: Verbesserung der Klettertechnik                                                      ', 'Du willst lernen Probleme zu "lesen" und nicht nur durch brachialen Kraftaufwand zu toppen?\r\nDann schÃ¤rfe deine Skills und werde Teil der Monkeygang |\r\n10x 90 Min fÃ¼r schlappe 240â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-8                                           ', 'Pump up the volume!\r\nZiel: Strom in den Armen                                                         ', 'Max macht euch die HÃ¶lle heiÃŸ und nach 10x 60 Minuten der Qual fÃ¼hlt Ihr euch fit fÃ¼r EUER nÃ¤chstes Projekt |\r\nSowohl im KÃ¤fig als auch der Folterkammer erwarten euch Blut, SchweiÃŸ und TrÃ¤nen |\r\nPreis: 180â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-12\r\nImmer Freitags 17:30 - 18:30 Uhr                                           ', 'YOGA & Kidsclub        ', 'Yoga: (Einzelsitzung 90 Minuten: 19,- â‚¬ / Kombiticket inkl. Tageseintritt Bouldern 24,- â‚¬) |\r\nMittwoch 19:00 - 20:30 Uhr knackige Flows fÃ¼r KÃ¶rperspannung & RumpfstabilitÃ¤t |\r\nDonnerstag 20:00 - 21:30 klassische Hatha Sitzung gegen die verkÃ¼rzten Klettermuskeln |\r\nSamstag 10:30 - 11:30 Kids-Yoga (6-10 Jahre) |\r\nJeden zweiten Sonntag Regeneration & Entschleunigung 11:00 - 12:30 Uhr |\r\n\r\nKidsclub: FR 15:30 - 17:30\r\n\r\nKosten gestaffelt nach Laufzeit (GÃ¼ltig fÃ¼r 1 Termin pro Woche; Preise fÃ¼r mehrere Termine auf Anfrage)\r\n\r\n12 Monate: 35,- â‚¬ monatlich\r\n\r\n6 Monate: 45,- â‚¬ monatlich\r\n\r\n3 Monate: 55,- â‚¬ monatlich\r\n\r\nEinmaliger Probetermin: 15,- â‚¬ |\r\n                     ', '9.90', '6.90', '99.00', '228.00', '396.00', '616.00', '56.00', '8.90', '5.90', '89.00', '192.00', '324.00', '484.00', '44.00', '6.90', '4.90', '69.00', '156.00', '252.00', '352.00', '32.00', '25.00', '20.00', '3.00', '2.00', '3.00', '2.50', '1.50', '2.50', '2.00', '1.00', 'Screenshot_2016-10-20-13-42-51-1_1476963856469_resized.png', 'IMG_20161013_191637_1476961136496.jpg', '1.png', 'monkey_var1.jpg', 'monkey_var1.jpg', 'monkey_var1.jpg', 'monkey_bar_150dpi_ES.pdf'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Newsfeed                                                             ', '                                                                Die Starttermine fÃ¼r unsere Boulderkurse stehen fest und wir freuen uns auf reges Interesse eurerseits!! //\r\n\r\nAls Schmankerl gibt es auf die erste Kursreihe 20 % ErmÃ¤ÃŸigung auf den regulÃ¤ren Preis. //\r\n\r\n\r\nDie Affen sind los! DI 18:30-20:00 \r\nStart 10.01.2017 //\r\n\r\n\r\nPump up the volume! FR 17:30 - 18:30\r\nStart 06.01.2017 //\r\n\r\n\r\nMonkeygang! SA 17:30 - 19:00\r\nStart 07.01.2017 //\r\n\r\n\r\nDesweiteren startet am 30.12.2016 unser wÃ¶chentlicher Kidsclub fÃ¼r die ambitionierten kleinen Kletterchampions von Morgen, betreut durch Roxana Wienand! \r\n\r\nDieser findet immer statt Freitags, 15:30 - 17:30 //\r\n\r\nWir freuen uns auf euch & euer Kommen,\r\n\r\nMonkeycrew Aschaffenburg\r\n\r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                  \r\n                ', 'SpaÃŸzeiten:                                                                                                                                          ', 'Bouldern & Monkeybar:\r\nTÃ¤glich 10:00 bis 23:00 Uhr \r\n(auch an den meisten gesetzlichen Feiertagen, bei Abweichungen findet Ihr einen entsprechenden Hinweis hier im Newsfeed)                                                                                 ', 'Kidsbouldern:                                                                                                 ', 'Mo bis Fr 11:00 bis 19:00 Uhr\r\nSa & So 10:00 bis 16:00 Uhr                                                                                                       ', 'Sauna:             ', 'Mo bis Fr 18:00 bis 23:00 Uhr \r\nSa & So 11:00 bis 21:00 Uhr // 5â‚¬ Aufpreis zum Tageseintritt, ab einer 11er-Karte inklusive      ', 'Die Affen sind los!\r\nZiel: Bouldersucht!                                                         ', 'Eindrehen, Hooken, Sloper usw. kennst du nur vom HÃ¶ren, oder noch garnicht, aber du willst unbedingt etwas mehr darÃ¼ber wissen? Dann bist du hier richtig!\r\n10x 90 Min fÃ¼r nur 220â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-12\r\nImmer Dienstags 18:30 - 20:00 Uhr                                  ', 'Monkeygang!\r\nZiel: Verbesserung der Klettertechnik                                                      ', 'Du willst lernen Probleme zu "lesen" und nicht nur durch brachialen Kraftaufwand zu toppen?\r\nDann schÃ¤rfe deine Skills und werde Teil der Monkeygang |\r\n10x 90 Min fÃ¼r schlappe 240â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-8                                           ', 'Pump up the volume!\r\nZiel: Strom in den Armen                                                         ', 'Max macht euch die HÃ¶lle heiÃŸ und nach 10x 60 Minuten der Qual fÃ¼hlt Ihr euch fit fÃ¼r EUER nÃ¤chstes Projekt |\r\nSowohl im KÃ¤fig als auch der Folterkammer erwarten euch Blut, SchweiÃŸ und TrÃ¤nen |\r\nPreis: 180â‚¬ inkl. Tageseintritt\r\nTeilnehmer 4-12\r\nImmer Freitags 17:30 - 18:30 Uhr                                           ', 'YOGA & Kidsclub        ', 'Yoga: (Einzelsitzung 90 Minuten: 19,- â‚¬ / Kombiticket inkl. Tageseintritt Bouldern 24,- â‚¬) |\r\nMittwoch 19:00 - 20:30 Uhr knackige Flows fÃ¼r KÃ¶rperspannung & RumpfstabilitÃ¤t |\r\nDonnerstag 20:00 - 21:30 klassische Hatha Sitzung gegen die verkÃ¼rzten Klettermuskeln |\r\nSamstag 10:30 - 11:30 Kids-Yoga (6-10 Jahre) |\r\nJeden zweiten Sonntag Regeneration & Entschleunigung 11:00 - 12:30 Uhr |\r\n\r\nKidsclub: FR 15:30 - 17:30\r\n\r\nKosten gestaffelt nach Laufzeit (GÃ¼ltig fÃ¼r 1 Termin pro Woche; Preise fÃ¼r mehrere Termine auf Anfrage)\r\n\r\n12 Monate: 35,- â‚¬ monatlich\r\n\r\n6 Monate: 45,- â‚¬ monatlich\r\n\r\n3 Monate: 55,- â‚¬ monatlich\r\n\r\nEinmaliger Probetermin: 15,- â‚¬ |\r\n                     ', '9.90', '6.90', '99.00', '228.00', '396.00', '616.00', '56.00', '8.90', '5.90', '89.00', '192.00', '324.00', '484.00', '44.00', '6.90', '4.90', '69.00', '156.00', '252.00', '352.00', '32.00', '25.00', '20.00', '3.00', '2.00', '3.00', '2.50', '1.50', '2.50', '2.00', '1.00', 'Screenshot_2016-10-20-13-42-51-1_1476963856469_resized.png', 'IMG_20161013_191637_1476961136496.jpg', '1.png', 'monkey_var1.jpg', 'monkey_var1.jpg', 'monkey_var1.jpg', 'monkey_bar_150dpi_ES.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
