-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 04:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_Anggota` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_Anggota`, `username`, `name`, `email`, `password`, `phone`, `address`, `role`) VALUES
(1, 'hasrul', 'Teuku Hashrul', 'hasrul.com', '4cf23f43060d9898abe14330e41873f1', 123, 'jl fanny', 'admin'),
(2, 'giovani', 'giovani', 'giovani.com', 'f1b6d941a97ababa0c81b92841b3189f', 1234, 'jl . alit', 'user'),
(3, 'arru', 'arru', 'arru.com', '43367d33388c874c9f9b3f662b8d48af', 727, 'jl dagir', 'user'),
(6, 'fathia', 'fathia', 'fathia.com', '9c1d24e09979691c569330d631fab7e6', 12345, 'jl fathia', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_Book` int(100) NOT NULL,
  `code` varchar(4) NOT NULL,
  `title` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publication_Year` int(4) NOT NULL,
  `publisher` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_Book`, `code`, `title`, `author`, `publication_Year`, `publisher`) VALUES
(1, 'h123', 'Laskar Pel', 'Andrea Hirata', 2005, 'gramedia'),
(2, 'h122', 'Dilan 1990', 'Pidi Baiq Banget', 2010, 'litera'),
(3, 'h124', 'sherlock h', 'watson brother', 1998, 'gramedia'),
(4, 'h125', 'sherlock h', 'watson brother', 1998, 'gramediaa'),
(5, 'h126', 'digimon', 'koji wada', 2000, 'gramed');

-- --------------------------------------------------------

--
-- Stand-in structure for view `booklist`
-- (See below for the actual view)
--
CREATE TABLE `booklist` (
`code` varchar(4)
,`title` varchar(10)
,`author` varchar(100)
,`publication_Year` int(4)
,`publisher` varchar(10)
,`category_Name` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_Category` int(100) NOT NULL,
  `category_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_Category`, `category_Name`) VALUES
(1, 'Horror'),
(2, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `category_book`
--

CREATE TABLE `category_book` (
  `id_Cb` int(100) NOT NULL,
  `id_Book` int(100) NOT NULL,
  `id_Category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_book`
--

INSERT INTO `category_book` (`id_Cb`, `id_Book`, `id_Category`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 4, 2),
(4, 5, 1);

-- --------------------------------------------------------

--
-- Structure for view `booklist`
--
DROP TABLE IF EXISTS `booklist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `booklist`  AS  select `book`.`code` AS `code`,`book`.`title` AS `title`,`book`.`author` AS `author`,`book`.`publication_Year` AS `publication_Year`,`book`.`publisher` AS `publisher`,`category`.`category_Name` AS `category_Name` from ((`book` join `category_book` on((`book`.`id_Book` = `category_book`.`id_Book`))) join `category` on((`category_book`.`id_Category` = `category`.`id_Category`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_Anggota`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_Book`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_Category`);

--
-- Indexes for table `category_book`
--
ALTER TABLE `category_book`
  ADD PRIMARY KEY (`id_Cb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_Anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_Book` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_Category` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_book`
--
ALTER TABLE `category_book`
  MODIFY `id_Cb` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
