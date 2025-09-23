<?php
//signup.php
session_start();
require_once __DIR__ . '/../../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input validation and sanitization
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validation checks
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters";
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
        $error = "Password must contain at least one uppercase letter and one number";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match";
    } else {
        try {
            // Check if user exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE name = ? OR email = ?");
            $stmt->execute([$username, $email]);
            
            if ($stmt->fetch()) {
                $error = "Username or email already exists";
            } else {
                // Hash password with bcrypt
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                
                // Insert user with prepared statement
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, $hashed_password]);
                
                // Redirect to login
                header("Location: login.php?signup=success");
                exit();
            }
        } catch (PDOException $e) {
            $error = "Registration failed: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Create Account</h1>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Confirm Password: <input type="password" name="confirm_password" required><br>
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>