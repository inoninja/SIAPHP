<?php
//signup.php
session_start();
require_once __DIR__ . "/../../../database/db.php";

// Initialize name and email variables for sticky form
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Input validation and sanitization
  $name = trim($_POST["full_name"]); // Stays 'full_name' for compatibility
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  // Validation checks
  if (
    empty($name) ||
    empty($email) ||
    empty($password) ||
    empty($confirm_password)
  ) {
    $error = "All fields are required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format";
  } 
    // NEW USERNAME FILTER START
    elseif (!preg_match('/^[a-zA-Z0-9_-]{3,20}$/', $name)) {
        $error = "Username must be 3-20 characters long and can only contain letters, numbers, underscores, and hyphens.";
    }
    // NEW USERNAME FILTER END
    elseif (strlen($password) < 8) {
    $error = "Password must be at least 8 characters";
  } elseif (
    !preg_match("/[A-Z]/", $password) ||
    !preg_match("/[0-9]/", $password)
  ) {
    $error =
      "Password must contain at least one uppercase letter and one number";
  } elseif ($password !== $confirm_password) {
    $error = "Passwords do not match";
  } else {
    try {
      // Check if email already exists (email is unique, names don't have to be)
      $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
      $stmt->execute([$email]);

      if ($stmt->fetch()) {
        $error = "Email already exists";
      } else {
        // Hash password with bcrypt
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert user with prepared statement
        $stmt = $pdo->prepare(
          "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
        );
        $stmt->execute([$name, $email, $hashed_password]);

        // Redirect to login with success message
        header("Location: ../login/login.php?signup=success");
        exit();
      }
    } catch (PDOException $e) {
      // Check for SQLSTATE[23505] - Unique violation error (PostgreSQL)
      if ($e->getCode() == '23505') {
        // Check which key caused the violation
        $error_message = $e->getMessage();
        if (strpos($error_message, 'users_name_key') !== false) {
          $error = "The username **" . htmlspecialchars($name) . "** is already taken. Please choose another.";
        } elseif (strpos($error_message, 'users_email_key') !== false) {
          $error = "The email address **" . htmlspecialchars($email) . "** is already registered.";
        } else {
          // Fallback if a different unique key was violated
          $error = "A conflict occurred during registration. It seems your username or email may already be in use.";
        }
      } else {
        // Generic error for other database issues
        $error = "Registration failed: A database error occurred.";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAISON MUGLER - Sign Up</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="signup.css">
  <style>
    /* Additional styles specifically for centering the Google button */
    .google-signin-wrapper {
      display: flex;
      justify-content: center;
      margin: 15px 0;
    }
    
    .google-signin-wrapper > div {
      display: flex;
      justify-content: center;
    }
  </style>
</head>
<body>
  
  <a href="../homepage/homepage.php" class="back-link">← Back to Store</a>
  
  <div class="signup-container">
    
    <div class="logo-small">MAISON MUGLER</div>
    
    <div class="signup-header">
      <h2>Create Account</h2>
      <p>Enter your details to get started</p>
    </div>
    
    <?php // Display validation/database errors
    if (isset($error)) {
      echo "<p class='error-message'>$error</p>";
    } ?>
    
    <form method="POST" action="">
            <input type="text" class="form-field" name="full_name" placeholder="Username" value="<?php echo htmlspecialchars(
        $name
      ); ?>" required>

      <input type="email" class="form-field" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars(
        $email
      ); ?>" required>

      <input type="password" class="form-field" name="password" placeholder="Password" required>

      <input type="password" class="form-field" name="confirm_password" placeholder="Confirm Password" required>

      <button type="submit" class="btn-submit">Create Account</button>
    </form>

    <div class="divider">or</div>

        <div class="google-signin-wrapper">
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
    </div>

    <a href="../login/login.php" class="btn-alt-signin">Already have an account? Sign in</a>

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
    form.action = '../../script/google_login.php'; // Backend endpoint for Google login
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