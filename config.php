<?php
$host = "localhost"; // Change if needed
$dbname = "your_database_name"; // Change to your DB name
$user = "root"; // Change if needed
$pass = ""; // Change if needed

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
