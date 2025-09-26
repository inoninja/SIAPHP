<?php
//profile.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: ../login/login.php");
    exit();
}

// Get user info
try {
    $stmt = $pdo->prepare("SELECT name, email FROM users WHERE id = ?");
    $stmt->execute([$_SESSION["user_id"]]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching user data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>This is your profile page.</p>
    <a href="../../script/logout.php">Logout</a>
</body>
</html>