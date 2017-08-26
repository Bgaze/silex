<?php

// Disable error reporting.
ini_set('display_errors', 0);

// Define required constants.
define('ROOT', __DIR__ . '/..');
define('CLI', false);
define('ENV', 'prod');

// Load dependencies.
require_once ROOT . '/vendor/autoload.php';

// Run application.
$app = require ROOT . '/src/app.php';
$app->run();
