<?php
include("../db/db.php");
include("../db/activity.php");
mysqli_query($con, "SET FOREIGN_KEY_CHECKS = 0");
$activity_details = "";

$sendData = json_decode($_POST['sendData'], true);
$newsletter_code = mysqli_real_escape_string($con, $sendData['newsletter_code']);


mysqli_query($con, "DELETE FROM tbl_news_letter WHERE newsletter_code='" . $newsletter_code . "' ");

$activity_details = "You Delete A Record In tbl_news_letter and do delete ".$session_user_code;
if ($activity_details != "") {
	insertActivity($activity_details, $con, $session_user_code);
}
