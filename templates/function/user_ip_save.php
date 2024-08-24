<?php
include("../db/db.php");
include("../db/router.php");
$sql = "CREATE TABLE `tbl_ip_details` (
	`ip_details_code` VARCHAR(50) PRIMARY KEY NOT NULL,
	`sl_no` INT NOT NULL AUTO_INCREMENT UNIQUE KEY,
	`ip_address` VARCHAR(200),
	`page_name` VARCHAR(100),
	`entry_user_code` VARCHAR(50) DEFAULT '',
	`entry_timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`update_timestamp` DATETIME DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$result = mysqli_query($con, "SHOW TABLES LIKE 'tbl_ip_details'");
if (!$result || mysqli_num_rows($result) == 0) {
	mysqli_multi_query($con, $sql);
}

function getUserIP()
{
	// Check if user is accessing through shared internet
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	// Check if user is accessing through a proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Get the remote IP address
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
$user_ip = getUserIP();
$execute = 1;
if ($execute == 1) {
	$dataget = mysqli_query($con, "SELECT * FROM tbl_ip_details WHERE ip_address='" . $user_ip . "' AND entry_timestamp = '" . $timestamp . "'");
	$data = mysqli_fetch_row($dataget);
	if ($data) {
		$status = "Same_Data_Exist";
		$status_text = "Same Data At A Time!";
		$execute = 0;
	}
}
// if ($arr[1] != "home") {
// 	$status = "Page is not Home";
// 	$status_text = "Same Data At A Time!";
// 	$execute = 0;
// }

if ($execute == 1) {
	$ip_details_code = "IPDC_" . uniqid() . time();
	//========================= INSERT IN TABLE =======================
	mysqli_query($con, "INSERT INTO tbl_ip_details (
			`ip_details_code`,
			`ip_address`, 
			`page_name`, 
			`entry_timestamp`,
			`entry_user_code`
			) VALUES(
			'" . $ip_details_code . "',
			'" . $user_ip . "',
			'" . $arr[1]. "',
			'" . $timestamp . "',
			'user')");
	$status = "save";
	$status_text = "Facebook Data Insert Successfull. Thank you!";
} else {
	$status = "error";
	$status_text = "Something went wrong! Please try after some times.";
}

$response = [
	'status' => $status,
	'status_text' => $status_text,
];
