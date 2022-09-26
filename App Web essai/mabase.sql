-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 09:05 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `enregistrement`
--

CREATE TABLE IF NOT EXISTS `enregistrement` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `q` int(11) NOT NULL,
  `r` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `t` int(11) NOT NULL,
  `u` int(11) NOT NULL,
  `v` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enregistrement`
--

INSERT INTO `enregistrement` (`email`, `password`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`, `x`, `y`) VALUES
('ojoj@gmail.com', 'wxcvbn', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 4, 5, 4, 5),
('rzzrip@gmail.com', 'zeiejrazprj', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `enregistrer`
--

CREATE TABLE IF NOT EXISTS `enregistrer` (
  `matricule` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `dates` date NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `options` varchar(20) NOT NULL,
  `inscription` varchar(20) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enregistrer`
--

INSERT INTO `enregistrer` (`matricule`, `adresse`, `dates`, `nom`, `prenom`, `sexe`, `filiere`, `options`, `inscription`, `commentaire`) VALUES
('sdvsdvsd', 'vzvz', '0000-00-00', 'zeffefzefz', 'zefzef', 'homme', 'Informatique de Gest', 'BTS', '1', 'zefzefzef');

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

CREATE TABLE IF NOT EXISTS `filiere` (
  `codefil` varchar(20) NOT NULL,
  `libellefil` varchar(20) NOT NULL,
  PRIMARY KEY (`codefil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`codefil`, `libellefil`) VALUES
('lolo', 'IG');

-- --------------------------------------------------------

--
-- Table structure for table `langage`
--

CREATE TABLE IF NOT EXISTS `langage` (
  `codelang` varchar(20) NOT NULL,
  `libellelang` varchar(20) NOT NULL,
  PRIMARY KEY (`codelang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langage`
--

INSERT INTO `langage` (`codelang`, `libellelang`) VALUES
('fghjk', 'hjk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
mabase