<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);
if ($_SERVER['SERVER_NAME'] == 'grihonirmanrealty.in' || $_SERVER['HTTP_HOST'] == 'grihonirmanrealty.in') {
    $servername = "localhost";
    $username = "grihonir_db_grihonirman";
    $password = "db_grihonirman";
    $database = "grihonir_db_grihonirman";
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_griho_nirman";
}


// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
