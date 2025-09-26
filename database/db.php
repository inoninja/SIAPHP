<?php
// database/db.php
require_once __DIR__ . '/../config.php'; // Load config

$host = DB_HOST;
$port = DB_PORT;
$dbname = DB_NAME;
$user = DB_USER;
$password = DB_PASS;

try {
    // Log connection details (for debugging)
    error_log("DB_HOST: " . $host);
    error_log("DB_PORT: " . $port);
    error_log("DB_NAME: " . $dbname);
    error_log("DB_USER: " . $user);
    // Don't log the password for security reasons
    
    // Supabase connection string (without endpoint parameter)
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>