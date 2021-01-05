-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 07:20 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbee01`
--

-- --------------------------------------------------------

--
-- Table structure for table `shared`
--

CREATE TABLE `shared` (
  `sharedId` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `url` longtext NOT NULL,
  `author` longtext NOT NULL,
  `image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `languages` longtext NOT NULL,
  `publish` longtext NOT NULL,
  `country` longtext NOT NULL,
  `sharedBy` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shared`
--

INSERT INTO `shared` (`sharedId`, `title`, `url`, `author`, `image`, `description`, `languages`, `publish`, `country`, `sharedBy`) VALUES
(5, 'Brazil dispute with Pfizer vaccine; pledges emergency use for AstraZeneca\'s shots probably by mid January', 'https://en.mercopress.com/2020/12/31/brazil-dispute-with-pfizer-vaccine-pledges-emergency-use-for-astrazeneca-s-shots-probably-by-mid-january?utm_source=feed', 'null', 'https://en.mercopress.com/data/cache/noticias/79590/100x80/coronavac.jpg', 'Brazil will soon weigh emergency-use approval for AstraZeneca\'s COVID-19 vaccine after Britain gave the green light on Wednesday, as Latin America\'s largest country rushes to catch up with immunization programs under way around the hard-hit region.', 'en', '2020-12-31T08:30:03 00:00', 'us', 'stan01'),
(7, 'Argentina approves bill to legalize the voluntary interruption of pregnancy', 'https://en.mercopress.com/2020/12/30/argentina-approves-bill-to-legalize-the-voluntary-interruption-of-pregnancy?utm_source=feed', 'null', 'https://en.mercopress.com/data/cache/noticias/79581/100x80/senado-aborto.jpg', 'Argentina\'s Senate voted to legalize elective abortion early Wednesday, marking a historic political shift in the heavily Catholic country and larger region.', 'en', '2020-12-30T09:10:00 00:00', 'us', 'standip'),
(8, 'AstraZeneca vaccine not ready for EMA\'s approval during January', 'https://en.mercopress.com/2020/12/30/astrazeneca-vaccine-not-ready-for-ema-s-approval-during-january?utm_source=feed', 'null', 'https://en.mercopress.com/data/cache/noticias/79580/100x80/astrazeneca.jpg', 'The European Medicines Authority (EMA) will most likely not be able to approve the COVID-19 vaccine developed by drug maker AstraZeneca and the University of Oxford in January, the watchdogâ€™s Deputy Executive Director Noel Wathion said.', 'en', '2020-12-30T08:45:03 00:00', 'us', 'standip'),
(9, 'US Congress leaders homes vandalized over failed vote to increase relief checks', 'https://en.mercopress.com/2021/01/04/us-congress-leaders-homes-vandalized-over-failed-vote-to-increase-relief-checks?utm_source=feed', 'null', 'https://en.mercopress.com/data/cache/noticias/79613/100x80/spray.jpg', 'Vandals lashed out at the leaders of the U.S. House and Senate over the holiday weekend, blighting their homes with graffiti and in one case a pigâ€™s head as Congress failed to approve an increase in the amount of money being sent to individuals to help cope with the coronavirus pandemic.', 'en', '2021-01-04T04:27:00 00:00', 'us', 'rozario'),
(10, 'AstraZeneca vaccine not ready for EMA\'s approval during January', 'https://en.mercopress.com/2020/12/30/astrazeneca-vaccine-not-ready-for-ema-s-approval-during-january?utm_source=feed', 'null', 'https://en.mercopress.com/data/cache/noticias/79580/100x80/astrazeneca.jpg', 'The European Medicines Authority (EMA) will most likely not be able to approve the COVID-19 vaccine developed by drug maker AstraZeneca and the University of Oxford in January, the watchdogâ€™s Deputy Executive Director Noel Wathion said.', 'en', '2020-12-30T08:55:03 00:00', 'us', 'stan01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersCountry` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersCountry`, `usersPwd`) VALUES
(1, 'Stanley', 'st@gmail.com', 'stan01', 'Bangladesh', '$2y$10$jFqn/QfyZ6HBjpMBL0MpVukva4NBkecq4fskqLetRXGrtrNtcX5Ue'),
(2, 'Stanley', 'stanleydip04@gmail.com', 'stan', 'Bangladesh', '$2y$10$lZoOn63218vSHz/ZjrHc6OQmuaZSIl1dI0i/5.LXa.nAdo2Qx42v.'),
(3, 'Dip', 'stanleyd@gmail.com', 'standip', 'Bangladesh', '$2y$10$33wSAsgM4TstoPKZrgdQEOHguCyngjqlAenJaewPZC4RO2w3tp4Jm'),
(4, 'Rozario', 'stanleydr77@gmail.com', 'rozario', 'Bangladesh', '$2y$10$Ge2wz06pEg2SW2KW8PLVx.h0YuCIvM9dbBKvEXz0/3cxDd7sZqOZO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shared`
--
ALTER TABLE `shared`
  ADD PRIMARY KEY (`sharedId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shared`
--
ALTER TABLE `shared`
  MODIFY `sharedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
