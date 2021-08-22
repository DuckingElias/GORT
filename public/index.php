<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';
use Gort\Core\Application;

// When debug is enabled, display all error messages.
if(DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

// Rewrite REQUEST_URI, in case of running in an sub directory.
$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen(URL_PATH));

// Start the application.
(new Application())->start();