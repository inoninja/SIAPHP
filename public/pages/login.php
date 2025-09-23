<?php
//login.php
session_start();
require_once __DIR__ . '/../../database/db.php';

// Redirect if already logged in
if (isset($_SESSION["user_id"])) {
    header("Location: homepage.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Username and password are required";
    } else {
        try {
            // Get user from database
            $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE name = ? OR email = ?");
            $stmt->execute([$username, $username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                // Regenerate session ID to prevent session fixation
                session_regenerate_id(true);
                
                // Set session variables
                $_SESSION["user_id"] = $user['id'];
                $_SESSION["name"] = $user['name'];
                
                // Redirect to homepage
                header("Location: homepage.php");
                exit();
            } else {
                $error = "Invalid username or password";
            }
        } catch (PDOException $e) {
            $error = "Login failed: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <?php if (isset($_GET['signup'])) echo "<p style='color:green'>Registration successful! Please login.</p>"; ?>
    <form method="POST" action="">
        Email: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

    <h2>Or sign in with Google</h2>
    <div id="g_id_onload"
         data-client_id="687679280141-1c76j8an22qmklhvenser89qa09mr6fc.apps.googleusercontent.com"
         data-callback="handleCredentialResponse"
         data-auto_prompt="false">
    </div>
    <div class="g_id_signin"
         data-type="icon"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="rectangular"
         data-logo_alignment="left">
    </div>

    <script>
    function handleCredentialResponse(response) {
        // Send the ID token to your backend for verification
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../script/google_login.php'; // New backend endpoint
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
                // Optionally, you can also revoke the token if you want a full sign-out
                // google.accounts.id.revoke(localStorage.getItem('google_id_token'), () => {
                //     console.log('Google token revoked.');
                // });
                // localStorage.removeItem('google_id_token'); // Clear stored token if any
            }
        }
    };
    </script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</body>
</html>