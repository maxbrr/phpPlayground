<?php

namespace App\Core;

use App\Core\Debug;
use App\Http\Request;
use App\Controllers\HomeController;

class Dispatcher {
  private Request $request;
  private array $handler;

  public function __construct(Request $request, array $handler) {
    $this->request = $request;
    $this->handler = $handler;
  }


  public function dispatch() {
    $className = $this->handler['className'];
    $action = $this->handler['action'];

    $namespace = 'App\\Controllers\\';

    $fqClassName = $namespace . $className;

    $controller = new $fqClassName($this->request);

    $result = $controller->$action();

    echo $result;

    exit();
  }

}