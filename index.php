<?php

use Miny\Application\Application;

require_once 'vendor/autoload.php';

$app = new Application(Application::ENV_DEV);

$container = $app->getContainer();

/** @var $routes Closure */
$routes = require_once 'config/routes.php';
$routes($container->get('\\Miny\\Router\\Router'));

$app->run();
