<?php
$servername = "localhost";
$username = "system";
$password = "Password";
$tablename = "user1"
// Create connection
$conn = new mysqli($servername, $username, $password, $tablename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
