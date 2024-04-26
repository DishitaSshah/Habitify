<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "user-auth";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection fail" . $conn->connect_error);
} else
?>