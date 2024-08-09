-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 07:29 AM
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
-- Database: `db_griho_nirman`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_token_auth`
--

CREATE TABLE `login_token_auth` (
  `id` int(244) NOT NULL,
  `user_code` varchar(50) DEFAULT '',
  `user_type` varchar(50) DEFAULT '',
  `password` varchar(150) DEFAULT '',
  `selector` varchar(150) DEFAULT '',
  `expiry` varchar(10) DEFAULT '',
  `expiry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE `menu_master` (
  `id` int(244) NOT NULL,
  `menu_code` varchar(50) DEFAULT '',
  `menu_name` varchar(150) DEFAULT '',
  `menu_icon` varchar(50) DEFAULT '',
  `icon_color` varchar(20) DEFAULT '',
  `sub_menu_status` varchar(10) DEFAULT '',
  `file_name` varchar(100) DEFAULT '',
  `folder_name` varchar(100) DEFAULT '',
  `order_num` decimal(10,0) DEFAULT NULL,
  `active` varchar(10) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`id`, `menu_code`, `menu_name`, `menu_icon`, `icon_color`, `sub_menu_status`, `file_name`, `folder_name`, `order_num`, `active`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
(1, 'MC_6497e30d4eaca1687675661', 'Dashboard', 'fas fa-tachometer-alt text-primary', '', 'No', 'dashboard', 'dashboard', 0, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(2, 'MM_5fec5b7265be41609325426', 'System Config', 'la la-cog text-success', '', 'Yes', '', '', 1, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(3, 'MC_62e041fd9a5401658864125', 'Profile Info', 'fas fa-user text-danger', '', 'Yes', '', '', 2, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(4, 'MC_66b0743f50e191722840127', 'Quick Contact Details', 'fas fa-mail-bulk text-primary', '', 'No', 'quick_contact', 'quick_contact', 3, 'Yes', 'PA_0001', '2024-08-05 12:12:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_master`
--

CREATE TABLE `sub_menu_master` (
  `id` int(244) NOT NULL,
  `sub_menu_code` varchar(50) DEFAULT '',
  `sub_menu_name` varchar(150) DEFAULT '',
  `menu_icon` varchar(150) DEFAULT '',
  `icon_color` varchar(20) DEFAULT '',
  `menu_code` varchar(50) DEFAULT '',
  `file_name` varchar(100) DEFAULT '',
  `folder_name` varchar(100) DEFAULT '',
  `order_num` decimal(10,0) DEFAULT NULL,
  `active` varchar(10) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_menu_master`
--

INSERT INTO `sub_menu_master` (`id`, `sub_menu_code`, `sub_menu_name`, `menu_icon`, `icon_color`, `menu_code`, `file_name`, `folder_name`, `order_num`, `active`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
(1, 'SMC_626eee3d921351651437117', 'Create Menu', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'menu_master', 'menu_master', 1, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(2, 'SMC_626eee5724f631651437143', 'Create Sub Menu', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'sub_menu_master', 'sub_menu_master', 2, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(3, 'SMC_627282dd0c22a1651671773', 'Create User Mode', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'create_user_mode', 'create_user_mode', 4, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(4, 'SMC_6272831fc83db1651671839', 'Create User', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'create_user', 'create_user', 6, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(5, 'SMC_62735a3e12dfc1651726910', 'User Mode Permission', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'user_mode_permission', 'user_mode_permission', 5, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(6, 'SMC_62df7c8e76fd51658813582', 'System Info', 'fa fa-circle-notch', '', 'MM_5fec5b7265be41609325426', 'system_info', 'system_info', 3, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(7, 'SMC_62e0421c5d0c11658864156', 'Manage Profile', 'fa fa-circle-notch', '', 'MC_62e041fd9a5401658864125', 'manage_profile', 'manage_profile', 1, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(8, 'SMC_62e042410ee2b1658864193', 'Activity Details', 'fa fa-circle-notch', '', 'MC_62e041fd9a5401658864125', 'activity', 'activity', 3, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL),
(9, 'SMC_6316229e460bf1662395038', 'Change Password', 'fa fa-circle-notch', '', 'MC_62e041fd9a5401658864125', 'change_password', 'change_password', 2, 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(10) NOT NULL,
  `system_name` varchar(100) DEFAULT '',
  `logo` varchar(100) DEFAULT '',
  `favicon` varchar(100) DEFAULT '',
  `email` varchar(150) DEFAULT '',
  `address` varchar(200) DEFAULT '',
  `ph_num` varchar(50) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `system_name`, `logo`, `favicon`, `email`, `address`, `ph_num`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
(1, 'Griho Nirman Reality PVT. LTD.', 'logo_8-7-2024-1723116777386.webp', 'favicon_2-7-2024-1722577899827.webp', 'admin@grihonirmanrealty.in', 'Plot no.10/871(hidco), Street no. 871, action area -3b near 20 no. Water tank Newtown Kolkata West Bengal, North 24 Parganas - 700160', '+91 9147390718', 'PA_0001', '0000-00-00 00:00:00', '2024-08-08 17:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quick_contact`
--

CREATE TABLE `tbl_quick_contact` (
  `quick_contact_code` varchar(50) NOT NULL,
  `sl_no` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `isd_code` varchar(10) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_quick_contact`
--

INSERT INTO `tbl_quick_contact` (`quick_contact_code`, `sl_no`, `name`, `isd_code`, `phone`, `email`, `category`, `message`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
('QCC_66b33bee058231723022318', 19, 'sdfsdf', '+54', '09042527180', 'admin@admin', 'Flat', 'sdfsdf', 'user', '2024-08-07 14:48:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id` bigint(255) NOT NULL,
  `activity_code` varchar(50) DEFAULT '',
  `user_code` varchar(50) DEFAULT '',
  `activity_details` longtext DEFAULT NULL,
  `activity_timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id`, `activity_code`, `user_code`, `activity_details`, `activity_timestamp`) VALUES
(1, 'ACT_66ac730059f971722577664', 'PA_0001', 'LogIn', '2024-08-02 11:17:44'),
(2, 'ACT_66ac73ebecdc61722577899', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-02 11:21:39'),
(3, 'ACT_66acc7d538e751722599381', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-02 17:19:41'),
(4, 'ACT_66acc80e1ea981722599438', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-02 17:20:38'),
(5, 'ACT_66b0737ad27fb1722839930', 'PA_0001', 'LogIn', '2024-08-05 12:08:50'),
(6, 'ACT_66b0743f578ca1722840127', 'PA_0001', 'You Insert A Record In Manage Menu Details', '2024-08-05 12:12:07'),
(7, 'ACT_66b09f83517361722851203', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:16:43'),
(8, 'ACT_66b09f835bd8c1722851203', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:16:43'),
(9, 'ACT_66b09fe16bbc51722851297', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:17'),
(10, 'ACT_66b09fe573fa91722851301', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:21'),
(11, 'ACT_66b09fe8dfc051722851304', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:24'),
(12, 'ACT_66b09ff0598a01722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(13, 'ACT_66b09ff06facb1722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(14, 'ACT_66b09ff0750241722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(15, 'ACT_66b09ff0852af1722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(16, 'ACT_66b09ff08d59a1722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(17, 'ACT_66b09ff09ef201722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(18, 'ACT_66b09ff0aa12c1722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(19, 'ACT_66b09ff0b1c101722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(20, 'ACT_66b09ff0ba1b11722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(21, 'ACT_66b09ff0c21a21722851312', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:18:32'),
(22, 'ACT_66b0a021058631722851361', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:21'),
(23, 'ACT_66b0a0211b4371722851361', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:21'),
(24, 'ACT_66b0a026b06431722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(25, 'ACT_66b0a026bb4081722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(26, 'ACT_66b0a026c8d211722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(27, 'ACT_66b0a026d3acf1722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(28, 'ACT_66b0a026de87a1722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(29, 'ACT_66b0a026ec29a1722851366', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:26'),
(30, 'ACT_66b0a027059f51722851367', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:27'),
(31, 'ACT_66b0a02715d4a1722851367', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:19:27'),
(32, 'ACT_66b0a0f9adab71722851577', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:22:57'),
(33, 'ACT_66b0a0f9c35d71722851577', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:22:57'),
(34, 'ACT_66b0a6f179cee1722853105', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-05 15:48:25'),
(35, 'ACT_66b0a987742631722853767', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:59:27'),
(36, 'ACT_66b0a98781c471722853767', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-05 15:59:27'),
(37, 'ACT_66b0aa0620b7e1722853894', 'PA_0001', 'LogOut', '2024-08-05 16:01:34'),
(38, 'ACT_66b0af69056231722855273', 'PA_0001', 'LogIn', '2024-08-05 16:24:33'),
(39, 'ACT_66b0c099dea331722859673', 'PA_0001', 'LogIn', '2024-08-05 17:37:53'),
(40, 'ACT_66b33af4e29331723022068', 'PA_0001', 'LogIn', '2024-08-07 14:44:28'),
(41, 'ACT_66b33b1629dd51723022102', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-07 14:45:02'),
(42, 'ACT_66b33b16476491723022102', 'PA_0001', 'You Delete A Record In tbl_quick_contact and do delete PA_0001', '2024-08-07 14:45:02'),
(43, 'ACT_66b4acde7278c1723116766', 'PA_0001', 'LogIn', '2024-08-08 17:02:46'),
(44, 'ACT_66b4ace9773831723116777', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-08 17:02:57'),
(45, 'ACT_66b4acf918beb1723116793', 'PA_0001', 'You Update A Record In Manage System Info', '2024-08-08 17:03:13'),
(46, 'ACT_66b5a8f53b8f41723181301', 'PA_0001', 'LogIn', '2024-08-09 10:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(244) NOT NULL,
  `user_code` varchar(50) DEFAULT '',
  `user_id` varchar(50) DEFAULT '',
  `user_password` varchar(200) DEFAULT '',
  `name` varchar(150) DEFAULT '',
  `email` varchar(150) NOT NULL,
  `profile_img` varchar(100) DEFAULT '',
  `user_mode_code` varchar(50) DEFAULT '',
  `active` varchar(10) DEFAULT '',
  `entry_permission` varchar(10) DEFAULT '',
  `view_permission` varchar(10) DEFAULT '',
  `edit_permission` varchar(10) DEFAULT '',
  `delete_permissioin` varchar(10) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `user_code`, `user_id`, `user_password`, `name`, `email`, `profile_img`, `user_mode_code`, `active`, `entry_permission`, `view_permission`, `edit_permission`, `delete_permissioin`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
(1, 'PA_0001', 'admin', 'YWRtaW4=', 'Project Admin', 'kolkata121@gmail.com', '', 'Project Admin', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_mode`
--

CREATE TABLE `user_mode` (
  `id` int(244) NOT NULL,
  `user_mode_code` varchar(50) DEFAULT '',
  `user_mode` varchar(50) DEFAULT '',
  `active` varchar(10) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_mode`
--

INSERT INTO `user_mode` (`id`, `user_mode_code`, `user_mode`, `active`, `entry_user_code`, `entry_timestamp`, `update_timestamp`) VALUES
(1, 'UMC_64a1c6dfb94111688323807', 'ADMIN', 'Yes', 'PA_0001', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `id` int(244) NOT NULL,
  `user_mode_code` varchar(50) DEFAULT '',
  `all_menu_code` varchar(50) DEFAULT '',
  `menu_type` varchar(20) DEFAULT '',
  `entry_user_code` varchar(50) DEFAULT '',
  `entry_timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_token_auth`
--
ALTER TABLE `login_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu_master`
--
ALTER TABLE `sub_menu_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quick_contact`
--
ALTER TABLE `tbl_quick_contact`
  ADD PRIMARY KEY (`quick_contact_code`),
  ADD UNIQUE KEY `sl_no` (`sl_no`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mode`
--
ALTER TABLE `user_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_token_auth`
--
ALTER TABLE `login_token_auth`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menu_master`
--
ALTER TABLE `sub_menu_master`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_quick_contact`
--
ALTER TABLE `tbl_quick_contact`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_mode`
--
ALTER TABLE `user_mode`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `id` int(244) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
