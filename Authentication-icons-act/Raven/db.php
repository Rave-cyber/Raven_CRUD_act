<?php
$servername = "localhost";
$username = "root";
$password = "Raven"; // Your MySQL password
$dbname = "flower_shop"; // Database name
$port = 3307; // Your MySQL port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
