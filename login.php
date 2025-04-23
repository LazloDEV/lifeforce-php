<?php
session_start();

// Simulated user (replace with database in production)
$valid_user = 'admin';
$valid_pass = 'secret123';

// Get form data safely
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Basic validation (replace with hashed password checks in production)
if ($username === $valid_user && $password === $valid_pass) {
    // Regenerate session ID to prevent session fixation
    session_regenerate_id(true);
    $_SESSION['username'] = $username;
    header('Location: home.php');
    exit;
} else {
    // Set up your GET parameter
    $param = "login_failure";

    // Construct the URL with the GET parameter
    $redirect_url = "index.php?param=" . urlencode($param);
    
    // Perform the redirect with the header function
    header("Location: " . $redirect_url);
    exit(); // Always include exit after a redirect to prevent further code execution
}
