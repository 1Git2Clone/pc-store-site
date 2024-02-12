<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "ligma"; /* Yeah, very funny. For anyone using this repo in prod, please hide this. */

$conn = new mysqli($dbservername, $dbusername, $dbpassword);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/* UNCOMMENT THE QUERIES IF YOUR DB/TABLE DOESN'T EXIST */


$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS pc_store";
/* if ($conn->query($createDatabaseQuery) === TRUE) { */
/*     echo "Database created successfully or already exists<br>"; */
/* } else { */
/*     echo "Error creating database: " . $conn->error; */
/* } */

// Select the database
$conn->select_db("pc_store");

// Create table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT(8) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) UNIQUE,
    password VARCHAR(128)
)";

/* if ($conn->query($createTableQuery) === TRUE) { */
/*     echo "Table created successfully or already exists<br>"; */
/* } else { */
/*     echo "Error creating table: " . $conn->error; */
/* } */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting password
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validating username
    if (strlen($username) < 3) {
        echo "Please enter at least a three character long username.";
        exit();
    }

    // Validating password
    if (strlen($password) < 8 || !preg_match("/[a-z]/", $password) || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
        echo "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.";
        exit();
    }
    if ($password !== $confirm_password) {
        echo "Passwords don't match.";
        exit();
    }

    // Check if username already exists...
    $checkUsernameQuery = "SELECT * FROM users WHERE name = ?";
    $stmt = $conn->prepare($checkUsernameQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
        exit();
    }

    // Generate password hash (we store data SAFELY!)
    $hashed_password = password_hash($password, PASSWORD_ARGON2I);

    $stmt = $conn->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute() === TRUE) {
        echo "New account created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

/* if ($conn->query($createTableQuery) === TRUE) { */
/*     echo "Table created successfully or already exists"; */
/* } else { */
/*     echo "Error creating table: " . $conn->error; */
/* } */

// Close connection
$conn->close();

?>
