<?php
session_start();

// Handle user registration (simplified)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // In real-world applications, store these in a database
    $_SESSION['username'] = $username;
    header("Location: index.php");
}
?>
