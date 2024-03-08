<?php

use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController', 'renderView', false);
$router->get('/blog', 'BlogController', 'renderView', false);
$router->get('/settings', 'SettingsController', 'renderView', false);
$router->get('/about', 'AboutController', 'renderView', false);

return $router;