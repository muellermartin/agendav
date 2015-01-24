<?php

$app['twig.path'] = array(__DIR__.'/../templates');

// Assets
$app['stylesheets'] = [
    'agendav.css',
    'jquery-ui.css',
    'jquery-ui.structure.css',
    'jquery-ui.theme.css',
    'fullcalendar.css',
    'jquery.qtip.css',
    'freeow.css',
    'jquery.timepicker.css',
    'colorpicker.css',
];

$app['print.stylesheets'] = [
    'app.print.css',
    'fullcalendar.print.css',
];

$app['scripts'] = [];

// Session parameters
$app['session.storage.options'] = [
    'name' => 'agendav_sess',
    'cookie_lifetime' => 0,
    'refresh' => 300,
];

// Calendar colors
$app['calendar.colors'] = [
    'D4EAEF',
    '3A89C9',
    '107FC9',
    'FAC5C0',
    'FF4E50',
    'BD3737',
    'C9DF8A',
    '77AB59',
    '36802D',
    'F8F087',
    'E6D5C1',
    '3E4147'
];

// Configure logging (1/2)
$app['monolog.level'] = 'WARNING';

// Load configuration settings
require __DIR__ . '/settings.php';

// Configure logging (2/2). Needs log.path
$app['monolog.logfile'] = $app['log.path'] . '/' . date('Y-m-d') . '.log';
