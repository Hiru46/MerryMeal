<?php
/**
 * Database Configuration Template
 * 
 * IMPORTANT: This is a template file. For production use:
 * 1. Copy this file to config.php or use environment variables
 * 2. Never commit config.php to version control
 * 3. Add config.php to .gitignore (already included)
 * 4. Update the values with your actual database credentials
 */

// Database Credentials
define('DB_HOST', 'localhost');        // Database host
define('DB_USER', 'root');             // Database username
define('DB_PASS', '');                 // Database password
define('DB_NAME', 'merrymeal');        // Database name
define('DB_PORT', 3306);               // Database port

// API Keys (if using external services)
// define('API_KEY', 'your_api_key_here');
// define('RAZORPAY_KEY', 'your_razorpay_key');

// Application Settings
define('APP_DEBUG', false);            // Set to true only in development
define('APP_ENV', 'production');       // production, staging, development

?>
