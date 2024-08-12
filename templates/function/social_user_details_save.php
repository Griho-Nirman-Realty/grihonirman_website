<?php
include("../../templates/db/db.php");
include("../../templates/db/router.php");
$query_string = $arr[2];
$query_string = ltrim($query_string, '?');
parse_str($query_string, $output_array);
$fbclid = $output_array['fbclid'];
$fbclid_value = 'https://www.facebook.com/?id=' . $fbclid;
$social_type = 'facebook';

$execute = 1;

if ($execute == 1 && $social_type == 'facebook' && $fbclid != '') {
    $social_user_code = "SCC_" . uniqid() . time();
    //========================= INSERT IN TABLE =======================
    mysqli_query($con, "INSERT INTO social_user_details (
			`social_user_code`,
			`social_type`, 
			`social_link`, 
			`entry_date_time`,
			`entry_user_code`
			) VALUES(
			'" . $social_user_code . "',
			'" . $social_type . "',
			'" . $fbclid_value . "',
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
