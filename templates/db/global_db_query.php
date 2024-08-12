<?php
include('connection.php');
$sql = "

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = '+05:30';

CREATE TABLE `social_user_details` (
  `social_user_code` VARCHAR(50) NOT NULL PRIMARY KEY,
  `id` int(244) UNIQUE KEY AUTO_INCREMENT,
  `social_type` VARCHAR(50),
  `social_link` TEXT NOT NULL,
  `entry_user_code` VARCHAR(50),
  `entry_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$result = mysqli_query($con, "SHOW TABLES LIKE 'social_user_details'");
if (!$result || mysqli_num_rows($result) == 0) {
  mysqli_multi_query($con, $sql);
}
