<?php
// config.php - Database configuration
$servername = "localhost";
$username = "root";
$password = "TCC12345";
$dbname = "inventory_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>