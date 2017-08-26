<?php

// Configure app for the production environment
$app['twig.path'] = array(ROOT . '/src/views');
$app['twig.options'] = array('cache' => ROOT . '/var/cache/twig');
