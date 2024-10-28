<?php
$servername = "localhost";
$username = "root"; // Update if needed
$password = ""; // Update if needed
$dbname = "hospital_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
