<?php
// Database configuration
define('DB_SERVER', 'sql308.infinityfree.com');
define('DB_USERNAME', 'if0_40175419');
define('DB_PASSWORD', 'L5KaIeJZne');
define('DB_NAME', 'if0_40175419_battleart');

// Create connection
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    // If the connection fails, stop everything and show an error message.
    die("
        <div style='font-family: sans-serif; border: 2px solid red; padding: 1rem; margin: 1rem;'>
            <h2 style='color: red;'>Database Connection Error</h2>
            <p>Could not connect to the database. Please check your credentials in config.php.</p>
            <p><strong>Error details:</strong> " . htmlspecialchars($mysqli->connect_error) . "</p>
        </div>
    ");
}

?>
