<?php

namespace App\Core;

use App\Core\Debug;
use App\Http\Request;

class Router {
  private array $routes;

  public function __construct() {
    $this->routes = [
      'GET' => [],
      'POST' => [],
      'PUT' => [],
      'DELETE' => []
    ];
  }

  public function getHandler(Request $request) {
    $handler = $this->routes[$request->getRequestMethod()][$request->getRequestUri()] ?? null;
    if($handler) {
      return $handler;
    } else {
      return null;
    }
  }

  public function get(string $path, string $className, string $action, bool $requiresLogin) {
    $this->routes['GET'][$path] = [
      'className' => $className,
      'action' => $action,
      'requiresLogin' => $requiresLogin
    ];
  }

  public function post(string $path, string $className, string $action, bool $requiresLogin) {
    $this->routes['POST'][$path] = [
      'className' => $className,
      'action' => $action,
      'requiresLogin' => $requiresLogin
    ];
  }
}