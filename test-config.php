<?php
require_once 'vendor/autoload.php';

// Create a simple .env file programmatically
file_put_contents(__DIR__ . '/.env', "TEST_VAR=Hello World\n");

// Load it
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo "TEST_VAR: " . getenv('TEST_VAR');
?>