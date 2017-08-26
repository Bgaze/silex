<?php

// Constants.
define('ENV', 'prod');
define('ROOT', __DIR__ . '/..');

// Disable error reporting.
ini_set('display_errors', 0);

// Load dependencies.
require_once ROOT . '/vendor/autoload.php';

// Run application.
$app = require ROOT . '/src/app.php';
$app->run();
