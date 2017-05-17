<?php
/**
 * Created by PhpStorm.
 * User: bberd
 * Date: 25/08/2016
 * Time: 16:08
 */

date_default_timezone_set('Europe/Paris');

// twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../app/Resources/views',
    'cache' => __DIR__.'/../var/cache'
));

// session
$app->register(new Silex\Provider\SessionServiceProvider());

// doctrine
$app->register(new Silex\Provider\DoctrineServiceProvider());