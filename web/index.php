<?php

// Disable error reporting.
ini_set('display_errors', 0);

// Define application root path.
define('ROOT', __DIR__ . '/..');

// Load dependencies.
require_once ROOT . '/vendor/autoload.php';

// Create application.
$app = require ROOT . '/src/app.php';

// Load configuration.
require ROOT . '/src/config/prod.php';

// Load controllers.
require ROOT . '/src/controllers/main.php';

// Run.
$app->run();
