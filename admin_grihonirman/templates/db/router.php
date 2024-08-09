<?php
if ($_SERVER['SERVER_NAME'] == 'grihonirmanrealty.in' || $_SERVER['HTTP_HOST'] == 'grihonirmanrealty.in') {
    $folderName = '/admin_grihonirman';
} else {
    $folderName = '/grihonirman_website/admin_grihonirman';
}
$request = $_SERVER['REQUEST_URI'];
$router = substr_replace($request, '', 0, strlen($folderName));

$arr = explode('/', $router);


$pg_nm = "";
$fl_nm = "";
$urlMenuCode = "";

if (isset($arr[1])) {
    $pg_nm = $arr[1];
    $fl_nm = $arr[1];
}
if (isset($arr[2])) {
    $urlMenuCode = $arr[2];
}

$baseHref = "";
for ($i = 2; $i < count($arr); $i++) {
    $baseHref .= "../";
}

$baseUrl = "";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $baseUrl = "https://";
} else {
    $baseUrl = "http://";
}
$baseUrl .= $_SERVER['HTTP_HOST'] . $folderName;
