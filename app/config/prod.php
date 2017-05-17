<?php
/**
 * Created by PhpStorm.
 * User: bberd
 * Date: 16/12/2016
 * Time: 19:14
 */

use Symfony\Component\HttpFoundation\Response;

$app["debug"] = false;

// monolog
$app->register(new Silex\Provider\MonologServiceProvider(), array(
	'monolog.logfile' => __DIR__.'/../../var/logs/prod-'.date('Y-m-d').'.log',
));


// Error page handler
$app->error(function (\Exception $e, Request $request, $code) use ($app)
{
	if (in_array($code, [404, 503, 500]))
		$render = $app['twig']->render("errors/$code.twig");
	else
		$render = $app['twig']->render("errors/503.twig");
	return new Response($render);
});