-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 12:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breif`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
CREATE DATABASE myressources;
USE myressources;
CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `Its_subcategoryID` int(11) DEFAULT NULL,
  `categoryNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `Its_subcategoryID`, `categoryNAME`) VALUES
(1, 2, 'Website'),
(2, 1, 'Youtube Channel'),
(3, 6, 'Book'),
(4, 6, 'Ebook'),
(5, 7, 'Podcast'),
(6, 3, 'Online cource'),
(7, 4, 'Cheat sheets'),
(8, 2, 'School');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(11) NOT NULL,
  `projectNAME` varchar(50) DEFAULT NULL,
  `projectDescription` varchar(100) DEFAULT NULL,
  `projectStart` date DEFAULT NULL,
  `projectEnd` date DEFAULT NULL,
  `ressource_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `projectNAME`, `projectDescription`, `projectStart`, `projectEnd`, `ressource_ID`) VALUES
(0, 'no Project', 'No DATA', NULL, NULL, NULL),
(1, 'PhotoMasters', 'PhotoMasters is a website for photographers who work to film and take pictures in diffrent occations', '2023-11-20', '2023-12-01', 5),
(2, 'Wishe', 'A website for online marketing and shopping where you can find all types of products', '2023-11-20', '2024-01-15', 3),
(3, 'planify', 'A website To manage all your tasks and projects', '2023-11-19', '2024-02-22', 1),
(4, 'MyRessources', 'A database where you can manage , create or assign teams with projects and with ressources', '2023-11-15', '2023-11-20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ressources`
--

CREATE TABLE `ressources` (
  `ressourceID` int(11) NOT NULL,
  `category_ID` int(11) DEFAULT NULL,
  `ressourceNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ressources`
--

INSERT INTO `ressources` (`ressourceID`, `category_ID`, `ressourceNAME`) VALUES
(1, 6, 'Udemy'),
(2, 6, 'CodeCademy'),
(3, 1, 'Stack overflow'),
(4, 2, '100 seconds code'),
(5, 6, 'freecodecamp'),
(6, 7, 'hopeui'),
(7, 8, 'YouCode'),
(8, 3, 'Jon Duckett\'s'),
(9, 4, 'Code for dummies.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `squads`
--

CREATE TABLE `squads` (
  `squadID` int(11) NOT NULL,
  `squadName` varchar(30) DEFAULT NULL,
  `leaderID` int(11) DEFAULT NULL,
  `Current_projectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `squads`
--

INSERT INTO `squads` (`squadID`, `squadName`, `leaderID`, `Current_projectID`) VALUES
(1, 'Brogrammers', 10, 1),
(2, 'ProDevs', 15, 3),
(3, 'CODEZILLA', 6, 2),
(4, 'cell13', 3, 1),
(5, 'Alpha', 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryID` int(11) NOT NULL,
  `subcategoryNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategoryID`, `subcategoryNAME`) VALUES
(1, 'Free'),
(2, 'Paid'),
(3, 'Detailed'),
(4, 'Quick'),
(5, 'Video'),
(6, 'Text'),
(7, 'Sound');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(40) DEFAULT NULL,
  `UserEmail` varchar(40) DEFAULT NULL,
  `squad_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `UserEmail`, `squad_ID`) VALUES
(1, 'Abdeljabar Ait Ayoub', 'abdeljabarAitAyoub@gmail.com', 1),
(2, 'Abdeljalil El Filaly', 'abdeljalilELfilaly@gmail.com', 5),
(3, 'Abdellah Bardich', 'abdellahBardich@gmail.com', 4),
(4, 'Aicha Ettabet', 'aichaEttabet@gmail.com', 4),
(5, 'Anass Ait Ouaguerd', 'anassAitOuaguerd@gmail.com', 3),
(6, 'Anass Drissi', 'anassDrissi@gmail.com', 3),
(7, 'Hamza Ezzhar El Idrissi', 'hamzaEzzharElIdrissi@gmail.com', 4),
(8, 'Khalid Zennouhi', 'khalidZennouhi@gmail.com', 2),
(9, 'Khalid Haiddou', 'khalidHaiddou@gmail.com', 5),
(10, 'Khalid El Mati', 'khalidElMati@gmail.com', 1),
(11, 'Latifa Chakir', 'latifaChakir@gmail.com', 3),
(12, 'Mbarek El Aadraoui', 'mbarekElAadraoui@gmail.com', 1),
(13, 'Mohamed Amine Baih', 'mohamedAmineBaih@gmail.com', 3),
(14, 'Mohammed-amine Benmade', 'mohammedAmineBenmade@gmail.com', 3),
(15, 'Nabil El Hakimi', 'nabilElHakimi@gmail.com', 2),
(16, 'Niama El Hrychy', 'niamaElHrychy@gmail.com', 2),
(17, 'Otman Kharbouch', 'otmankharbouch813@gmail.com', 2),
(18, 'Oumaima El Baz', 'oumaimaElBaz@gmail.com', 5),
(19, 'Rabia Ait Imghi', 'rabiaAitImghi@gmail.com', 5),
(20, 'Soumaya Ait Lmqaddam', 'soumayaAitLmqaddam@gmail.com', 1),
(21, 'Youness Erbai', 'younessErbai@gmail.com', 4),
(22, 'Zouhair Zerzkhane', 'zouhairZerzkhane@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `Its_subcategoryID` (`Its_subcategoryID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectID`),
  ADD KEY `ressource_ID` (`ressource_ID`);

--
-- Indexes for table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`ressourceID`),
  ADD KEY `category_ID` (`category_ID`);

--
-- Indexes for table `squads`
--
ALTER TABLE `squads`
  ADD PRIMARY KEY (`squadID`),
  ADD KEY `Current_projectID` (`Current_projectID`),
  ADD KEY `leaderID` (`leaderID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `squad_ID` (`squad_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `ressourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `squads`
--
ALTER TABLE `squads`
  MODIFY `squadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`Its_subcategoryID`) REFERENCES `subcategory` (`subcategoryID`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`ressource_ID`) REFERENCES `ressources` (`ressourceID`);

--
-- Constraints for table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `ressources_ibfk_1` FOREIGN KEY (`category_ID`) REFERENCES `category` (`categoryID`);

--
-- Constraints for table `squads`
--
ALTER TABLE `squads`
  ADD CONSTRAINT `squads_ibfk_1` FOREIGN KEY (`Current_projectID`) REFERENCES `projects` (`projectID`),
  ADD CONSTRAINT `squads_ibfk_2` FOREIGN KEY (`leaderID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`squad_ID`) REFERENCES `squads` (`squadID`);

--Joining all data in ine table for an overview.

  SELECT * FROM users
  JOIN squads ON users.squad_ID = squads.squadID 
  JOIN projects ON squads.Current_projectID = projects.projectID
  JOIN ressources ON projects.ressource_ID = ressources.ressourceID
  JOIN category ON ressources.category_ID = category.categoryID
  JOIN subcategory ON category.Its_subcategoryID = subcategory.subcategoryID;


USE myressources;
SELECT ressourceNAME, categoryNAME , subcategoryNAME 
FROM ressources 
JOIN category ON ressources.category_ID = category.categoryID
JOIN subcategory ON category.Its_subcategoryID = subcategory.subcategoryID
WHERE ressourceID = 1;

DELETE FROM projects WHERE projectID = 0;
SELECT * FROM projects;

ALTER TABLE projects MODIFY projectID INT NOT NULL;
SELECT * FROM squads;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
