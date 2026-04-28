<?php
$conn = new mysqli("localhost", "root", "", "mysql", 3307);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connection successful!";
}

$conn->close();
?>