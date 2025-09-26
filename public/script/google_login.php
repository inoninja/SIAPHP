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

// Initialize Google Client
$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);

try {
    // Verify the ID token
    $payload = $client->verifyIdToken($id_token);

    if ($payload) {
        $google_id = $payload['sub'];
        $email = $payload['email'];
        $username = $payload['name']; // Use 'name' for full name, or 'given_name' for first name

        // Check if user exists in your database
        $stmt = $pdo->prepare("SELECT id FROM users WHERE google_id = ?");
        $stmt->execute([$google_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            // User exists, log them in
            $_SESSION["user_id"] = $user['id'];
        } else {
            // New user, register them
            // Generate a random password for the user. This password won't be used for Google Sign-In,
            // but it's good practice to have one if your system expects all users to have a password.
            $random_password = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
            
            $stmt = $pdo->prepare("INSERT INTO users (google_id, name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$google_id, $username, $email, $random_password]);
            $_SESSION["user_id"] = $pdo->lastInsertId();
        }
        
        // Redirect to homepage upon successful login/registration
        header("Location: ../pages/homepage/homepage.php");
        exit();
    } else {
        // Invalid ID token - log and redirect
        error_log("Google Sign-In Error: Invalid ID token received.");
        header("Location: ../pages/login/login.php?error=google_invalid_token");
        exit();
    }
} catch (Exception $e) {
    // Error verifying token - log and redirect
    error_log("Google Sign-In Exception: " . $e->getMessage());
    header("Location: ../pages/login/login.php?error=google_verification_failed");
    exit();
}
?>