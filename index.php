<?php
// Start the session
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header Section -->
<header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- Main Content Section -->
<main>
    <section class="intro">
        <h1>Welcome to Our Information System</h1>
        <p>Our system offers powerful features to help you manage your tasks effectively. Get started today!</p>
        
        <!-- Call to Action Buttons -->
        <div class="cta-buttons">
            <a href="#learn-more" class="btn">Learn More</a>
            <?php if ($isLoggedIn): ?>
                <a href="dashboard.php" class="btn">Go to Dashboard</a>
            <?php else: ?>
                <a href="#login-form" class="btn">Login</a>
                <a href="#register-form" class="btn">Register</a>
            <?php endif; ?>
        </div>
    </section>

    <!-- Login Form Section -->
    <?php if (!$isLoggedIn): ?>
    <section id="login-form" class="form-section">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </section>

    <!-- Registration Form Section -->
    <section id="register-form" class="form-section">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </section>
    <?php else: ?>
        <section class="welcome-back">
            <h2>Welcome back, <?php echo $_SESSION['username']; ?>!</h2>
        </section>
    <?php endif; ?>
</main>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Our Information System | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
</footer>

</body>
</html>
