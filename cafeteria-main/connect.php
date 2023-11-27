<?php

$host = "localhost";
$port = "3306";
$db_user = "root";
$db_pass = "";
$db = "zawad&co";

$conn = new mysqli($host, $db_user, $db_pass, $db, $port);

if ($conn->connect_error) {
    die("connection Failed: " . $conn->connect_error);
}
