<?php
$servername = "localhost"; // Change if using a remote server
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "funeral_service"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
