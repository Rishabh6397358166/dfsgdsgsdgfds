<?php
$servername = "localhost";
$username = "root";
$password = ""; // Make sure to replace 'password' with the actual password
$database = "payload";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
