<?php
// database/db.php
require_once __DIR__ . '/../config.php'; // Load config instead of dotenv directly

$host = DB_HOST;
$port = DB_PORT;
$dbname = DB_NAME;
$user = DB_USER;
$password = DB_PASS;

try {
    error_log("DB_HOST: " . $host);
    error_log("DB_PORT: " . $port);
    error_log("DB_NAME: " . $dbname);
    error_log("DB_USER: " . $user);
    error_log("DB_PASS: " . $password);
    error_log("DB_ENDPOINT: " . $endpoint);

    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require;options=endpoint=$endpoint", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>