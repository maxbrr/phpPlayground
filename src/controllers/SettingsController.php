<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class SettingsController extends BaseController {
  public function __construct(Request $request) {
    parent::__construct($request);
    
    $this->viewName = 'Settings';
    
    $this->data = [
      'pageTitle' => 'Settings',
      'userName' => 'Prismo',
      'latestPosts' => [
        'postOne',
        'postTwo',
        'posthree'
      ]
    ];
  }
  
}
