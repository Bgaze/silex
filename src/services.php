<?php

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\AssetServiceProvider;
use Bgaze\Silex\Provider\FinderProvider;

// Controllers.
$app->register(new ServiceControllerServiceProvider());

// Assets.
$app->register(new AssetServiceProvider());

// Http fragments.
$app->register(new HttpFragmentServiceProvider());

// Twig.
$app->register(new TwigServiceProvider());
$app['twig.path'] = array(ROOT . '/src/views');
$app['twig.options'] = array('cache' => ROOT . '/var/cache/twig');
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

// Finder.
$app->register(new FinderProvider());
