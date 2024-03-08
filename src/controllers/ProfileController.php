<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class ProfileController extends BaseController {

  public function __construct(Request $request) {
    parent::__construct($request);

    $this->viewName = 'Profile';

    $this->data = [
      'pageTitle' => 'Profile',
      'userName' => 'Prismo',
      'latestPosts' => [
        'postOne',
        'postTwo',
        'posthree'
      ]
    ];
  }

}
