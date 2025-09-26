<?php
//login.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Redirect if already logged in
if (isset($_SESSION["user_id"])) {
    header("Location: ../homepage/homepage.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($name) || empty($password)) {
        $error = "Email and password are required";
    } else {
        try {
            // Get user from database
            $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE name = ? OR email = ?");
            $stmt->execute([$name, $name]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                // Regenerate session ID to prevent session fixation
                session_regenerate_id(true);
                
                // Set session variables
                $_SESSION["user_id"] = $user['id'];
                $_SESSION["name"] = $user['name'];
                
                // Redirect to homepage
                header("Location: ../homepage/homepage.php");
                exit();
            } else {
                $error = "Invalid email or password";
            }
        } catch (PDOException $e) {
            $error = "Login failed: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAISON MUGLER - Sign In</title>
    
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <a href="../homepage/homepage.php" class="back-link">← Back to Store</a>

    <div class="login-container">
        
        <div class="logo-small">MAISON MUGLER</div>
        
        <div class="sign-in-header">
            <h2>Sign in</h2>
        </div>

        <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
        <?php if (isset($_GET['signup'])) echo "<p class='success-message'>Registration successful! Please login.</p>"; ?>
        
        <a href="../signup/signup.php" class="btn-create-account">Create new account</a> 

        <div class="divider">or</div>

        <form method="POST" action="">
            <input type="text" class="email-input" name="username" placeholder="Username or Email" required>
            <input type="password" class="password-input" name="password" placeholder="Password" required>
            <button type="submit" class="btn-continue">Continue</button>
        </form>
        
        <div class="divider">or</div>

        <div id="g_id_onload"
            data-client_id="687679280141-1c76j8an22qmklhvenser89qa09mr6fc.apps.googleusercontent.com"
            data-callback="handleCredentialResponse"
            data-auto_prompt="false">
        </div>
        <div class="g_id_signin"
            data-type="icon" 
            data-size="large"
            data-theme="outline"
            data-text="signin_with" 
            data-shape="rectangular"
            data-logo_alignment="center"> 
        </div>

        <div class="footer-links">
            <a href="/privacy-policy">Privacy policy</a>
            <span style="color: #ccc;">•</span>
            <a href="/terms-of-service">Terms of service</a>
        </div>
    </div>

    <script>
    function handleCredentialResponse(response) {
        // Send the ID token to your backend for verification
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../../script/google_login.php'; // Updated path
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'credential';
        input.value = response.credential;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
    }

    // Handle Google logout
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('google_logout')) {
            if (typeof google !== 'undefined' && google.accounts && google.accounts.id) {
                google.accounts.id.disableAutoSelect();
            }
        }
    };
    </script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</body>
</html>