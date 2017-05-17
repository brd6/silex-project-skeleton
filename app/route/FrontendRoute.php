<?php
/**
 * Created by PhpStorm.
 * User: bongol_b
 * Date: 17/01/17
 * Time: 20:27
 */

namespace MyAppConfig\route;


use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;

class FrontendRoute implements ControllerProviderInterface
{

	/**
	 * @var ControllerCollection
	 */
	private $collection;


	/**
	 * Returns routes to connect to the given application.
	 *
	 * @param Application $app An Application instance
	 *
	 * @return ControllerCollection A ControllerCollection instance
	 */
	public function connect(Application $app)
	{
		$this->collection = $app["controllers_factory"];

		$this->collection->get("/", 'MyApp\Controller\FrontendController::indexAction')
			->bind("FrontendController_index");

		return $this->collection;
	}
}