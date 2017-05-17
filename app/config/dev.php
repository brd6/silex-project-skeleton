<?php
/**
 * Created by PhpStorm.
 * User: bberd
 * Date: 16/12/2016
 * Time: 19:14
 */

$app["debug"] = true;

// monolog
$app->register(new Silex\Provider\MonologServiceProvider(), array(
	'monolog.logfile' => __DIR__.'/../../var/logs/dev-'.date('Y-m-d').'.log',
));


// Error page handler
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
	return ;
});