-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: June 02, 2024 at 03:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`) VALUES
(1, 'pakistan', 1),
(2, 'china', 1),
(3, 'iran', 1),
(4, 'UAE', 1),
(5, 'israel', 1),
(6, 'fdsadf', 1),
(202, 'Afghanistan', 1),
(203, 'Albania', 1),
(204, 'Algeria', 1),
(205, 'Andorra', 1),
(206, 'Angola', 1),
(207, 'Antigua and Barbuda', 1),
(208, 'Argentina', 1),
(209, 'Armenia', 1),
(210, 'Australia', 1),
(211, 'Austria', 1),
(212, 'Azerbaijan', 1),
(213, 'Bahamas', 1),
(214, 'Bahrain', 1),
(215, 'Bangladesh', 1),
(216, 'Barbados', 1),
(217, 'Belarus', 1),
(218, 'Belgium', 1),
(219, 'Belize', 1),
(220, 'Benin', 1),
(221, 'Bhutan', 1),
(222, 'Bolivia', 1),
(223, 'Bosnia and Herzegovina', 1),
(224, 'Botswana', 1),
(225, 'Brazil', 1),
(226, 'Brunei', 1),
(227, 'Bulgaria', 1),
(228, 'Burkina Faso', 1),
(229, 'Burundi', 1),
(230, 'Cabo Verde', 1),
(231, 'Cambodia', 1),
(232, 'Cameroon', 1),
(233, 'Canada', 1),
(234, 'Central African Republic', 1),
(235, 'Chad', 1),
(236, 'Chile', 1),
(237, 'Colombia', 1),
(238, 'Comoros', 1),
(239, 'Congo', 1),
(240, 'Costa Rica', 1),
(241, 'Croatia', 1),
(242, 'Cuba', 1),
(243, 'Cyprus', 1),
(244, 'Czechia', 1),
(245, 'Denmark', 1),
(246, 'Djibouti', 1),
(247, 'Dominica', 1),
(248, 'Dominican Republic', 1),
(249, 'India', 1),
(250, 'Indonesia', 1),
(251, 'Pakistan', 1),
(252, 'Brazil', 1),
(253, 'Nigeria', 1),
(254, 'Bangladesh', 1),
(255, 'Russia', 1),
(256, 'Mexico', 1),
(257, 'Japan', 1),
(258, 'Ethiopia', 1),
(259, 'Philippines', 1),
(260, 'Egypt', 1),
(261, 'Vietnam', 1),
(262, 'DR Congo', 1),
(263, 'Turkey', 1),
(264, 'Iran', 1),
(265, 'Germany', 1),
(266, 'Thailand', 1),
(267, 'United Kingdom', 1),
(268, 'France', 1),
(269, 'Italy', 1),
(270, 'South Africa', 1),
(271, 'Myanmar', 1),
(272, 'South Korea', 1),
(273, 'Colombia', 1),
(274, 'Spain', 1),
(275, 'Ukraine', 1),
(276, 'Tanzania', 1),
(277, 'Argentina', 1),
(278, 'Kenya', 1),
(279, 'Poland', 1),
(280, 'Algeria', 1),
(281, 'Canada', 1),
(282, 'Uganda', 1),
(283, 'Morocco', 1),
(284, 'Iraq', 1),
(285, 'Sudan', 1),
(286, 'Afghanistan', 1),
(287, 'Uzbekistan', 1),
(288, 'Peru', 1),
(289, 'Malaysia', 1),
(290, 'Angola', 1),
(291, 'Mozambique', 1),
(292, 'Ghana', 1),
(293, 'Yemen', 1),
(294, 'Nepal', 1),
(295, 'Venezuela', 1),
(296, 'Madagascar', 1),
(297, 'Cameroon', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
