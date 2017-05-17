<?php

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__.'/../app/app.php';
require_once __DIR__.'/../app/config/prod.php';
require_once __DIR__.'/../app/routing.php';

$app->run();