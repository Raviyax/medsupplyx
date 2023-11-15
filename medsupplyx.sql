-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 08:16 PM
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
-- Database: `medsupplyx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `approvedorders`
--

CREATE TABLE `approvedorders` (
  `id` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `batchno` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `deliveryDate` date NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashierregistration`
--

CREATE TABLE `cashierregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pharmacyId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashierregistration`
--

INSERT INTO `cashierregistration` (`id`, `name`, `phone`, `email`, `password`, `pharmacyId`) VALUES
(19, 'cashier', '0714664726', 'cashier@gmail.com', '123456', '12345'),
(20, 'kasun', '0714664726', 'kasun@gmail.com', '123456', '1231v');

-- --------------------------------------------------------

--
-- Table structure for table `managerregistration`
--

CREATE TABLE `managerregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managerregistration`
--

INSERT INTO `managerregistration` (`id`, `name`, `address`, `phone`, `email`, `password`) VALUES
(31, 'manager', 'university of colombo', '+94715714175', 'manager@gmail.com', '123456'),
(33, 'manager5', 'asudua', '6868998', 'mannager5@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacyregistration`
--

CREATE TABLE `pharmacyregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `licenceno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `licence` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'rejected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacyregistration`
--

INSERT INTO `pharmacyregistration` (`id`, `name`, `address`, `phone`, `licenceno`, `email`, `password`, `licence`, `status`) VALUES
(29, 'pharmacy', '222/1, matara', '0715714175', '3241241V', 'pharmacy@gmail.com', '123456', '', 'rejected'),
(33, 'suhada pharmacy', '222/1, matara', '0715714175', '3241241V', 'pharmacy1@gmail.com', '123456', '', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `regmedicines`
--

CREATE TABLE `regmedicines` (
  `MedicineID` int(4) NOT NULL,
  `Medicine Name` varchar(50) NOT NULL,
  `Batch No` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Volume` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regmedicines`
--

INSERT INTO `regmedicines` (`MedicineID`, `Medicine Name`, `Batch No`, `Category`, `Volume`, `Description`) VALUES
(21, 'Aspirin', 12345, 'Pain Relief', '100 mg', 'Relieves minor aches and pains.'),
(22, 'Ibuprofen', 67890, 'Pain Relief', '200 mg', 'Reduces inflammation and fever.'),
(23, 'Paracetamol', 54321, 'Pain Relief', '500 mg', 'Effective for headaches and fevers.'),
(24, 'Lisinopril', 98765, 'Blood Pressure', '10 mg', 'Treats high blood pressure.'),
(25, 'Metformin', 13579, 'Diabetes', '500 mg', 'Manages blood sugar levels.'),
(26, 'Atorvastatin', 24680, 'Cholesterol', '20 mg', 'Lowers cholesterol levels.'),
(27, 'Amoxicillin', 11223, 'Antibiotic', '250 mg', 'Fights bacterial infections.'),
(28, 'Esomeprazole', 33445, 'Gastrointestinal', '40 mg', 'Relieves acid reflux and heartburn.'),
(29, 'Cetirizine', 55667, 'Allergy', '10 mg', 'Relief from allergy symptoms.'),
(30, 'Fluoxetine', 77889, 'Mental Health', '20 mg', 'Treats depression and anxiety.'),
(31, 'Omeprazole', 99000, 'Gastrointestinal', '20 mg', 'Reduces stomach acid.'),
(32, 'Diazepam', 11234, 'Mental Health', '5 mg', 'Calms anxiety and muscle spasms.'),
(33, 'Simvastatin', 23456, 'Cholesterol', '40 mg', 'Lowers bad cholesterol.'),
(34, 'Levothyroxine', 65432, 'Thyroid', '100 mcg', 'Treats underactive thyroid.'),
(35, 'Prednisone', 87654, 'Anti-Inflammatory', '10 mg', 'Reduces inflammation and allergies.'),
(36, 'Metoprolol', 11122, 'Blood Pressure', '50 mg', 'Lowers blood pressure.'),
(37, 'Warfarin', 33444, 'Blood Thinner', '5 mg', 'Prevents blood clots.'),
(38, 'Ranitidine', 55566, 'Gastrointestinal', '150 mg', 'Reduces stomach acid.'),
(39, 'Cephalexin', 77788, 'Antibiotic', '250 mg', 'Treats bacterial infections.'),
(40, 'Loratadine', 99900, 'Allergy', '10 mg', 'Relief from allergies.');

-- --------------------------------------------------------

--
-- Table structure for table `requestorder`
--

CREATE TABLE `requestorder` (
  `id` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `batchno` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `deliveryDate` date NOT NULL,
  `orderEndDate` date NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `price` decimal(11,0) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestorder`
--

INSERT INTO `requestorder` (`id`, `medicine`, `batchno`, `quantity`, `deliveryDate`, `orderEndDate`, `createdAt`, `price`, `status`) VALUES
(10, 'Panadol', '12934VH', 1500, '2023-11-23', '2023-11-09', '2023-11-03 07:58:56', 0, 'pending'),
(11, 'panadol', '123456', 300, '2023-11-15', '2023-11-08', '2023-11-03 08:26:43', 0, 'pending'),
(12, 'Panadol', '12344', 120, '2023-11-14', '2023-11-08', '2023-11-03 08:53:19', 0, 'pending'),
(13, 'Aspirine', '12345', 100, '2023-11-14', '2023-11-02', '2023-11-03 10:49:39', 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `supplierregistration`
--

CREATE TABLE `supplierregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `licenceno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierregistration`
--

INSERT INTO `supplierregistration` (`id`, `name`, `address`, `phone`, `licenceno`, `email`, `password`) VALUES
(12, 'ABC supplier', '222/1 matara', '0705918924', '123456AC', 'abc@gmail.com', '123456'),
(13, 'suppllier', 'iuh', '0705918924', '123456', 'wishwajithnisal@gmail.com', '123456'),
(14, 'supplier', '222/1, matara', '0715714175', '1213414S', 'supplier@gmail.com', '123456'),
(15, 'abc', 'iuh', '0705918924', '131424v', 'supplier1@gmail.com', '123456'),
(16, 'supplier1', 'asldhas', '25216', '321090', 'supplier2@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created`) VALUES
(13, 'admin', 'admin@gmail.com', 'admin', 'admin', '2023-11-03 01:30:19'),
(31, 'manager', 'manager@gmail.com', '123456', 'manager', '2023-11-03 08:37:57'),
(32, 'pharmacy', 'pharmacy@gmail.com', '123456', 'pharmacy', '2023-11-03 08:38:44'),
(33, 'supplier', 'supplier@gmail.com', '123456', 'supplier', '2023-11-03 08:38:48'),
(36, 'cashier', 'cashier@gmail.com', '123456', 'cashier', '2023-11-03 09:01:21'),
(38, 'suhada pharmacy', 'pharmacy1@gmail.com', '123456', 'pharmacy', '2023-11-03 10:45:51'),
(39, 'suhada pharmacy', 'pharmacy1@gmail.com', '123456', 'pharmacy', '2023-11-03 10:46:19'),
(40, 'supplier1', 'supplier2@gmail.com', '123456', 'supplier', '2023-11-03 10:53:25'),
(41, 'manager5', 'mannager5@gmail.com', '123456', 'manager', '2023-11-03 10:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashierregistration`
--
ALTER TABLE `cashierregistration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pharmacyCashier` (`pharmacyId`);

--
-- Indexes for table `managerregistration`
--
ALTER TABLE `managerregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacyregistration`
--
ALTER TABLE `pharmacyregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regmedicines`
--
ALTER TABLE `regmedicines`
  ADD PRIMARY KEY (`MedicineID`);

--
-- Indexes for table `requestorder`
--
ALTER TABLE `requestorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierregistration`
--
ALTER TABLE `supplierregistration`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashierregistration`
--
ALTER TABLE `cashierregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `managerregistration`
--
ALTER TABLE `managerregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pharmacyregistration`
--
ALTER TABLE `pharmacyregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `regmedicines`
--
ALTER TABLE `regmedicines`
  MODIFY `MedicineID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `requestorder`
--
ALTER TABLE `requestorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supplierregistration`
--
ALTER TABLE `supplierregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
