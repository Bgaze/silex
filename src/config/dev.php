<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// Include the prod configuration.
require ROOT . '/src/config/prod.php';

// Enable the debug mode.
$app['debug'] = true;

// Register dev specific providers.
$app->register(new MonologServiceProvider(), ['monolog.logfile' => ROOT . '/var/logs/silex_dev.log',]);
$app->register(new WebProfilerServiceProvider(), ['profiler.cache_dir' => ROOT . '/var/cache/profiler',]);
