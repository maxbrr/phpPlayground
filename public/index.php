<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Debug;
use App\Http\Request;
use App\Core\Router;
use App\Core\Dispatcher;
use App\Views\ViewGenerator;

// create request instance
$request = new Request();
// require router instance
$router = require __DIR__ . '/../src/core/initRouter.php';
// pass request to router // array with handling information is returned
$handler = $router->getHandler($request) ?? null;
if(!$handler) {
  echo '404 - Not found';
  die();
}
// pass request and route handler to the Dispatcher
$dispatcher = new Dispatcher($request, $handler);
$dispatcher->dispatch();
