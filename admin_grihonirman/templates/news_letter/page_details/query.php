<?php
$sql = "CREATE TABLE `tbl_news_letter` (
  `newsletter_code` VARCHAR(50) PRIMARY KEY NOT NULL,
  `newsletter_email` VARCHAR(150),
  `entry_user_code` VARCHAR(50) DEFAULT '',
  `entry_timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$result = mysqli_query($con, "SHOW TABLES LIKE 'tbl_news_letter'");
if (!$result || mysqli_num_rows($result) == 0) {
  mysqli_multi_query($con, $sql);
}
?>
