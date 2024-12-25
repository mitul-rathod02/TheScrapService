<?php
session_start(); // Start the session

// Destroy the session
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session itself

// Redirect to the login page
header("Location: admin_login.php");
exit(); // Prevent further code execution
?>