<?php
session_start();

// Dummy users for demonstration
$users = [
    'user1' => 'password123',
    'user2' => 'password456'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists and password is correct
    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Invalid login credentials.";
    }
}
?>
