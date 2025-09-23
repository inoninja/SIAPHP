<?php
echo "Current directory: " . __DIR__ . "<br>";
echo "Parent directory: " . dirname(__DIR__) . "<br>";
$dbPath = __DIR__ . '/../database/db.php';  // Correct path
echo "Database file exists: " . (file_exists($dbPath) ? 'Yes' : 'No') . "<br>";
echo "Database file path: " . $dbPath . "<br>";
?>