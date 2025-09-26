<?php
// database/db.php
require_once __DIR__ . '/../config.php'; // Load config

 $host = DB_HOST;
 $port = DB_PORT;
 $dbname = DB_NAME;
 $user = DB_USER;
 $password = DB_PASS;

try {
    // Supabase connection string (using connection pooler)
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>