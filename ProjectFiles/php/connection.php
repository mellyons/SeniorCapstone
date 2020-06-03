<?php

$servername = "localhost";
$username = "user1";
$password = "pass1";
$dbname = "mgadirectory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>