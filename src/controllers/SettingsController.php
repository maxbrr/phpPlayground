<?php

namespace App\Controllers;
use App\Http\Request;
use App\Core\Debug;

class SettingsController extends BaseController {
  private array $data;

  public function __construct(Request $request) {
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

  public function serveSettings() {
    $content = $this->renderView('Settings', $this->data);
    return $content;
  }

  public function setData(array $data) {
    $this->data = $data;
  }
}
