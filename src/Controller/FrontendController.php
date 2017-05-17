<?php
/**
 * Created by PhpStorm.
 * User: bongol_b
 * Date: 17/01/17
 * Time: 20:57
 */

namespace MyApp\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class FrontendController
{
	public function indexAction(Application $app)
	{
		return $app["twig"]->render("frontend/index.html.twig");
	}
}