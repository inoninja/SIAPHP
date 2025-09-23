<?php
// pages/test-path.php
echo "Current file: " . __FILE__ . "\n";
echo "Current directory: " . __DIR__ . "\n";
echo "Parent directory: " . dirname(__DIR__) . "\n";
echo "db.php path: " . __DIR__ . '/../database/db.php' . "\n";
echo "db.php exists: " . (file_exists(__DIR__ . '/../database/db.php') ? 'Yes' : 'No') . "\n";
?>