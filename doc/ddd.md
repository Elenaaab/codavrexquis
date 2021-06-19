* TABLES 

=============================================================================
VERSION #1
=============================================================================

CODAVRE : id, word, type (enum : sujet, verbe, complement, adjectif)
TROLL:  id, word, type (enum : sujet, verbe, complement, adjectif)

=============================================================================
VERSION #2
=============================================================================

* BDD CODAVRE : 

SUJET : id, word
ADJECTIF : id, word
VERBE : id, word
COMPLEMENT : id, word

* BDD TROLL : 

SUJET : id, word
ADJECTIF : id, word
VERBE : id, word
COMPLEMENT : id, word

=============================================================================
TABLE CODAVRE
=============================================================================

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `adjectif`;
CREATE TABLE `adjectif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `complement`;
CREATE TABLE `complement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `sujet`;
CREATE TABLE `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `verbe`;
CREATE TABLE `verbe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

=============================================================================
TABLE TROLL
=============================================================================

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `adjectif`;
CREATE TABLE `adjectif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `complement`;
CREATE TABLE `complement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `sujet`;
CREATE TABLE `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `verbe`;
CREATE TABLE `verbe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;