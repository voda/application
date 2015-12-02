<?php

/**
 * Test: Nette\Application\Routers\Route with NoDefaultParams
 */

use Nette\Application\Routers\Route;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/Route.php';


$route = new Route('<presenter>/<action>/<extra>', array(
));

testRouteIn($route, '/presenter/action/12', 'Presenter', array(
	'action' => 'action',
	'extra' => '12',
	'test' => 'testvalue',
), NULL);
