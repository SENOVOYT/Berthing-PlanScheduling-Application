-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bethsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `changes`
--

CREATE TABLE `changes` (
  `ID_Changes` int(11) NOT NULL,
  `Deliver_To_Roles` varchar(45) NOT NULL,
  `Change_Type` varchar(45) NOT NULL,
  `Change_By` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `changes`
--

INSERT INTO `changes` (`ID_Changes`, `Deliver_To_Roles`, `Change_Type`, `Change_By`) VALUES
(1, '3', '4', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `delays_table`
--

CREATE TABLE `delays_table` (
  `ID_Delays` int(11) NOT NULL,
  `Delay_Name` varchar(45) NOT NULL,
  `Delay_Start_Time` datetime NOT NULL,
  `Delay_End_Time` datetime NOT NULL,
  `ID_Voyage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delays_table`
--

INSERT INTO `delays_table` (`ID_Delays`, `Delay_Name`, `Delay_Start_Time`, `Delay_End_Time`, `ID_Voyage`) VALUES
(1, 'CRANE HATCH COVER', '2022-04-04 14:00:59', '2022-04-04 14:15:59', 1),
(2, 'FLAT TIRE', '2022-04-04 15:00:59', '2022-04-04 16:00:59', 1),
(3, 'NO FUEL', '2022-04-05 15:00:59', '2022-04-05 15:10:59', 2),
(4, 'TWICK LOCK FAILURE', '2022-04-05 15:20:59', '2022-04-05 15:40:59', 2);

-- --------------------------------------------------------

--
-- Table structure for table `entity_box_position`
--

CREATE TABLE `entity_box_position` (
  `ID_Position` int(11) NOT NULL,
  `X_Position(Row)` varchar(45) NOT NULL,
  `Y_Position(Column)` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entity_box_position`
--

INSERT INTO `entity_box_position` (`ID_Position`, `X_Position(Row)`, `Y_Position(Column)`) VALUES
(1, '40', '20'),
(2, '50', '30'),
(3, '56', '43');

-- --------------------------------------------------------

--
-- Table structure for table `machine_table`
--

CREATE TABLE `machine_table` (
  `ID_Machine` tinyint(3) NOT NULL,
  `Cranes` varchar(45) DEFAULT NULL,
  `Hystacker` varchar(45) DEFAULT NULL,
  `Tow_Head` varchar(45) DEFAULT NULL,
  `Trucks` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine_table`
--

INSERT INTO `machine_table` (`ID_Machine`, `Cranes`, `Hystacker`, `Tow_Head`, `Trucks`) VALUES
(1, 'Crane 1', 'Hystacker 4', 'Tow Head 7', 'Truck 4'),
(2, 'Crane 5', 'Hystacker 2', 'Tow Head 2', 'Truck 6');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID_Notification` int(11) NOT NULL,
  `Notification_Message` longtext NOT NULL,
  `Changes_Made` varchar(45) NOT NULL,
  `ID_Changes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID_Notification`, `Notification_Message`, `Changes_Made`, `ID_Changes`) VALUES
(1, 'the worker made a change to the schedule.', 'worker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report_table`
--

CREATE TABLE `report_table` (
  `Report_ID` int(11) NOT NULL,
  `ID_Voyage` smallint(5) NOT NULL,
  `ID_Changes` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_table`
--

INSERT INTO `report_table` (`Report_ID`, `ID_Voyage`, `ID_Changes`) VALUES
(1, 1, 500),
(9, 23, 32);

-- --------------------------------------------------------

--
-- Table structure for table `roles_table`
--

CREATE TABLE `roles_table` (
  `ID_Roles` int(11) NOT NULL,
  `Roles_Type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_agents`
--

CREATE TABLE `shipping_agents` (
  `Agent_ID` tinyint(3) NOT NULL,
  `Agent_Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_agents`
--

INSERT INTO `shipping_agents` (`Agent_ID`, `Agent_Name`) VALUES
(1, 'HYDE SHIPPING'),
(2, 'BEC'),
(3, 'CARRIBEAN SHIPPING'),
(4, 'APEX SHIPPING');

-- --------------------------------------------------------

--
-- Table structure for table `ship_table`
--

CREATE TABLE `ship_table` (
  `Ship_ID` tinyint(3) NOT NULL,
  `Ship_Name` varchar(45) NOT NULL,
  `Departure_Location` varchar(45) NOT NULL,
  `Vessel_Size` varchar(45) NOT NULL,
  `Vessel_Type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship_table`
--

INSERT INTO `ship_table` (`Ship_ID`, `Ship_Name`, `Departure_Location`, `Vessel_Size`, `Vessel_Type`) VALUES
(1, 'CARIBE MARINER', 'JAMAICA', '100 METERS', 'CONTAINER'),
(2, 'TOPIC LURE', 'BRAZIL', '30 METERS', 'CONTAINER'),
(3, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(5, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(6, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(7, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(8, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(9, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(10, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER'),
(11, 'ARIES', 'CHINA', '50 METERS', 'BULK FERTILIZER');

-- --------------------------------------------------------

--
-- Table structure for table `status_vessel`
--

CREATE TABLE `status_vessel` (
  `ID_Status` tinyint(3) NOT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_vessel`
--

INSERT INTO `status_vessel` (`ID_Status`, `Status`) VALUES
(1, 'IN ROUTE'),
(2, 'DEPARTED'),
(3, 'WORKING'),
(4, 'BREAK'),
(5, 'LATE');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `ID_Time` int(11) NOT NULL,
  `ETA` datetime NOT NULL,
  `ETD` datetime NOT NULL,
  `ATA` datetime NOT NULL,
  `ATD` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`ID_Time`, `ETA`, `ETD`, `ATA`, `ATD`) VALUES
(1, '2022-04-04 13:00:00', '2022-04-05 13:00:00', '2022-04-04 13:00:00', '2022-04-05 13:00:00'),
(2, '2022-04-06 13:00:00', '2022-04-07 13:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `ID_Users` int(11) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Middle_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `ID_Roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voyage_table`
--

CREATE TABLE `voyage_table` (
  `ID_Voyage` smallint(5) NOT NULL,
  `Voyage_Number` varchar(45) NOT NULL,
  `Ship_ID` tinyint(3) NOT NULL,
  `ID_Position` int(11) NOT NULL,
  `Shipping_Agents_Agent_ID` tinyint(3) NOT NULL,
  `ID_Status` tinyint(3) NOT NULL,
  `ID_Time` int(11) NOT NULL,
  `Workers_ID` tinyint(3) NOT NULL,
  `ID_Machine` tinyint(3) NOT NULL,
  `ID_Delays` int(11) NOT NULL,
  `Report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voyage_table`
--

INSERT INTO `voyage_table` (`ID_Voyage`, `Voyage_Number`, `Ship_ID`, `ID_Position`, `Shipping_Agents_Agent_ID`, `ID_Status`, `ID_Time`, `Workers_ID`, `ID_Machine`, `ID_Delays`, `Report_ID`) VALUES
(1, '2323', 6, 1, 3, 3, 2, 1, 1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `voyage_workers`
--

CREATE TABLE `voyage_workers` (
  `Workers_ID` tinyint(3) NOT NULL,
  `Stevedore_Gang` tinyint(3) NOT NULL,
  `Gang_Foreman` tinyint(3) NOT NULL,
  `Pilot` varchar(45) NOT NULL,
  `Stacker_Operator` varchar(45) NOT NULL,
  `Drivers` varchar(45) NOT NULL,
  `Operation_Supervisor` varchar(45) NOT NULL,
  `Crane_Operator` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voyage_workers`
--

INSERT INTO `voyage_workers` (`Workers_ID`, `Stevedore_Gang`, `Gang_Foreman`, `Pilot`, `Stacker_Operator`, `Drivers`, `Operation_Supervisor`, `Crane_Operator`) VALUES
(1, 1, 1, '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `changes`
--
ALTER TABLE `changes`
  ADD PRIMARY KEY (`ID_Changes`);

--
-- Indexes for table `delays_table`
--
ALTER TABLE `delays_table`
  ADD PRIMARY KEY (`ID_Delays`);

--
-- Indexes for table `entity_box_position`
--
ALTER TABLE `entity_box_position`
  ADD PRIMARY KEY (`ID_Position`);

--
-- Indexes for table `machine_table`
--
ALTER TABLE `machine_table`
  ADD PRIMARY KEY (`ID_Machine`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID_Notification`,`ID_Changes`),
  ADD KEY `fk_Notification_Changes1_idx` (`ID_Changes`);

--
-- Indexes for table `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`Report_ID`);

--
-- Indexes for table `roles_table`
--
ALTER TABLE `roles_table`
  ADD PRIMARY KEY (`ID_Roles`);

--
-- Indexes for table `shipping_agents`
--
ALTER TABLE `shipping_agents`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `ship_table`
--
ALTER TABLE `ship_table`
  ADD PRIMARY KEY (`Ship_ID`);

--
-- Indexes for table `status_vessel`
--
ALTER TABLE `status_vessel`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`ID_Time`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`ID_Users`,`ID_Roles`),
  ADD KEY `fk_Users_Table_Roles_Table1_idx` (`ID_Roles`);

--
-- Indexes for table `voyage_table`
--
ALTER TABLE `voyage_table`
  ADD PRIMARY KEY (`ID_Voyage`,`Ship_ID`,`ID_Position`,`Shipping_Agents_Agent_ID`,`ID_Status`,`ID_Time`,`Workers_ID`,`ID_Machine`,`ID_Delays`,`Report_ID`),
  ADD KEY `fk_Voyage_Table_Ship_Table_idx` (`Ship_ID`),
  ADD KEY `fk_Voyage_Table_Entity_Box_Position1_idx` (`ID_Position`),
  ADD KEY `fk_Voyage_Table_Shipping_Agents1_idx` (`Shipping_Agents_Agent_ID`),
  ADD KEY `fk_Voyage_Table_Status_Vessel1_idx` (`ID_Status`),
  ADD KEY `fk_Voyage_Table_Time_Table1_idx` (`ID_Time`),
  ADD KEY `fk_Voyage_Table_Voyage_Workers1_idx` (`Workers_ID`),
  ADD KEY `fk_Voyage_Table_Machine_Table1_idx` (`ID_Machine`),
  ADD KEY `fk_Voyage_Table_Delays_Table1_idx` (`ID_Delays`),
  ADD KEY `fk_Voyage_Table_Report_Table1_idx` (`Report_ID`);

--
-- Indexes for table `voyage_workers`
--
ALTER TABLE `voyage_workers`
  ADD PRIMARY KEY (`Workers_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_Notification_Changes1` FOREIGN KEY (`ID_Changes`) REFERENCES `changes` (`ID_Changes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
  ADD CONSTRAINT `fk_Users_Table_Roles_Table1` FOREIGN KEY (`ID_Roles`) REFERENCES `roles_table` (`ID_Roles`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voyage_table`
--
ALTER TABLE `voyage_table`
  ADD CONSTRAINT `fk_Voyage_Table_Delays_Table1` FOREIGN KEY (`ID_Delays`) REFERENCES `delays_table` (`ID_Delays`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Entity_Box_Position1` FOREIGN KEY (`ID_Position`) REFERENCES `entity_box_position` (`ID_Position`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Machine_Table1` FOREIGN KEY (`ID_Machine`) REFERENCES `machine_table` (`ID_Machine`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Report_Table1` FOREIGN KEY (`Report_ID`) REFERENCES `report_table` (`Report_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Ship_Table` FOREIGN KEY (`Ship_ID`) REFERENCES `ship_table` (`Ship_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Shipping_Agents1` FOREIGN KEY (`Shipping_Agents_Agent_ID`) REFERENCES `shipping_agents` (`Agent_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Status_Vessel1` FOREIGN KEY (`ID_Status`) REFERENCES `status_vessel` (`ID_Status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Time_Table1` FOREIGN KEY (`ID_Time`) REFERENCES `time_table` (`ID_Time`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Voyage_Table_Voyage_Workers1` FOREIGN KEY (`Workers_ID`) REFERENCES `voyage_workers` (`Workers_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
