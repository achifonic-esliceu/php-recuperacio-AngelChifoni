<?php

$serverName = "db";
$username   = "recupera";
$password   = "recupera123";
$dbName     = "recuperacio_php";

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Error de connexió: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
