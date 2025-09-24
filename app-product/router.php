<?php
// Router script for PHP built-in server to handle clean URLs
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if it's a static file request
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let the server serve the static file
}

// Route all other requests through index.php
require_once __DIR__ . '/index.php';
?>