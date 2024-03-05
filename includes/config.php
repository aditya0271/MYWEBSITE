<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$database = "mywebsite";
//database
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

?>