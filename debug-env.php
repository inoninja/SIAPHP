<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Environment Variables Debug</h1>";

// Check if .env file exists
$envFile = __DIR__ . '/.env';
echo "<p>.env file exists: " . (file_exists($envFile) ? 'Yes' : 'No') . "</p>";
echo "<p>.env file path: " . $envFile . "</p>";

// Check if vendor/autoload.php exists
$autoloadFile = __DIR__ . '/vendor/autoload.php';
echo "<p>vendor/autoload.php exists: " . (file_exists($autoloadFile) ? 'Yes' : 'No') . "</p>";

// Try to load vendor/autoload.php
if (file_exists($autoloadFile)) {
    require_once $autoloadFile;
    echo "<p>vendor/autoload.php loaded successfully</p>";
    
    // Try to load .env
    try {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo "<p>.env file loaded successfully</p>";
        
        // Check environment variables
        echo "<h2>Environment Variables:</h2>";
        echo "<p>DB_HOST: " . getenv('DB_HOST') . "</p>";
        echo "<p>DB_NAME: " . getenv('DB_NAME') . "</p>";
        echo "<p>DB_USER: " . getenv('DB_USER') . "</p>";
        echo "<p>DB_PASS: " . getenv('DB_PASS') . "</p>";
echo "<p>pdo_pgsql extension loaded: " . (extension_loaded('pdo_pgsql') ? 'Yes' : 'No') . "</p>";
        echo "<p>variables_order: " . ini_get('variables_order') . "</p>";        echo "<p>TEST_VAR: </p>";
        var_dump(getenv('TEST_VAR'));
        echo "<h2>\$_ENV:</h2>";
        var_dump($_ENV);
        echo "<h2>\$_SERVER:</h2>";
        var_dump($_SERVER);
        
        // Check if variables are loaded
        if (getenv('DB_HOST')) {
            echo "<p style='color:green'>✓ Environment variables loaded successfully!</p>";
        } else {
            echo "<p style='color:red'>✗ Environment variables not loaded!</p>";
        }
    } catch (Exception $e) {
        echo "<p style='color:red'>Error loading .env: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p style='color:red'>vendor/autoload.php not found!</p>";
}
?>