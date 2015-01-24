<?php

use Silex\Provider\WebProfilerServiceProvider;


// Load defaults
require __DIR__ . '/prod.php';

$app['debug'] = true;
$app['http.debug'] = true;

$app->register(new WebProfilerServiceProvider(), [
    'profiler.cache_dir' => '/tmp'
]);

// Enable debug logging
$app['monolog.level'] = 'DEBUG';
