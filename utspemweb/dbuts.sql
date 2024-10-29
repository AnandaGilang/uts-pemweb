-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 08:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` smallint(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel about';

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `kategori`, `isi`) VALUES
(1, 'About Me', 'Backend Engineer', 'I am a fifth-semester Informatics student with a focus on database management and software development. Skilled in SQL, database optimization, and design, I have hands-on experience with MySQL, PostgreSQL, and cloud databases like AWS RDS. My background also includes running a small e-commerce business, where I gained valuable insights in digital marketing and customer relationship management. I aim to leverage my technical and entrepreneurial skills to drive efficiency and innovation in the tech industry.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`, `submitted_at`) VALUES
('gilang', 'alek@gmail.com', '085789876543', 'gg', '2024-10-29 05:28:06'),
('gilang', 'alek@gmail.com', '085789876543', 'gg', '2024-10-29 05:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `judul`, `isi`) VALUES
(0, 'BOXING', 'My hobby is boxing, a sport that I have been passionately practicing for approximately two years. I embarked on this journey in 2022, motivated by my love for physical fitness and competition. Since then, I have dedicated countless hours to training, honing my skills, and improving my techniques in the ring. Throughout this time, I have had the opportunity to participate in various competitions, where I proudly achieved several championships, showcasing my hard work and determination in this exhilarating sport.');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` smallint(3) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel pendidikan';

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `asal`, `isi`) VALUES
(1, 'SMK NEGRI 5 TANGSEL', 'From 2016 to 2019, I attended SMK Negeri 5 Tangsel, where I majored in graphic design, gaining essential skills in visual communication and creative design principles.'),
(2, 'SMP NEGRI 11 TANGSEL', 'From 2013 to 2016, I attended SMP Negeri 11 Tangsel, where I developed a strong foundation in various subjects, preparing me for future academic and professional endeavors.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `nama` varchar(50) NOT NULL,
  `tagline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`nama`, `tagline`) VALUES
('Muhamad Fahmi', 'Web Developer, UI/UX Desain'),
('Muhamad Fahmi', 'Web Developer, UI/UX Desain'),
('Muhamad Fahmi', 'Web Developer, UI/UX Desain');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` smallint(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel project';

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `judul`, `isi`) VALUES
(1, 'FIRST PROJECT', 'My first project was a three-month internship at PT Artha Graha, working as part of the IT support team.\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 'SECOND PROJECTS', 'My second project was a six-month internship at Permata Printing as a UI/UX designer.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
