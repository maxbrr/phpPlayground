<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class ProfileController extends BaseController {
  private array $data;

  public function __construct(Request $request) {
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

  public function serveProfile() {
    $content = $this->renderView('Profile', $this->data);
    return $content;
  }

  public function setData(array $data) {
    $this->data = $data;
  }
}
