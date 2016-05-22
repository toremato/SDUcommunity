-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 06:15 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sducommunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `motto` varchar(100) NOT NULL,
  `head` int(11) NOT NULL,
  `short_info` text NOT NULL,
  `info` int(11) NOT NULL,
  `members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(70) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `short_content`, `content`, `date`, `time`) VALUES
(1, 'Infomatrix 2016', 'InfoMatrix is an international computer project competition, born from a desire to bring the world''s best IT students together.', 'InfoMatrix is an international computer project competition, born from a desire to bring the world''s best IT students together. The competition is not just about promoting professional excellence; it also serves to promote intercultural dialogue and cooperation, through the involvement of students and teachers from many different countries.\r\nStarting from 2013, Suleyman Demirel University organizes Infomatrix Asia competition in Kaskelen, Almaty. Nearly, 400 students from more than 28 countries participate in five categories.\r\nInfoMatrix is an international computer project competition, born from a desire to bring the world''s best IT students together. The competition is not just about promoting professional excellence; it also serves to promote intercultural dialogue and cooperation, through the involvement of students and teachers from many different countries.\r\nStarting from 2013, Suleyman Demirel University organizes Infomatrix Asia competition in Kaskelen, Almaty. Nearly, 400 students from more than 28 countries participate in five categories.\r\nInfoMatrix is an international computer project competition, born from a desire to bring the world''s best IT students together. The competition is not just about promoting professional excellence; it also serves to promote intercultural dialogue and cooperation, through the involvement of students and teachers from many different countries.\r\nStarting from 2013, Suleyman Demirel University organizes Infomatrix Asia competition in Kaskelen, Almaty. Nearly, 400 students from more than 28 countries participate in five categories.\r\nInfoMatrix is an international computer project competition, born from a desire to bring the world''s best IT students together. The competition is not just about promoting professional excellence; it also serves to promote intercultural dialogue and cooperation, through the involvement of students and teachers from many different countries.\r\nStarting from 2013, Suleyman Demirel University organizes Infomatrix Asia competition in Kaskelen, Almaty. Nearly, 400 students from more than 28 countries participate in five categories.', '2016-05-21', '16:52:50'),
(2, 'SDU Admissions', 'This year, admission requirements will not be changed.', 'This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.This year, admission requirements will not be changed.', '2016-05-21', '16:58:19'),
(6, 'Hello', 'It''s me', 'How are you? ::E":WE"WE":EW"""E)(&^~%~^~P{"~"', '2016-05-22', '01:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `author` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `category` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `category`, `admin`) VALUES
(1, 'postalpro', 'Smat', 'Sagandyk', 'smatsmat', 'smat@gmail.com', 1, 0),
(2, 'a', 'a', 'Torekhan', 'Maratov', 'a@gmail.com', 1, 0),
(3, 'toremato', 'toremato', 'Torekhan', 'Maratov', 'toremato@gmail.com', 1, 0),
(4, 'qwerty', 'temir', 'kok', 'pass', 'lala@gmail.com', 1, 0),
(5, 'user', 'pass', 'first', 'last', 'email@gmail.com', 1, 0),
(6, 'admin', 'admin', 'Admin', 'Adminov', 'admin@sducommunity.kz', 3, 1),
(10, 'tatata', 'tatatuu', 'tataa', 'tatata', 'tata@gmail.com', 4, 0),
(11, 'toremaratov', 'toremato', 'Tore', 'Maratov', 'tore.maratov@gmail.com', 1, 0),
(12, 'testacc', 'testacc', '', '', '', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members` (`members`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_ibfk_1` FOREIGN KEY (`members`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
