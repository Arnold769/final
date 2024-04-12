-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2024 at 07:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RealEstateDevelopmentAgency`
--

-- --------------------------------------------------------

--
-- Table structure for table `ApartmentTourBookings`
--

CREATE TABLE `ApartmentTourBookings` (
  `booking_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ApartmentTourBookings`
--

INSERT INTO `ApartmentTourBookings` (`booking_id`, `first_name`, `last_name`, `phone_number`, `email`, `meeting_date`, `meeting_time`, `location`, `person_id`) VALUES
(1, 'Porter', 'Perkins', '+1 (635) 609-8334', 'xesozity@mailinator.com', '1987-07-24', '11:00:00', 'Painter', NULL),
(2, 'Cecilia', 'Williamson', '+1 (882) 469-1031', 'xowibyv@mailinator.com', '1979-04-20', '13:00:00', 'Labourer', NULL),
(3, 'Beverly', 'Sosa', '+1 (249) 544-3919', 'nuzos@mailinator.com', '1977-10-24', '12:00:00', 'Welder', NULL),
(4, 'Reed', 'Walsh', '+1 (462) 758-5417', 'fenan@mailinator.com', '1986-09-08', '10:00:00', 'Mason', NULL),
(5, 'Arnold', 'Aryeequaye', '0208664036', 'aryeequaye41@gmail.com', '2024-04-23', '13:00:00', 'Labourer', NULL),
(6, 'Jude ', 'Bellingham', '+1 (176) 556-9363', 'judeb@gmail.com', '2024-04-19', '15:00:00', 'North Legon', NULL),
(7, 'Basil', 'Maxwell', '+1 (136) 695-4304', 'roboletiko@mailinator.com', '1973-03-17', '11:00:00', 'Dome', NULL),
(8, 'Ian', 'Jacobson', '+1 (629) 982-5867', 'buwigiciby@mailinator.com', '1971-10-17', '10:00:00', 'North Legon', 12),
(9, 'Kristen', 'Brock', '+1 (759) 484-2746', 'jufahoqyte@mailinator.com', '1976-02-12', '13:00:00', 'Kwabenya', 12),
(10, 'Mariamfghddf', 'Wahab', '0208664036', 'mariamw605@gmail.com', '2024-04-26', '12:00:00', 'Pantang', 13),
(11, 'Ria', 'Watkins', '+1 (972) 602-1348', 'zimekekan@mailinator.com', '2011-07-15', '12:00:00', 'Dome', 12),
(12, 'Geoffrey', 'Livingston', '+1 (416) 165-3591', 'byxuruwa@mailinator.com', '1995-11-20', '11:00:00', 'Dome', 12),
(13, 'Geoffrey', 'Livingston', '+1 (416) 165-3591', 'byxuruwa@mailinator.com', '1995-11-20', '11:00:00', 'Dome', 12),
(14, 'Christine', 'Morin', '+1 (734) 154-5585', 'tisi@mailinator.com', '1977-09-04', '10:00:00', 'North Legon', 12),
(16, 'John', 'doe', '0208664036', 'arnold.aryeequaye@ashesi.edu.gh', '2024-04-09', '12:00:00', 'North Legon', 14),
(17, 'Arnold', 'Aryeequayexcl; ', '+1 (629) 982-5867', 'aryeequaye41@gmail.com', '2024-04-09', '11:00:00', 'Haatso', 14);

-- --------------------------------------------------------

--
-- Table structure for table `ContactUs`
--

CREATE TABLE `ContactUs` (
  `inquiry_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ContactUs`
--

INSERT INTO `ContactUs` (`inquiry_id`, `email`, `subject`, `message`, `first_name`, `last_name`) VALUES
(1, 'porajy@mailinator.com', '+1 (586) 117-9759', 'Obcaecati aut sint d', '', 'Rose'),
(2, 'pumygodu@mailinator.com', '+1 (133) 826-7106', 'Rerum quibusdam aut ', '', 'Hester'),
(3, 'mowitu@mailinator.com', '+1 (326) 614-4425', 'Culpa et provident', 'Amela', 'Velazquez'),
(4, 'pumuc@mailinator.com', '+1 (704) 325-1471', 'man taya o damn', 'Odysseus', 'Horn'),
(5, 'm@gmail.com', 'Inquiry on Mortgage Plans', 'I would like to know what mortgage plans you have available', 'Arnold', 'Aryeequaye'),
(6, 'm@gmail.com', 'Inquiry on Mortgage Plans', 'I would like to know what mortgage plans you have available', 'Arnold', 'Aryeequaye'),
(7, 'wuvipo@mailinator.com', 'Onyae gbemi', 'Skelewu\r\n', 'Cassandra', 'Oconnor'),
(8, 'wuvipo@mailinator.com', 'Onyae gbemi', 'Skelewu\r\n', 'Cassandra', 'Oconnor');

-- --------------------------------------------------------

--
-- Table structure for table `Contracts`
--

CREATE TABLE `Contracts` (
  `contract_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job_role` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cv_file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `person_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`person_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role_id`) VALUES
(6, 'Geraldine', 'Day', 'gulawotagu@mailinator.com', 'Pa$$w0rd!', '+1 (762) 499-9734', 'Quis natus architect', NULL),
(7, 'Daniel', 'Bowers', 'vijaxiri@mailinator.com', '$2y$10$aoaLJXHH1y7oUxDE3d/zwurMTG7PDq8haxgTCEFrtUbQbjedDvDwW', '+1 (716) 873-8066', 'Amet dolor consecte', NULL),
(8, 'Lamine', 'clottey', 'm@gmail.com', '$2y$10$VoAHUY0iOBeJSu9K.DTBe..boDtGhVIBNV17qaaZwiqkwvRHAnAtu', '34567898765432', 'Recusandae Aut et c', NULL),
(9, 'Emmanuel', 'Osei-Kesse', 'e@gmail.com', '$2y$10$xQJf98Ub7MvFihmbKHN.V.lmHBAoIS1THbJHt8F.F64ZrWgHBwUJu', '0208464036', 'Dolore placeat sed ', NULL),
(10, 'Karina', 'Bates', 'sixadihyj@mailinator.com', '$2y$10$4GAN.xiF9HzNf5Fxtz.xeOPJNhMfxO2lhBk97pyVxUZnEkXOhumJ6', '+1 (125) 406-1698', 'Anim laborum facere ', 3),
(11, 'Uta', 'Duran', 'puzabuqy@mailinator.com', '$2y$10$pUPTSJp.78UwDZR5WNWQP./mBzPYJe/LRLs0KcOD2jXBIxO/DBBj2', '+1 (544) 743-7369', 'Officiis culpa nemo ', 3),
(12, 'Arnold', 'Aryeequaye', 'aryeequaye41@gmail.com', '$2y$10$Dj7mdcWlWu2BlVuD7uBz0.T59k.gmDhyo5avwFsdaMnkb02XtCi4K', '0208464036', 'Est ut consectetur ', 2),
(13, 'Mariam', 'Wahab', 'mariamw605@gmail.com', '$2y$10$W2whlLIjdNoKneu5JP5U3O8Pn79TH4BhdI/RuWkRJC6sIoE9sMjvy', '0247898014', 'iyvfouyv ', 3),
(14, 'Kweku', 'Arnold', 'k@gmail.com', '$2y$10$meP08ebBACjiTKIqkV.FEe6Z186mwN0//T.AtOw8xTst0AUZsHjWm', '0208464036', 'aldsncsld', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'super_admin'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ApartmentTourBookings`
--
ALTER TABLE `ApartmentTourBookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `fk_apt_bookings_people` (`person_id`);

--
-- Indexes for table `ContactUs`
--
ALTER TABLE `ContactUs`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `Contracts`
--
ALTER TABLE `Contracts`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`person_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_people_roles` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ApartmentTourBookings`
--
ALTER TABLE `ApartmentTourBookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ContactUs`
--
ALTER TABLE `ContactUs`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Contracts`
--
ALTER TABLE `Contracts`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ApartmentTourBookings`
--
ALTER TABLE `ApartmentTourBookings`
  ADD CONSTRAINT `fk_apt_bookings_people` FOREIGN KEY (`person_id`) REFERENCES `people` (`person_id`);

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `fk_people_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
