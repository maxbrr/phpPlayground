<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class HomeController extends BaseController {

  public function __construct(Request $request) {
    $this->viewName = 'Home';

    $this->data = [
      'pageTitle' => 'Home',
      'userName' => 'Prismo',
      'latestPosts' => [
        'postOne',
        'postTwo',
        'posthree',
      ]
    ];
  }

}
