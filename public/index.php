<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MyApp\Database;

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Create a new database instance and check the connection
$db = new Database();
if ($db->connect()) {
    echo 'Connection successful!';
} else {
    echo 'Connection failed!';
}