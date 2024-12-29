<?php
session_start();

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login-email']) && isset($_POST['login-password'])) {
        // Check credentials (dummy logic, you should fetch and verify from a database)
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];

        // Example: Hardcoded user credentials for testing
        if ($email === 'test@example.com' && $password === 'password123') {
            $_SESSION['user_name'] = 'John Doe'; // Set user session
            header('Location: index1.php'); // Redirect to home page
            exit();
        } else {
            $error_message = 'Invalid email or password.';
        }
    }

    // Handle registration
    if (isset($_POST['register-name']) && isset($_POST['register-email']) && isset($_POST['register-password'])) {
        // Add registration logic here (insert into database)
        $name = $_POST['register-name'];
        $email = $_POST['register-email'];
        $password = $_POST['register-password'];

        // For now, we simply display the registration success message
        $success_message = 'Registration successful!';
    }
}
?

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="authentification.css">
</head>
<body>
    <!-- Header Section -->
        <nav class="navbar">
            <ul class="links-container">
                <li class="link-item"><a href="index1.html" class="link">Home</a></li>
                <li class="link-item"><a href="products.html" class="link">Products</a></li>
                <li class="link-item"><a href="index1.html" class="link">About</a></li>
                <li class="link-item"><a href="authentification.html" class="link-active">Authentication</a></li>
            </ul>
        </nav>
        <header class="header-section">
            <h1 class="header-heading">Sparkle</h1>
                </header>
    </header>

    <!-- Main Content -->
    <main>
        <section id="auth-section">
            <h1>Authentication</h1>
            
            <div class="auth-container">
                <!-- Login Form -->
                <div class="login">
                    <h2>Login</h2>
                    <form id="login-form">
                        <label for="login-email">Email:</label>
                        <input type="email" id="login-email" name="email" required>

                        <label for="login-password">Password:</label>
                        <input type="password" id="login-password" name="password" required>

                        <button type="submit">Login</button>
                    </form>
                </div>

                <!-- Register Form -->
                <div class="register">
                    <h2>Register</h2>
                    <form id="register-form">
                        <label for="register-name">Full Name:</label>
                        <input type="text" id="register-name" name="name" required>

                        <label for="register-email">Email:</label>
                        <input type="email" id="register-email" name="email" required>

                        <label for="register-password">Password:</label>
                        <input type="password" id="register-password" name="password" required>

                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-txt">© 2024 Sparkle. All Rights Reserved.</p>
    </footer>
</body>
</html>
