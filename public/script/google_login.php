<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../database/db.php';

// Redirect to login if not a POST request or credential is missing
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['credential'])) {
    header("Location: ../pages/login/login.php");
    exit();
}

 $id_token = $_POST['credential'];
 $source = isset($_POST['source']) ? $_POST['source'] : 'login';

// Initialize Google Client
 $client = new Google_Client();
 $client->setClientId(GOOGLE_CLIENT_ID);

try {
    // Verify the ID token
    $payload = $client->verifyIdToken($id_token);

    if ($payload) {
        $google_id = $payload['sub'];
        $email = $payload['email'];
        $username = $payload['name']; // Use 'name' for full name

        // Check if user exists in your database
        $stmt = $pdo->prepare("SELECT id FROM users WHERE google_id = ? OR email = ?");
        $stmt->execute([$google_id, $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            // User exists, log them in
            $_SESSION["user_id"] = $user['id'];
            $_SESSION["name"] = $username; // Update the session name with Google's name
            
            // Update the user record with Google ID if it's not already set
            $stmt = $pdo->prepare("UPDATE users SET google_id = ? WHERE id = ?");
            try {
                $stmt->execute([$google_id, $user['id']]);
            } catch (PDOException $e) {
                // Log the error but continue with login
                error_log("Failed to update Google ID: " . $e->getMessage());
            }
            
            // Redirect to homepage upon successful login
            header("Location: ../pages/homepage/homepage.php");
            exit();
        } else {
            // New user, register them
            // Generate a random password for the user. This password won't be used for Google Sign-In,
            // but it's good practice to have one if your system expects all users to have a password.
            $random_password = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
            
            try {
                $stmt = $pdo->prepare("INSERT INTO users (google_id, name, email, password) VALUES (?, ?, ?, ?)");
                $stmt->execute([$google_id, $username, $email, $random_password]);
                $user_id = $pdo->lastInsertId();
                
                // Set session variables for the new user
                $_SESSION["user_id"] = $user_id;
                $_SESSION["name"] = $username;
                
                // Redirect to homepage upon successful registration
                header("Location: ../pages/homepage/homepage.php");
                exit();
            } catch (PDOException $e) {
                // Log the error and redirect to signup with error
                error_log("Failed to create new user: " . $e->getMessage());
                header("Location: ../pages/signup/signup.php?error=google_signup_failed");
                exit();
            }
        }
    } else {
        // Invalid ID token - log and redirect
        error_log("Google Sign-In Error: Invalid ID token received.");
        $redirectPage = ($source === 'signup') ? '../pages/signup/signup.php' : '../pages/login/login.php';
        header("Location: $redirectPage?error=google_invalid_token");
        exit();
    }
} catch (Exception $e) {
    // Error verifying token - log and redirect
    error_log("Google Sign-In Exception: " . $e->getMessage());
    $redirectPage = ($source === 'signup') ? '../pages/signup/signup.php' : '../pages/login/login.php';
    header("Location: $redirectPage?error=google_verification_failed");
    exit();
}
?>