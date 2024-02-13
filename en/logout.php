<?php
session_start(); // Start the session

// Check if a session is active
if(isset($_SESSION['username'])) {

    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();

    // Redirect to a login page or another page after logout
    header("Location: login.php");
    exit(); // Stop script execution
} else {
    // If no session is active, redirect to a login page or another page
    header("Location: login.php");
    exit(); // Stop script execution
}
?>
