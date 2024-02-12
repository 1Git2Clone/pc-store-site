<?php

// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS your_database_name";
if ($conn->query($createDatabaseQuery) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db("your_database_name");

// Create table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS your_table_name (
    id INT(8) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) UNIQUE,
    password VARCHAR(128)
)";
if ($conn->query($createTableQuery) === TRUE) {
    echo "Table created successfully or already exists";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>
