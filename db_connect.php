<?php
$servername = "sql211.infinityfree.com"; // XAMPP runs MySQL on localhost
$username = "if0_38933563"; // Default MySQL username
$password = "3Wou64MuDLoAleD"; // Default MySQL password (leave blank in XAMPP)
$dbname = "if0_38933563_user_system"; // Database name

// Create connection
$conn = new mysqli('sql211.infinityfree.com', 'if0_38933563', '3Wou64MuDLoAleD ', 'if0_38933563_user_system');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



