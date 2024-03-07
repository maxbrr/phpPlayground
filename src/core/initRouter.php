<?php

use App\Core\Router;


$router = new Router();

$router->get('/', 'HomeController', 'serveHome', false);
$router->get('/blog', 'BlogController', 'serveBlog', false);
$router->get('/settings', 'SettingsController', 'serveSettings', false);
$router->get('/profile', 'ProfileController', 'serveProfile', false);


return $router;