<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class HomeController extends BaseController {
  private array $data;

  public function __construct(Request $request) {
    $this->data = [
      'pageTitle' => 'Home',
      'userName' => 'Prismo',
      'latestPosts' => [
        'postOne',
        'postTwo',
        'posthree'
      ]
    ];
  }

  public function serveHome() {
    $content = $this->renderView('Home', $this->data);
    return $content;
  }

  public function setData(array $data) {
    $this->data = $data;
  }
}
